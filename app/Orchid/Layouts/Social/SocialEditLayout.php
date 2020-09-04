<?php

namespace App\Orchid\Layouts\Social;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Radio;
use Orchid\Screen\Layouts\Rows;

class SocialEditLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): array
    {
        return [
            Input::make('social.name')
                ->type('text')
                ->max(128)
                ->required()
                ->title(__('Название'))
                ->placeholder(__('Введите название соц.сети')),

            Input::make('social.url')
                ->type('text')
                ->max(256)
                ->title(__('Ссылка'))
                ->placeholder(__('Ссылка на социальную сеть')),

            Picture::make('social.icon')
                ->title('Логотип')
                ->required()
                ->targetRelativeUrl(),

            Radio::make('social.is_enabled')
                ->placeholder('Активно')
                ->value(1)
                ->checked(true)
                ->title('Активность'),

            Radio::make('social.is_enabled')
                ->placeholder('Не активно')
                ->value(0)
                ->help('Сделать соц.сети активной для посетителей')
        ];
    }
}
