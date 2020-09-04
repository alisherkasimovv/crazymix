<?php

namespace App\Orchid\Screens\Work;

use App\Orchid\Layouts\Work\WorkEditLayout;
use App\Work;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class WorkEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Работа';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Редактирование работы';

    /**
     * @var Work
     */
    protected $work;

    public $exists = false;

    /**
     * Query data.
     *
     * @param Work $work
     * @return array
     */
    public function query(Work $work): array
    {
        $this->exists = $work->exists;

        if($this->exists){
            $this->name = 'Редактирование информации';
        }

        $work->load('attachment');

        return [
            'work' => $work
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
            Button::make('Создать запись')
                ->icon('icon-pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->exists),

            Button::make('Обновить информацию')
                ->icon('icon-note')
                ->method('createOrUpdate')
                ->canSee($this->exists),

            Button::make('Удалить')
                ->icon('icon-trash')
                ->method('remove')
                ->canSee($this->exists),
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
            WorkEditLayout::class
        ];
    }

    public function createOrUpdate(Work $work, Request $request)
    {
        $work->fill($request->get('work'))->save();

        $work->attachment()->syncWithoutDetaching(
            $request->input('work.attachment', [])
        );

        Alert::info("Данные успешно сохранены");
        return redirect()->route('platform.works');
    }

    public function remove(Work $work)
    {
        $work->delete()
            ? Alert::info('Данная запись была удалена успешно')
            : Alert::warning('Произошла ошибка при удалении записи')
        ;

        return redirect()->route('platform.works');
    }


}
