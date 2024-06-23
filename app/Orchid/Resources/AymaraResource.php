<?php

namespace App\Orchid\Resources;

use App\Orchid\Filters\QuechuaFilter;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class AymaraResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Aymara::class;

    /**
     * Resource single value.
     *
     * @return string
     */
    public static function single(): string
    {
        return 'Aymara';
    }

    /**
     * Resource label.
     *
     * @return string
     */
    public static function label(): string
    {
        return 'Aymara';
    }

    /**
     * Resource description.
     *
     * @return string
     */
    public static function description(): string
    {
        return 'Gestión de palabras en Aymara';
    }

    /**
     * Resource slug.
     *
     * @return string
     */
    public static function slug(): string
    {
        return 'aymaras';
    }

    /**
     * Resource group.
     *
     * @return string
     */
    public static function group(): string
    {
        return 'Idiomas';
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
          Input::make('palabra')
              ->title('PALABRA')
              ->placeholder('ingrese palabra en aymara'),

          TextArea::make('significado')
              ->title('SIGNIFICADO')
              ->rows(2)
              ->placeholder('ingrese significado de la palabra'),
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),

            TD::make('palabra', __('PALABRA')),

            TD::make('significado', __('SIGNIFICADO')),

            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [
          Sight::make('id', 'ID'),
          Sight::make('palabra', 'PALABRA'),
          Sight::make('significado', 'SIGNIFICADO'),
          Sight::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),
          Sight::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),

        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [
          QuechuaFilter::class
        ];
    }
}
