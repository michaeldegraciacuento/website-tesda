<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('qualification.store') }}" method="post" >
        @csrf  
        <div class="modal-header">
          <h5 class="modal-title">Add Qualification</h5>
        </div>
        <div class="modal-body">
         
          <div class="input-group mb-3">
            <span class="input-group-text">Title</span>
            <input type="text" class="form-control" name="title" required>
          </div>
          <div class="input-group mb-3">
           <span class="input-group-text">CPTR Number</span>
            <input type="text" class="form-control" name="cptr" required>
          </div>
           <div class="input-group mb-3">
            <span class="input-group-text">Date Accredited</span>
            <input type="date" class="form-control" name="date" required>
          </div>
          <div class="input-group mb-3">
           <span class="input-group-text">Hours</span>
            <input type="text" class="form-control" name="hrs" required>
          </div>
           <div class="input-group mb-3">
           <span class="input-group-text">Type</span>
            <input type="text" class="form-control" name="type" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>  
    </div>
  </div>
</div>

