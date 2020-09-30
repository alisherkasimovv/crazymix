<?php

namespace App\Orchid\Screens\About;

use App\Orchid\Layouts\About\AboutEditLayout;
use App\About;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class AboutEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Информация';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Редактирование информации';

    protected $about;

    public $exists = false;


    /**
     * Query data.
     *
     * @param About $about
     * @return array
     */
    public function query(About $about): array
    {
        $this->exists = $about->exists;

        if($this->exists){
            $this->name = 'Редактирование информации';
        }

        return [
            'about' => $about
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
            AboutEditLayout::class
        ];
    }

    public function createOrUpdate(About $about, Request $request)
    {
        $about->fill($request->get('about'))->save();

        Alert::info('Данные успешно сохранены');
        return redirect()->route('platform.abouts');
    }

    public function remove(About $about)
    {
        $about->delete()
            ? Alert::info('Данная запись была удалена успешно')
            : Alert::warning('Произошла ошибка при удалении записи')
        ;

        return redirect()->route('platform.abouts');
    }

}
