<?php

namespace App\Orchid\Screens\Basic;

use App\Basic;
use App\Orchid\Layouts\Basic\BasicListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class BasicListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Основная информация';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Ниже приведен список основной информации о сайте.
    Можно выбирать одну из нескольких путем отметки одной как основную';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'basics' => Basic::paginate(10)
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
            Link::make('Создать новую информацию')
            ->icon('icon-pencil')
            ->route('platform.basic.edit')
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
            BasicListLayout::class
        ];
    }
}
