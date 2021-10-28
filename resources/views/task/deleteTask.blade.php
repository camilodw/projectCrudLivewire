<div wire:ignore.self class="modal fade" id="deleteTaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete task</h5>
                @include('task.layouts.btnClose')
            </div>
            <div class="modal-body">
                <p class="text-danter">Are you sure to delete this task?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" wire:click="destroy()">Delete</button>
            </div>
        </div>
    </div>
</div>