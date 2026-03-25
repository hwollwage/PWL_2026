<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Actions\Action;

use function Laravel\Prompts\text;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make([
                    // STEP PRODUCT INFO
                    Step::make('Product Info')
                        ->description('Isi Informasi Produk')
                        ->icon('heroicon-o-user')
                        ->schema([
                            Group::make([
                                TextInput::make('name')
                                    ->required(),
                                TextInput::make('sku')
                                    ->required(),
                            ])->columns(2),
                            MarkdownEditor::make('description')
                        ]),
                    // STEP PRICCING & STOCK
                    Step::make('Pricing & Stock')
                        ->description('Isi harga dan jumlah stok')
                        ->icon('heroicon-o-star')
                        ->schema([
                            TextInput::make('price')
                                ->numeric()
                                //->gt(0)
                                ->validationMessages(['min' => 'price should greater than 0',])
                                ->minValue(0.01)
                                
                                ->required(),
                            TextInput::make('stock')
                                ->numeric()
                                ->required(),
                        ]),
                    // STEP MEDIA & STATUS
                    Step::make('Media & Status')
                        ->description('Upload gambar & atur status')
                        ->icon('heroicon-o-magnifying-glass')
                        ->schema([
                            FileUpload::make('image')
                                ->disk('public')
                                ->directory('products'),
                            Checkbox::make('is_active'),
                            Checkbox::make('is_featured'),
                        ])
                ])
                ->columnSpanFull()
                // ADD SUBMIT BUTTON
                ->submitAction(
                    Action::make('save')
                        ->label('save product')
                        ->button()
                        ->color('primary')
                        ->submit('save')
                )
            ]);
    }
}
