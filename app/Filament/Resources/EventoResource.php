<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Evento;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components as Fc;
use Illuminate\Database\Eloquent\Builder;
use Leandrocfe\FilamentPtbrFormFields\Cep;
use App\Filament\Resources\EventoResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EventoResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

class EventoResource extends Resource
{
    protected static ?string $model = Evento::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Fc\TextInput::make('nome')->label('Evento')->columnSpanFull()->required(),
                Fc\TextInput::make('url')->label('Link do Ingresso')->url()->prefixIcon('heroicon-o-link'),

                Fc\Fieldset::make()->columns(4)->relationship('endereco')->schema([
                    Cep::make('cep')->required()->viaCep(setFields: [
                        'logradouro' => 'logradouro',
                        'uf'         => 'uf',
                        'bairro'     => 'bairro',
                        'cidade'     => 'localidade',
                    ]),
                    Forms\Components\TextInput::make('logradouro')->columnSpan(2),
                    Forms\Components\TextInput::make('numero')->label('Nº'),
                    Forms\Components\TextInput::make('complemento'),
                    Forms\Components\TextInput::make('bairro')->required(),
                    Forms\Components\TextInput::make('cidade')->required(),
                    Forms\Components\TextInput::make('uf')->label('UF')->required(),
                ]),

                Fc\Fieldset::make()->schema([
                    Fc\Repeater::make('datas')->relationship()->columnSpanFull()->grid(3)->simple(
                        Fc\DatePicker::make('data')->required()
                    )
                ])
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome')->label('Evento')->searchable(),
                TextColumn::make('endereco.cidade')->label('Cidade'),
                TextColumn::make('texto_datas')->badge()->label('Datas'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Data de Criação')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Data de Atualização')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListEventos::route('/'),
            'create' => Pages\CreateEvento::route('/create'),
            'edit' => Pages\EditEvento::route('/{record}/edit'),
        ];
    }
}
