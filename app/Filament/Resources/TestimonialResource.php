<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Filament\Resources\TestimonialResource\RelationManagers;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    protected static ?string $navigationGroup = 'Boarding House Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('photo')
                ->image()
                ->directory('testimonials')
                ->required()
                ->columnSpan(2),
                Forms\Components\Select::make('boarding_house_id')
                ->relationship('boardingHouse', 'name')
                ->required()
                ->columnSpan(2),
                Forms\Components\TextArea::make('content')
                ->required()
                ->columnSpan(2),
                Forms\Components\TextInput::make('name')
                ->required(),
                Forms\Components\TextInput::make('rating')
                ->numeric()
                ->minValue(1)
                ->maxValue(5)
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo'),
                Tables\Columns\TextColumn::make('boardingHouse.name'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('content'),
                Tables\Columns\TextColumn::make('rating'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }    
}
