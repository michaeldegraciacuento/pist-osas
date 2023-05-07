<div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
      <div class="modal-content">
        <form action="{{ route('holidays.store') }}" method="post">
          @csrf              
          <div class="modal-header">
            <h4 class="modal-title">Create Guidance Availability</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            
            <div class="row">
                <div class="col-6">
                    <label for="">Reason:</label>
                    <input type="text" name="name" class="form-control mb-1 text-center text-uppercase" required>
                    
                </div>
                <div class="col-6">
                    <label for="">Date:</label>
                    <input type="date" name="date" class="form-control mb-1 text-center text-uppercase" required>
                    
                </div>
               
            </div>
            
            
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>