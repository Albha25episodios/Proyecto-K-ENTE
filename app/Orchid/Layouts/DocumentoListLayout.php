<?php

namespace App\Orchid\Layouts;

use App\Models\Tabla_raiz;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class DocumentoListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'documentos';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('castellano.palabra', 'Palabra')
                ->sort()
                ->filter(TD::FILTER_TEXT),

            TD::make('contenido', 'Contenido')
                ->sort()
                ->filter(TD::FILTER_TEXT)
                ->render(function ($documento) {
                    return '<div style="width: 600px; height: 200px; overflow: hidden; text-overflow: ellipsis;">' . $documento->contenido . '</div>';
                }),
                
            TD::make('castellano.quechua', 'Quechua')
                ->align(TD::ALIGN_CENTER)
                ->render(function ($documento) {
                    $palabras = $documento->castellano->quechua->pluck('palabra');
                    $items = '';
                    foreach ($palabras as $palabra) {
                        $items .= "<li>$palabra</li>";
                    }
                    return "<ul style='list-style-type:disc; padding-left:15px;'>$items</ul>";
                }),

            TD::make('castellano.aymara', 'Aymara')
                ->align(TD::ALIGN_CENTER)
                ->render(function ($documento) {
                    $palabras = $documento->castellano->aymara->pluck('palabra');
                    $items = '';
                    foreach ($palabras as $palabra) {
                        $items .= "<li>$palabra</li>";
                    }
                    return "<ul style='list-style-type:disc; padding-left:15px;'>$items</ul>";
                }),

             TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('180px')
                ->render(function (Tabla_raiz $documento) {
                    return Group::make([
                        Link::make(__('View'))
                            ->icon('bs.eye')
                            ->route('platform.documento.view', $documento->castellano_id),

                        Link::make(__('Edit'))
                            ->icon('bs.pencil')
                            ->route('platform.documento.edit', $documento->castellano_id), 
                          ]);
                }),
        ];
    }
}
