<?php

namespace App\Orchid\Screens\Basic;

use App\Basic;
use App\Orchid\Layouts\Basic\BasicEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class BasicEditScreen extends Screen
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
    public $description = 'На этой странице можно редактировать основную информацию, отображаемую для пользователей.';

    /**
     * @var Basic
     */
    protected $basic;

    public $exists = false;

    /**
     * Query data.
     *
     * @param Basic $basic
     * @return array
     */
    public function query(Basic $basic): array
    {
        $this->exists = $basic->exists;

        if($this->exists){
            $this->name = 'Редактирование информации';
        }

        return [
            'basic' => $basic
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
            BasicEditLayout::class
        ];
    }

    public function createOrUpdate(Basic $basic, Request $request)
    {
        $message = "Данные успешно сохранены.";
        if ($request->get('basic')['is_active'] == 1)
        {
            $this->changeStatusForAll();
            $message .= " Эта информация теперь является основной для всего сайта.
            Обратите внимание, что этим действием Вы деактивировали все предыдущие активные записи!";
        }
        $basic->fill($request->get('basic'))->save();

        Alert::info($message);
        return redirect()->route('platform.basics');
    }

    public function remove(Basic $basic)
    {
        $basic->delete()
            ? Alert::info('Данная запись была удалена успешно')
            : Alert::warning('Произошла ошибка при удалении записи')
        ;

        return redirect()->route('platform.basics');
    }

    private function changeStatusForAll()
    {
        Basic::where('is_active', true)->update(['is_active' => false]);
    }
}
