<?php

namespace App\Orchid\Screens;

use App\Models\Sponsor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Repository;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class SponsorsScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'sponsors' => Sponsor::select('name', 'description', 'link', 'image', 'order')->orderBy('order', 'desc')->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Sponsors';
    }

    public function description(): string
    {
        return 'Add, remove, and edit sponsors.';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            ModalToggle::make('Add Task')
                ->modal('taskModal')
                ->method('create')
                ->icon('plus'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('sponsors', [
                TD::make('order', 'Order')->render(fn (Sponsor $model, object $loop) => $model->order)->width('2rem'),
                TD::make('name', 'Name')->render(fn (Sponsor $model, object $loop) => $model->name)->width('10rem'),
                TD::make('description', 'Description')->render(fn (Sponsor $model, object $loop) => $model->description)->width('24rem'),
                TD::make('link', 'Link')->render(fn (Sponsor $model, object $loop) => '<a ' . 'href="' . $model->link . '">' . $model->link . '</a>')->width('10rem'),
                TD::make('image', 'Image')->render(fn (Sponsor $model, object $loop) => '<img style="width: 8rem;" h-auto" src="' .asset($model->image) . '" alt="' . $model->name . '">')->width('10rem'),
            ])->title('Sponsors'),

            Layout::modal('taskModal', Layout::rows([
                Input::make('task.name')
                    ->title('Name')
                    ->placeholder('Enter task name')
                    ->help('The name of the task to be created.'),
            ]))
                ->title('Create Task')
                ->applyButton('Add Task'),
        ];
    }
}
