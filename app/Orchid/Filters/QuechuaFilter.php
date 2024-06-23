<?php

namespace App\Orchid\Filters;

use Illuminate\Database\Eloquent\Builder;
use Orchid\Filters\Filter;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;

class QuechuaFilter extends Filter
{
    /**
     * The displayable name of the filter.
     *
     * @return string
     */
    public function name(): string
    {
        return __('Buscar palabra');
    }

    /**
     * The array of matched parameters.
     *
     * @return array|null
     */
    public function parameters(): ?array
    {
        return ['palabra'];
    }

    /**
     * Apply to a given Eloquent query builder.
     *
     * @param Builder $builder
     *
     * @return Builder
     */
    public function run(Builder $builder): Builder
    {
        return $builder->where('palabra', 'like', '%' . $this->request->get('palabra') . '%');
    }

    /**
     * Get the display fields.
     *
     * @return Field[]
     */
    public function display(): iterable
    {
        return [
            Input::make('palabra')
                ->type('text')
                ->value($this->request->get('palabra'))
                ->title(__('Palabra'))
                ->placeholder(__('Ingresa la palabra a buscar')),
        ];
    }
    /**
     * Value to be displayed
     */
    public function value(): string
    {
        $palabra = $this->request->get('palabra');
        return $this->name() . ': ' . ($palabra ? $palabra : __('Ninguna palabra seleccionada'));
    }
}
