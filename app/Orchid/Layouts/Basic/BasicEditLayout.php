<?php

namespace App\Orchid\Layouts\Basic;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Radio;
use Orchid\Screen\Layouts\Rows;

class BasicEditLayout extends Rows
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
            Input::make('basic.name')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Название'))
                ->placeholder(__('Введите название')),

            Input::make('basic.address_main')
                ->type('text')
                ->max(512)
                ->title(__('Адрес'))
                ->placeholder(__('Введите адрес')),

            Input::make('basic.address_additional')
                ->type('text')
                ->max(512)
                ->title(__('Адрес (дополнительно)'))
                ->placeholder(__('Введите адрес')),

            Input::make('basic.city')
                ->type('text')
                ->max(128)
                ->title(__('Город'))
                ->placeholder(__('Введите город')),

            Input::make('basic.country')
                ->type('text')
                ->max(128)
                ->title(__('Страна'))
                ->placeholder(__('Введите страну')),

            Input::make('basic.phone_main')
                ->required()
                ->mask('999 (99) 999-99-99')
                ->title('Основной телефон')
                ->help('Введите основной номер телефона (Обязательно)'),

            Input::make('basic.phone_additional')
                ->mask('999 (99) 999-99-99')
                ->title('Дополнительный номер телефона')
                ->help('Введите основной номер дополнительного телефона (Не обязательно)'),

            Input::make('basic.email')
                ->type('email')
                ->title('Email')
                ->placeholder('Email')
                ->help("Введите основной электронный адрес"),

            Picture::make('basic.image')
                ->title('Логотип')
                ->required()
                ->targetRelativeUrl(),

            CheckBox::make('basic.is_active')
                ->value(1)
                ->sendTrueOrFalse()
                ->title('Активность')
                ->placeholder('Активно')
                ->help('Сделать информацию активной для посетителей')
        ];
    }
}
