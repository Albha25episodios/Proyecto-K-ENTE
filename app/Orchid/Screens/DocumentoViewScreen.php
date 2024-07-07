<?php

namespace App\Orchid\Screens;

use App\Models\Tabla_raiz;
use Orchid\Screen\Screen;
use Orchid\Screen\Sight;
use Orchid\Support\Facades\Layout;

class DocumentoViewScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Tabla_raiz $documento): iterable
    {
        $documento->load('castellano.quechua', 'castellano.aymara');
        
        return [
            'documento' => $documento,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'DocumentoViewScreen';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
        Layout::legend('documento', [

            Sight::make('castellano.palabra', 'Palabra'),

            Sight::make('contenido')
                  ->render(function ($documento) {
                    return '<div>' . $documento->contenido . '</div>';
                }),

            Sight::make('castellano.quechua', 'QUECHUA')
                ->render(function ($documento) {
                    $palabras = $documento->castellano->quechua->pluck('palabra', 'significado'); // Assuming 'significado' is the attribute name for the meaning
                    $items = '';
                    foreach ($palabras as $significado => $palabra) {
                        $items .= "<li><b>$palabra</b> : $significado.</li>";
                    }
                    return "<ul style='list-style-type:disc; padding-left:15px; margin:0;'>$items</ul>";
                }),
                
            Sight::make('castellano.aymara', 'AYMARA')
                ->render(function ($documento) {
                    $palabras = $documento->castellano->aymara->pluck('palabra', 'significado'); // Assuming 'significado' is the attribute name for the meaning
                    $items = '';
                    foreach ($palabras as $significado => $palabra) {
                        $items .= "<li><b>$palabra</b> : $significado.</li>";
                    }
                    return "<ul style='list-style-type:disc; padding-left:15px; margin:0;'>$items</ul>";
                }),

            ]),
        ];
    }
}
