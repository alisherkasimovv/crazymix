<?php

namespace App\Orchid\Layouts\About;

use App\About;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class AboutListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'abouts';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::set('name', 'Название')
                ->render(function (About $about)
                {
                    return Link::make($about->name)
                        ->route('platform.about.edit', $about);
                })
        ];
    }
}
