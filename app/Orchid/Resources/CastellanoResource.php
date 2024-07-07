<?php

namespace App\Orchid\Resources;

use App\Models\Castellano;
use App\Orchid\Filters\QuechuaFilter;
use Orchid\Crud\Resource;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Menu;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class CastellanoResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Castellano::class;

    /**
     * Resource single value.
     *
     * @return string
     */
    public static function single(): string
    {
        return 'Castellano';
    }

    /**
     * Resource label.
     *
     * @return string
     */
    public static function label(): string
    {
        return 'Castellano';
    }

    /**
     * Resource description.
     *
     * @return string
     */
    public static function description(): string
    {
        return 'Gestión de palabras en Castellano';
    }

    /**
     * Resource icon.
     *
     * @return string
     */
    public static function icon(): string
    {
        return 'bs.book';
    }

    /**
     * Resource slug.
     *
     * @return string
     */
    public static function slug(): string
    {
        return 'castellanos';
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
              ->placeholder('ingrese palabra')
              ->autocomplete('off'),

          Input::make('significado_quechua')
              ->title('SIGNIFICADO - QUECHUA')
              ->autocomplete('off'),

          Input::make('significado_aymara')
              ->title('SIGNIFICADO - AYMARA')
              ->autocomplete('off'),
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
            TD::make('id', 'ID'),
            TD::make('palabra', __('PALABRA')),
            TD::make('significado_quechua', 'EN QUECHUA'),
            TD::make('significado_aymara', 'EN AYMARA'),

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
          Sight::make('significado_quechua', 'SIGNIFICADO - QUECHUA'),
          Sight::make('significado_aymara', 'SIGNIFICADO - AYMARA'),
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
