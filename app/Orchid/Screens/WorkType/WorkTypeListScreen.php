<?php

namespace App\Orchid\Screens\WorkType;

use App\Orchid\Layouts\WorkType\WorkTypeListLayout;
use App\WorkType;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class WorkTypeListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'WorkTypeListScreen';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'WorkTypeListScreen';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'workTypes' => WorkType::paginate(10)
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
            Link::make('Создать...')
                ->icon('icon-pencil')
                ->route('platform.workType.edit')
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
            WorkTypeListLayout::class
        ];
    }
}
