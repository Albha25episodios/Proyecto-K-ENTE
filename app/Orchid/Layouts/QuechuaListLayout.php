<?php

namespace App\Orchid\Layouts;

use App\Models\Quechua;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class QuechuaListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'quechuas';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('palabra', 'PALABRA')
                ->render(function (Quechua $quechua) {
                    return Link::make($quechua->palabra)
                        ->route('platform.quechua.edit', $quechua);
                }),
                
            TD::make('significado', __('SIGNIFICADO')),
            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Quechua $quechua) {
                    return Group::make([
                          Link::make(__('View'))
                              ->icon('bs.eye')
                              ->route('platform.quechua.edit', $quechua),

                          Link::make(__('Edit'))
                              ->icon('bs.pencil')
                              ->route('platform.quechua.edit', $quechua),  
                          ]);
                }),
        ];
    }
}
