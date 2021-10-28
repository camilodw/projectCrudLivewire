<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\Task;
class TaskComponent extends Component
{
    public $tasks,$name,$description,$task_id;
    public function render()
    {
       $this->tasks=Task::all();
       return view('livewire.task-component');
    }
    public function store()
    {
       $this->validate(['name'=>'required','description'=>'required|max:20']);
       Task::create(['name'=>$this->name,'description'=>$this->description]);
       $this->setInputs();
    }
    public function confirmDelete($id)
    {
        $task= Task::find($id);
        $this->task_id=$task->id;
    }
    public function destroy()
    {
       Task::destroy($this->task_id);
    }
    public function edit($id)
    {
       $task= Task::find($id);
       $this->task_id=$task->id;
       $this->name=$task->name;
       $this->description=$task->description;
    }
    public function update()
    {
        $this->validate(['name'=>'required','description'=>'required|max:20']);
        $task= Task::find($this->task_id);
        $task->name=$this->name;
        $task->description=$this->description;
        $task->save();
    }
    public function setInputs()
    {
       $this->name="";
       $this->description="";
    }

}
