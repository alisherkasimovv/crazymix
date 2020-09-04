<?php

namespace App\Orchid\Layouts\Social;

use App\Social;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class SocialListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'socials';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::set('name', 'Название')
                ->render(function (Social $social)
                {
                    return Link::make($social->name)
                        ->route('platform.social.edit', $social);
                }),

            TD::set('url', 'Ссылка')
        ];
    }
}
