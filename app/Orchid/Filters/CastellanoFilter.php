<?php

namespace App\Orchid\Filters;

use App\Models\Castellano;
use Illuminate\Database\Eloquent\Builder;
use Orchid\Filters\Filter;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;

class CastellanoFilter extends Filter
{
    /**
     * The displayable name of the filter.
     *
     * @return string
     */
    public function name(): string
    {
        return '';
    }

    /**
     * The array of matched parameters.
     *
     * @return array|null
     */
    public function parameters(): ?array
    {
        return ['search'];
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
        return $builder->where('palabra', 'like', '%' . $this->request->get('search') . '%');
    }

    /**
     * Get the display fields.
     *
     * @return Field[]
     */
    public function display(): iterable
    {
        return [
            Input::make('search')
                ->type('text')
                ->value($this->request->get('search'))
                ->placeholder('Buscar palabras...')
                ->title('Buscar')
        ];
    }

    public function value(): string
    {
        $palabra = Castellano::where('palabra', $this->request->get('search'))->first();
        $palabraTexto = $palabra ? $palabra->palabra : 'No encontrada';

        return $this->name() . ': ' . $palabraTexto;
    }
}
