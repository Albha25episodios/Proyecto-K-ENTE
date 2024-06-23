<?php

namespace App\Orchid\Screens;

use App\Models\Quechua;
use App\Models\User;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class QuechuaEditScreen extends Screen
{

    public $quechua;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Quechua $quechua): iterable
    {
        return [
          'quechua' => $quechua
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->quechua->exists ? 'Editar palabra' : 'Crear nueva palabra';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
          Button::make('Añadir palabra')
              ->icon('pencil')
              ->method('createOrUpdate')
              ->canSee(!$this->quechua->exists),

          Button::make('Update')
              ->icon('note')
              ->method('createOrUpdate')
              ->canSee($this->quechua->exists),

          Button::make('Remove')
              ->icon('trash')
              ->method('remove')
              ->canSee($this->quechua->exists),

          
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
            Layout::rows([
                Input::make('quechua.palabra')
                    ->title('Title')
                    ->placeholder('Attractive but mysterious title')
                    ->help('Specify a short descriptive title for this post.'),

                TextArea::make('quechua.significado')
                    ->title('Significado')
                    ->rows(3)
                    ->maxlength(200)
                    ->placeholder('Brief description for preview'),
            ])
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $this->quechua->fill($request->get('quechua'))->save();

        Alert::info('You have successfully created a word.');

        return redirect()->route('platform.quechua.list');
    }

    public function remove()
    {
        $this->quechua->delete();

        Alert::info('You have successfully deleted the word.');

        return redirect()->route('platform.quechua.list');
    }
}


