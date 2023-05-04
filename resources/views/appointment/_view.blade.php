<div class="modal fade" id="view_status-app" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
      <div class="modal-content">
                     
          <div class="modal-header">
            <h4 class="modal-title">View Appointment Application</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
                @php
                    $studentData = DB::table('users')->where('id',$appointment->user_id)->first();
                @endphp
            <div class="row">
                <div class="col-3">
                    <img src="{{asset('public/'.$studentData->image) }}" alt="" style="width: 150px;height:150px;border:1px solid black;margin: 0;">
                </div>
               <div class="col-5">
               <h6>Name: <strong>{{strtoupper($studentData->lname)}}, {{strtoupper($studentData->fname)}} {{strtoupper($studentData->mname)}}</strong> </h6>
                <h6>ID Number: <strong>{{strtoupper($studentData->uli)}}</strong> </h6>
                <h6>Year: <strong>{{strtoupper($studentData->year)}}</strong></h6>
                <h6>Course: <strong>{{strtoupper($studentData->course)}}</strong></h6>
                <h6>Bithdate: <strong>{{$studentData->birthday}}</strong></h6>
                <h6>Age: <strong>{{$studentData->age}}</strong></h6>
               </div>
               <div class="col-4">
               <h6>Contact #: <strong>{{$studentData->contact_number}}</strong> </h6>
                <h6>Email: <strong>{{strtoupper($studentData->email)}}</strong> </h6>
                <h6>Address: <strong>{{strtoupper($studentData->purok)}}, {{strtoupper($studentData->barangay)}} {{strtoupper($studentData->city)}} {{strtoupper($studentData->province)}}</strong> </h6>
               </div>
            </div>
            <hr>
            <div class="row">
            <div class="container">
            <div class="nav-tabs-boxed">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Nature of Appointment</a></li>
                      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Date of Appointment</a></li>
                      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Status of Appointment</a></li>
                      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#parent" role="tab" aria-controls="parent" aria-selected="false">Parent/Guardian/Spouse</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="home" role="tabpanel"><h6>{{strtoupper($appointment->purpose)}}</h6></div>
                      <div class="tab-pane" id="profile" role="tabpanel">{{strtoupper($appointment->date)}}</div>
                      <div class="tab-pane" id="messages" role="tabpanel">{{strtoupper($appointment->status)}}</div>
                      <div class="tab-pane" id="parent" role="parent"><p>Name: <strong>{{strtoupper($studentData->parent_name)}}</strong></p><p>Contact: <strong>{{strtoupper($studentData->parent_contact)}}</strong></p></div>
                    </div>
                  </div>
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
