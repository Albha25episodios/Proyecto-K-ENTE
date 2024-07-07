<?php

declare(strict_types=1);

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;
use Orchid\Resources\CastellanoResource;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Dashboard $dashboard
     *
     * @return void
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);
    }

    /**
     * Register the application menu.
     *
     * @return Menu[]
     */
    public function menu(): array
    {
        
        return [
          
            Menu::make('Get Started')
                ->icon('bs.book')
                ->title('Navigation')
                ->route(config('platform.index')),

            Menu::make('Sample Screen')
                ->icon('bs.collection')
                ->route('platform.example'),

                //--------------------------------------------
            /* Menu::make('Sample Screen')
                ->icon('bs.collection')
                ->route('platform.example.fields'),

            Menu::make('Sample Screen')
                ->icon('bs.collection')
                ->route('platform.example.advanced'),
                
            Menu::make('Sample Screen')
                ->icon('bs.collection')
                ->route('platform.example.editors'),

            Menu::make('Sample Screen')
                ->icon('bs.collection')
                ->route('platform.example.actions'),
                
            Menu::make('Sample Screen')
                ->icon('bs.collection')
                ->route('platform.example.layouts'),

            Menu::make('Sample Screen')
                ->icon('bs.collection')
                ->route('platform.example.grid'),

            Menu::make('Sample Screen')
                ->icon('bs.collection')
                ->route('platform.example.charts'),

            Menu::make('Sample Screen')
                ->icon('bs.collection')
                ->route('platform.example.cards'),
 */
                //--------------------------------------------

            Menu::make(__('Users'))
                ->icon('bs.people')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access Controls')),

            Menu::make(__('Roles'))
                ->icon('bs.shield')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles')
                ->divider(),

            Menu::make(__('DOCUMENTOS'))
                ->icon('bs.people')
                ->route('platform.documento.list')
                ->title(__('Documento')),
        ];
    }

    /**
     * Register permissions for the application.
     *
     * @return ItemPermission[]
     */
    public function permissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }
}
