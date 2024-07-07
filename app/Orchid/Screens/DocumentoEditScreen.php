<?php

namespace App\Orchid\Screens;

use App\Models\Aymara;
use App\Models\Castellano;
use App\Models\Quechua;
use App\Models\Tabla_raiz;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class DocumentoEditScreen extends Screen
{
    public $documento;
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
        return $this->documento->exists ? 'Edit documento' : 'Creating a new documento';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Blog documentos";
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create post')
                ->icon('pencil')
                ->method('save')
                ->canSee(!$this->documento->exists),

            Button::make('Update')
                ->icon('note')
                ->method('save')
                ->canSee($this->documento->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->documento->exists),
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

                Relation::make('documento.castellano_id')
                    ->fromModel(Castellano::class, 'palabra')
                    ->title('Palabra en Castellano')
                    ->required(),

                Quill::make('documento.contenido')
                    ->title('Contenido')
                    ->required(),

                Relation::make('documento.castellano.quechua')
                    ->fromModel(Quechua::class, 'palabra')
                    ->multiple()
                    ->title('Palabras en Quechua'),

                Relation::make('documento.castellano.aymara')
                    ->fromModel(Aymara::class, 'palabra')
                    ->multiple()
                    ->title('Palabras en Aymara'),

            ]),
        ];
    }
    public function save(Request $request, Tabla_Raiz $documento)
    {
        $request->validate([
            'documento.castellano_id' => 'required|exists:castellanos,id',
            'documento.contenido' => 'required|string',
        ]);

        $documento->fill($request->get('documento'))->save();

        $documento->castellano->quechua()->sync($request->input('documento.castellano.quechua', []));
        $documento->castellano->aymara()->sync($request->input('documento.castellano.aymara', []));

        Alert::info('Documento creado con éxito.');

        return redirect()->route('platform.documento.list');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove()
    {
        $this->documento->delete();

        Alert::info('You have successfully deleted the post.');

        return redirect()->route('platform.documento.list');
    }
}
