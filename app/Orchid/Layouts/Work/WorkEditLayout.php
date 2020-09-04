<?php

namespace App\Orchid\Layouts\Work;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Radio;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layout;
use Orchid\Screen\Layouts\Rows;

class WorkEditLayout extends Rows
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
            Input::make('work.name')
                ->type('text')
                ->max(128)
                ->required()
                ->title(__('Название проекта'))
                ->placeholder(__('Введите название проекта')),

            Input::make('work.brief')
                ->type('text')
                ->max(256)
                ->title(__('Краткое описание'))
                ->placeholder(__('Введите краткое описание работы')),

            TextArea::make('work.description')
                ->title('Полная информация')
                ->placeholder('Опишите выполненную работу более подробно')
                ->rows(6),

            Upload::make('work.attachment')
                ->title('Изображения'),

            Radio::make('work.is_enabled')
                ->placeholder('Активно')
                ->value(1)
                ->checked(true)
                ->title('Активность'),

            Radio::make('work.is_enabled')
                ->placeholder('Не активно')
                ->value(0)
                ->help('Сделать информацию активной для посетителей'),

            Radio::make('work.shown_at_main')
                ->placeholder('Показывать')
                ->value(1)
                ->checked(true)
                ->title('Видимость'),

            Radio::make('work.shown_at_main')
                ->placeholder('Не показывать')
                ->value(0)
                ->help('Выставить работу в основной карусель'),
        ];
    }
}
