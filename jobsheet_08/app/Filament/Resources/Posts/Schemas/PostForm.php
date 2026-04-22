<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Group;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // LEFT SIDE (2/3)
                Group::make([

                    // POST DETAILS
                    Section::make('Post Details')
                        ->description('Fill in the details of the post')
                        ->icon('heroicon-o-document-text')
                        ->schema([

                            Group::make([
                                TextInput::make('title')
                                    // ->maxLength(255)
                                    // ->minLength(5)
                                    // ->required(),
                                    ->rules('required|min:5|max:10'),

                                TextInput::make('slug')
                                    //->rules('unique:posts,slug|min:3'),    
                                    ->unique()
                                    ->minLength(3)
                                     ->validationMessages([
                                        'unique' => 'slug should be unique bro'
                                     ]),
                                    // ->unique()
                                    // ->required(),
                                    // ->rules('required')
                                    // ->unique()
                                    

                                Select::make('category_id')
                                    //->rule('required')
                                    ->relationship('category', 'name')
                                    ->preload()
                                    ->searchable()
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'choose the category twin, its required'
                                    ]),

                                ColorPicker::make('color'),
                            ])->columns(2),

                            MarkdownEditor::make('content')
                                ->columnSpanFull(),

                        ]),

                    // IMAGE UPLOAD (now on left)
                    Section::make('Image Upload')
                        ->icon('heroicon-o-photo')
                        ->schema([
                            FileUpload::make('image')
                                ->required()
                                ->validationMessages([
                                    'required' => 'image needed to be filled fam'
                                ])
                                ->disk('public')
                                ->directory('posts'),
                        ]),

                ])
                ->columnSpan(2), // 2/3

                // RIGHT SIDE (1/3)
                Section::make('Meta Information')
                    ->icon('heroicon-o-information-circle')
                    ->schema([
                        TagsInput::make('tags'),

                        Checkbox::make('published')
                            ->default(false),

                        DatePicker::make('published_at'),
                    ])
                    ->columnSpan(1), // 1/3

            ])
            ->columns(3);
    }
}