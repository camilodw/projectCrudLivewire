<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-12 text-left">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addTaskModal">
            Add Task
        </button>
    </div>
    @forelse ($tasks as $t)
        <div class="col-lg-4 col-12">
            {{ $t->name }}
        </div>
        <div class="col-lg-4 col-12">
            {{ $t->description }}
        </div>
        <div class="col-lg-1 col-3">
            <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#editTaskModal" wire:click="edit({{ $t->id }})">
               Edit
              </button>
        </div>
        
        <div class="col-lg-1 col-3">
            <button class="btn btn-danger text-white" wire:click="confirmDelete({{ $t->id }})"data-toggle="modal" data-target="#deleteTaskModal">Delete</button>
        </div>
    @empty
        <p>Not found tasks</p>
    @endforelse
</div>
@include('task.editTask')
@include('task.addTask')
@include('task.deleteTask')
