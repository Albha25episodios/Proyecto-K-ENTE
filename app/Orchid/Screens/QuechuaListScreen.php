<?php

namespace App\Orchid\Screens;

use App\Models\Quechua;
use App\Orchid\Layouts\QuechuaListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class QuechuaListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
          'quechuas' => Quechua::paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Palabras en quechua';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
          Link::make('Create new')
              ->icon('pencil')
              ->route('platform.quechua.edit')
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
          QuechuaListLayout::class
        ];
    }
}
