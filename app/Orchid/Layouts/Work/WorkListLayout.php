<?php

namespace App\Orchid\Layouts\Work;

use App\Work;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class WorkListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'works';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::set('name', 'Название')
                ->render(function (Work $work) {
                    return Link::make($work->name)
                        ->route('platform.work.edit', $work);
                }),

            TD::set('brief', 'Краткая информация'),
            TD::set('attachment', 'Изображения')
        ];
    }
}
