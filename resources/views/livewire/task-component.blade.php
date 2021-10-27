<div class="container-fluid">
<div class="row justify-content-center">
    @forelse ($tasks as $t)
        <div class="col-4">
            {{ $t->name }}
        </div>
        <div class="col-4">
            {{ $t->description }}
        </div>
        <div class="col-2">
            <button class="btn btn-warning text-white" wire:click="edit({{ $t->id }})">Editar</button>
        </div>
        <div class="col-2">
            <button class="btn btn-danger text-white" wire:click="destroy({{ $t->id }})">Eliminar</button>
        </div>
    @empty
        <p>Not found tasks</p>
    @endforelse
</div>
<div class="row justify-content-center">
    <div class="col-2">
      <div class="form">
            <div class="form-group">
                <input type="text" wire:model="name" class="form-control">
                <input type="text" wire:model="description">
                <button wire:click='store' class="btn btn-success">Agregar</button>
            </div>
        </div>
      </div>
   </div></div>
