<?php

namespace App\Orchid\Screens\About;

use App\Orchid\Layouts\About\AboutListLayout;
use App\About;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class AboutListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'О нас';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Инофрмация отображаемая на странице О нас';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'abouts' => About::paginate(10)
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
                ->route('platform.about.edit')
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
            AboutListLayout::class
        ];
    }
}
