<div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>