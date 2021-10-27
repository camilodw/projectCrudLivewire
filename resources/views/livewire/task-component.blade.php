<div class="container-fluid">
<div class="row justify-content-center">
    @forelse ($tasks as $t)
        <div class="col-4">
            {{ $t->name }}
        </div>
        <div class="col-6">
            {{ $t->description }}
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
                <button wire:click='addTask' class="btn btn-success">Agregar</button>
            </div>
        </div>
      </div>
   </div></div>
