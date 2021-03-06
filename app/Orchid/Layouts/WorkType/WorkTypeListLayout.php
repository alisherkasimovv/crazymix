<?php

namespace App\Orchid\Layouts\WorkType;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class WorkTypeListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'workTypes';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::set('name', 'Название')
                ->render(function ($workType) {
                    return Link::make($workType->name)
                        ->route('platform.workType.edit', $workType);
                }),

            TD::set('description', 'Описание'),

            TD::set('main_work', 'Активность')
                ->render(function ($workType)
                {
                    return $workType->main_work == 1 ? 'Основная' : 'Не основная';
                })
                ->sort(),
        ];
    }
}
