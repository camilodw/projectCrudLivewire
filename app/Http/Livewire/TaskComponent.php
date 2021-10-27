<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\Task;
class TaskComponent extends Component
{
public $tasks;
    public function render()
    {
        $this->tasks=Task::all();
        return view('livewire.task-component');
    }
}
