<div class="modal fade" id="update_status-app" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-primary" role="document">
      <div class="modal-content">
        <form action="{{ route('appointments.update', $appointment->id) }}" method="post">
          @csrf 
          @method('PATCH')               
          <div class="modal-header">
            <h4 class="modal-title">Update Appointment Status</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-12">
                    <label for="">Status:</label>
                    <select class="form-control" name="status">
                      <option value="{{$appointment->status}}">{{$appointment->status}}</option>
                      <option value="Approved">Approved</option>
                      <option value="Pending">Pending</option>
                      <input type="hidden" name="user_id" value="{{$appointment->user_id}}">
                    </select>
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
  