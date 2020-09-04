<?php

namespace App\Orchid\Screens\Social;

use App\Orchid\Layouts\Social\SocialListLayout;
use App\Social;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class SocialListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Социальные сети';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Добавление/удаление социальных сетей';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'socials' => Social::paginate(10)
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Добавить...')
                ->icon('icon-pencil')
                ->route('platform.social.edit')
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            SocialListLayout::class
        ];
    }
}
