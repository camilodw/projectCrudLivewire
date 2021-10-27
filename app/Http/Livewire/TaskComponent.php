<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\Task;
class TaskComponent extends Component
{
public $tasks,$name,$description;
    public function render()
    {
        $this->tasks=Task::all();
        return view('livewire.task-component');
    }
    public function store(){
        $this->validate(['name'=>'required','description'=>'required']);
        Task::create(['name'=>$this->name,'description'=>$this->description]);
    }
    public function destroy($id){
     Task::destroy($id);
    }
    public function edit($id){
        
    }
}
