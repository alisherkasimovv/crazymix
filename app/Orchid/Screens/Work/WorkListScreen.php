<?php

namespace App\Orchid\Screens\Work;

use App\Orchid\Layouts\Work\WorkListLayout;
use App\Work;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class WorkListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Выполненые работы';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'На этой странице вы можете управлять вашим портфолио.';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'works' => Work::paginate(10)
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
            Link::make('Добавить новую работу')
                ->icon('icon-pencil')
                ->route('platform.work.edit')
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
            WorkListLayout::class
        ];
    }
}
