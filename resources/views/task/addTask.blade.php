<div wire:ignore.self class="modal fade" id="addTaskModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add task</h5>
               @include('task.layouts.btnClose')
            </div>
            <div class="modal-body">
                <div class="form">
                    <div class="form-group">
                        @error('name')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                        <label for="name">Name:</label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('description')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                        <label for="description">Description:</label>
                        <input type="text" wire:model="description" class="form-control">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button wire:click='store' class="btn btn-success" data-dismiss="modal" aria-label="Close">Add</button>
            </div>
        </div>
    </div>
</div>
