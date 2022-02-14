<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
        @csrf  
        <div class="modal-header">
          <h5 class="modal-title">Add News & Updates</h5>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <span class="input-group-text" >Title</span>
            <input type="text" class="form-control" name="title"required>
          </div> <label>Content:</label>
          <div class="input-group mb-3">
            <textarea class="form-control" name="content"></textarea> 
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" >Location</span>
            <input type="text" class="form-control" name="location"required>
          </div> <label>Content:</label>
          <div class="input-group mb-3">
            <span class="input-group-text">Date</span>
            <input type="date" class="form-control" name="date" required>
          </div>
          <div class="input-group mb-3">
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" name="image" required>
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

<script type="text/javascript">
  
</script>