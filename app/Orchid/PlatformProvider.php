<?php

namespace App\Orchid;

use Laravel\Scout\Searchable;
use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemMenu;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * @return ItemMenu[]
     */
    public function registerMainMenu(): array
    {
        return [

            ItemMenu::label('Основная информация')
                ->icon('icon-monitor')
                ->route('platform.basics')
                ->title('Основная информация'),

            ItemMenu::label('Портфолио')
                ->icon('icon-briefcase')
                ->route('platform.works'),

            ItemMenu::label('Социальные сети')
                ->icon('icon-globe')
                ->route('platform.socials'),

//            ItemMenu::label('Sub element item 1')
//                ->place('example-menu')
//                ->icon('icon-bag'),
//
//            ItemMenu::label('Sub element item 2')
//                ->place('example-menu')
//                ->icon('icon-heart'),
//
//            ItemMenu::label('Basic Elements')
//                ->title('Form controls')
//                ->icon('icon-note')
//                ->route('platform.example.fields'),
//
//            ItemMenu::label('Advanced Elements')
//                ->icon('icon-briefcase')
//                ->route('platform.example.advanced'),
//
//            ItemMenu::label('Text Editors')
//                ->icon('icon-list')
//                ->route('platform.example.editors'),
//
//            ItemMenu::label('Overview layouts')
//                ->title('Layouts')
//                ->icon('icon-layers')
//                ->route('platform.example.layouts'),
//
//            ItemMenu::label('Chart tools')
//                ->icon('icon-bar-chart')
//                ->route('platform.example.charts'),
//
//            ItemMenu::label('Cards')
//                ->icon('icon-grid')
//                ->route('platform.example.cards'),
//
//            ItemMenu::label('Documentation')
//                ->title('Docs')
//                ->icon('icon-docs')
//                ->url('https://orchid.software/en/docs'),
        ];
    }

    /**
     * @return ItemMenu[]
     */
    public function registerProfileMenu(): array
    {
        return [
            ItemMenu::label('Action')
                ->icon('icon-compass')
                ->badge(function () {
                    return 6;
                }),

            ItemMenu::label('Another action')
                ->icon('icon-heart'),
        ];
    }

    /**
     * @return ItemMenu[]
     */
    public function registerSystemMenu(): array
    {
        return [
            ItemMenu::label(__('Права'))
                ->icon('icon-lock')
                ->slug('Auth')
                ->active('platform.systems.*')
                ->permission('platform.systems.index')
                ->sort(1000),

            ItemMenu::label(__('Пользователи'))
                ->place('Auth')
                ->icon('icon-user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->sort(1000)
                ->title(__('Все зарегистрированные администраторы системы')),

            ItemMenu::label(__('Роли'))
                ->place('Auth')
                ->icon('icon-lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles')
                ->sort(1000)
                ->title(__('Роли определяют возможности пользователей в системе')),
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('Systems'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }

    /**
     * @return Searchable|string[]
     */
    public function registerSearchModels(): array
    {
        return [
            // ...Models
            // \App\User::class
        ];
    }
}
