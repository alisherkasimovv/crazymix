<?php

namespace App\Orchid\Screens\Social;

use App\Orchid\Layouts\Social\SocialEditLayout;
use App\Social;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class SocialEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Социальная сеть';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Редактирование социальной сети';

    protected $social;

    public $exists = false;


    /**
     * Query data.
     *
     * @param Social $social
     * @return array
     */
    public function query(Social $social): array
    {
        $this->exists = $social->exists;

        if($this->exists){
            $this->name = 'Редактирование социальной сети';
        }

        return [
            'social' => $social
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
            SocialEditLayout::class
        ];
    }

    public function createOrUpdate(Social $social, Request $request)
    {
        $social->fill($request->get('social'))->save();

        Alert::info('Данные успешно сохранены');
        return redirect()->route('platform.socials');
    }

    public function remove(Social $social)
    {
        $social->delete()
            ? Alert::info('Данная запись была удалена успешно')
            : Alert::warning('Произошла ошибка при удалении записи')
        ;

        return redirect()->route('platform.socials');
    }

}
