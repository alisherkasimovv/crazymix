<?php

namespace App\Orchid\Layouts\About;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Radio;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\TextArea;

class AboutEditLayout extends Rows
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
            Input::make('about.name')
                ->type('text')
                ->max(128)
                ->required()
                ->title(__('Название'))
                ->placeholder(__('Введите название соц.сети')),

            TextArea::make('about.text')
                ->rows(5)
                ->title(__('Текст'))
                ->placeholder(__('Краткий текст')),

            Picture::make('about.image')
                ->title('Изображение')
                ->required()
                ->targetRelativeUrl(),

            CheckBox::make('about.is_enabled')
                ->value(1)
                ->sendTrueOrFalse()
                ->title('Активность')
                ->placeholder('Активно')
                ->help('Сделать информацию активной для посетителей'),

        ];
    }
}
