<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GraduantsResultsResource\Pages;
use App\Filament\Resources\GraduantsResultsResource\RelationManagers;
use App\Models\GraduantsResults;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GraduantsResultsResource extends Resource
{
    protected static ?string $model = GraduantsResults::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('firstname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('middlename')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('lastname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('admission')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('score')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('course')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('faculty')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('college_cumpus')
                ->label('College Campus')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('school_faculty')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('programme')
                    ->searchable(),
                Tables\Columns\TextColumn::make('reg_adm_no')
                ->label('Admission No')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('specialization'),
                Tables\Columns\TextColumn::make('mean_score'),
                Tables\Columns\TextColumn::make('degree_class'),
                Tables\Columns\TextColumn::make('level'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone'),
            ])
            ->filters([
                //
            ])
            ->actions([
                //Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListGraduantsResults::route('/'),
            'create' => Pages\CreateGraduantsResults::route('/create'),
            'edit' => Pages\EditGraduantsResults::route('/{record}/edit'),
        ];
    }
}
