<?php

namespace App\Orchid\Layouts\WorkType;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Radio;
use Orchid\Screen\Layouts\Rows;

class WorkTypeEditLayout extends Rows
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
            Input::make('workType.name')
                ->type('text')
                ->max(128)
                ->required()
                ->title(__('Тип работы'))
                ->placeholder(__('Введите тип работы')),

            Input::make('workType.description')
                ->type('text')
                ->max(512)
                ->required()
                ->title(__('Краткое описание'))
                ->placeholder(__('Введите краткое описание работы')),

            Radio::make('workType.main_work')
                ->placeholder('Отображать')
                ->value(1)
                ->checked(true)
                ->title('Отображение в главном блоке'),

            Radio::make('workType.main_work')
                ->placeholder('Не отображать')
                ->value(0)
                ->help('Управление отображением данной работы в гланом блоке веб-сайта.'),

            Radio::make('workType.is_enabled')
                ->placeholder('Активно')
                ->value(1)
                ->checked(true)
                ->title('Активность'),

            Radio::make('workType.is_enabled')
                ->placeholder('Не активно')
                ->value(0)
                ->help('Сделать информацию активной для посетителей'),
        ];
    }
}
