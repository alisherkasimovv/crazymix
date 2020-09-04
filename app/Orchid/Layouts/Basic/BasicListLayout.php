<?php

namespace App\Orchid\Layouts\Basic;

use App\Basic;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\TD;

class BasicListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'basics';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::set('name', 'Название')
                ->render(function (Basic $basic) {
                    return Link::make($basic->name)
                        ->route('platform.basic.edit', $basic);
                }),

            TD::set('is_active', 'Активность'),
        ];
    }
}
