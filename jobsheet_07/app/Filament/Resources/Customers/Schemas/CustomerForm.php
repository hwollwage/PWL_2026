<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Actions\Action as ActionsAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Illuminate\Mail\Markdown;
use Illuminate\Notifications\Action;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make([
                    // step customer data
                    Step::make('Customer Data')
                        ->description('name, age, & gender')
                        ->schema([
                            Group::make([
                                TextInput::make('name')
                                    ->required(),
                                TextInput::make('age')
                                    ->numeric()
                                    ->required(),
                            ]),
                            MarkdownEditor::make('customer description (black, asian, hispanic, white?)')
                        ]),
                    // step customer contact
                    Step::make('Customer Contact')
                        ->description('email & phone num')
                        ->schema([
                            TextInput::make('email')
                                ->required()
                                ->unique(),
                            TextInput::make('phone')
                                ->numeric()
                                ->required(),
                        ]),
                    // step customer details
                    Step::make('Customer Details')
                        ->description('their image & address')
                        ->schema([
                            FileUpload::make('image')
                                ->disk('public')
                                ->directory('customers'),
                            MarkdownEditor::make('address'),
                        ]),
                ])
                ->columnSpanFull()
                ->submitAction(
                    ActionsAction::make('save')
                        ->label('Save Data')
                        ->button()
                        ->color('primary')
                        ->submit('save'),
                )
            ]);
    }
}
