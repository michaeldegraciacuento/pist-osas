<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">My Appoinments</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body">
        
        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th  width="8%">Content</th>
                            <th>Date</th>
                            <th width="10%">Status</th>
                           
                            
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($appointment_all as $std)
                            <tr>
                              <td>{{ $std->purpose }}</td>
                              <td>{{ $std->date }}</td>
                              @if($std->status == 'not-cleared')
                              <td>Pending</td>
                              @else
                              <td>Approve</td>
                              @endif
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>