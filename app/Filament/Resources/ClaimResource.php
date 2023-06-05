<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClaimResource\Pages;
use App\Filament\Resources\ClaimResource\RelationManagers;
use App\Models\Claim;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClaimResource extends Resource
{
    protected static ?string $model = Claim::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Sinistre';
    protected static ?string $pluralLabel = 'Sinistres';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('assurance_id')
                    ->relationship('assurance', 'id')
                    ->required(),
                Forms\Components\Select::make('type_id')
                    ->relationship('type', 'id')
                    ->required(),
                Forms\Components\TextInput::make('full_name')
                    ->maxLength(255)
                    ->label('Nom & prénoms'),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contact_1')
                    ->maxLength(255)
                    ->label('Contact 1'),
                Forms\Components\TextInput::make('contact_2')
                    ->maxLength(255)
                    ->label('Contact 2'),
                Forms\Components\TextInput::make('place')
                    ->maxLength(255)
                    ->label('Lieu'),
                Forms\Components\DatePicker::make('date'),
                Forms\Components\Textarea::make('description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('assurance.id'),
                Tables\Columns\TextColumn::make('type.id'),
                Tables\Columns\TextColumn::make('full_name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('contact_1'),
                Tables\Columns\TextColumn::make('contact_2'),
                Tables\Columns\TextColumn::make('place'),
                Tables\Columns\TextColumn::make('date')
                    ->date(),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListClaims::route('/'),
            'create' => Pages\CreateClaim::route('/create'),
            'edit' => Pages\EditClaim::route('/{record}/edit'),
        ];
    }
}
