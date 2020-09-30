<?php

namespace App\Orchid\Screens\WorkType;

use App\Orchid\Layouts\WorkType\WorkTypeEditLayout;
use App\WorkType;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Illuminate\Support\Facades\DB;

class WorkTypeEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Тип работы';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Тип работы';

    /**
     * @var WorkType
     */
    protected $workType;

    public $exists = false;

    /**
     * Query data.
     *
     * @param WorkType $workType
     * @return array
     */
    public function query(WorkType $workType): array
    {
        $this->exists = $workType->exists;

        if ($this->exists)
        {
            $this->name = 'Редактирование типа работы';
        }

        return [
            'workType' => $workType
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
            Button::make('Создать...')
                ->icon('icon-pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->exists),

            Button::make('Обновить')
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
            WorkTypeEditLayout::class
        ];
    }

    public function createOrUpdate(WorkType $workType, Request $request)
    {
        $message = "Данные успешно сохранены.";

        $type = $request->get('workType');

        if ($type['main_work'] == 1)
        {
            $enabled = $workType->countAllMainWorks();
            if ($enabled >= 3)
            {
                $type['main_work'] = 0;
                $message .= "Однако сделать данную работу отображаемой на главной странице невозможно, так как дизайн сайта подразумевает отображение только трёх типов работ. Редактировать состояния выполняемых работ можно только в общей странице.";
            }
        }

        $workType->fill($type)->save();

        Alert::info($message);
        return redirect()->route('platform.workTypes');
    }

    public function remove(WorkType $workType)
    {
        $workType->delete()
            ? Alert::info('Данная запись была удалена успешно')
            : Alert::warning('Произошла ошибка при удалении записи')
        ;

        return redirect()->route('platform.workTypes');
    }

}
