<div class="modal fade" id="request_events" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
      <div class="modal-content">
        <form action="{{URL::to('/requestStatus',$events->id)}}" method="post" enctype="multipart/form-data">
          @csrf 
                   
          <div class="modal-header">
            <h4 class="modal-title">Request Management</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <div class="row">
                 
                <div class="col-12">
                    
                    <input type="hidden" name="isDeleted" class="form-control mb-3 text-center text-uppercase mname" value="1">
                   <h4>
                   Are you sure you want to request to delete this activities posting?
                   </h4>
                </div>
            </div>
           
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>