@extends('dashboard.base')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
@section('content')
@include('student._viewAppointment')
@if(auth()->user()->user_type == 1 || auth()->user()->user_type == 2)
<div class="container-fluid row">
    <div class="col-6 col-lg-3">
        <div class="card">
        <div class="card-body p-3 d-flex align-items-center">
            <div class="bg-primary p-3 mr-3">
            <!-- <svg class="c-icon c-icon-xl">
                <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
                
            </svg> -->
            <i class="c-icon c-icon-xl cil-user"></i>
            </div>
            <div>
            <div class="text-value text-primary">{{$student}}</div>
            <div class="text-muted text-uppercase font-weight-bold small">Student</div>
            </div>
        </div>
        <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{ route('students.index') }}"><span class="small font-weight-bold">View More</span>
            <svg class="c-icon">
                <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chevron-right"></use>
            </svg></a></div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card">
        <div class="card-body p-3 d-flex align-items-center">
            <div class="bg-primary p-3 mr-3">
            <!-- <svg class="c-icon c-icon-xl">
                <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
            </svg> -->
            <i class="c-icon c-icon-xl cil-calendar"></i>
            </div>
            <div>
            <div class="text-value text-primary">{{$appointment}}</div>
            <div class="text-muted text-uppercase font-weight-bold small">Appointments</div>
            </div>
        </div>
        <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{ route('appointments.index') }}"><span class="small font-weight-bold">View More</span>
            <svg class="c-icon">
                <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chevron-right"></use>
            </svg></a></div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card">
        <div class="card-body p-3 d-flex align-items-center">
            <div class="bg-primary p-3 mr-3">
            <!-- <svg class="c-icon c-icon-xl">
                <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
            </svg> -->
            <i class="c-icon c-icon-xl cil-notes"></i>
            </div>
           
            <div>
            <div class="text-value text-primary">{{$event}}</div>
            <div class="text-muted text-uppercase font-weight-bold small">Activities</div>
            </div>
        </div>
        <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{ route('events.index') }}"><span class="small font-weight-bold">View More</span>
            <svg class="c-icon">
                <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chevron-right"></use>
            </svg></a></div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card">
        <div class="card-body p-3 d-flex align-items-center">
            <div class="bg-primary p-3 mr-3">
            <!-- <svg class="c-icon c-icon-xl">
                <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
            </svg> -->
            <i class="c-icon c-icon-xl cil-user-follow"></i>
            </div>
            <div>
            <div class="text-value text-primary">{{$user}}</div>
            <div class="text-muted text-uppercase font-weight-bold small">User</div>
            </div>
        </div>
        <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{ route('users.index') }}"><span class="small font-weight-bold">View More</span>
            <svg class="c-icon">
                <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chevron-right"></use>
            </svg></a></div>
        </div>
    </div>
</div>
<div class="container">
    <img src="{{asset('img/org-chart.jpg')}}" alt="" style="height:550px;width:900px;display:block;margin:auto;">
</div>
@endif
@if(auth()->user()->user_type == 3)
<div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-xl-8">
                <div class="card">
                    <div class="card-header d-flex">
                      <h4><i class="fa fa-align-justify"></i>  {{ __('Appointment Management') }}</h4>
                    </div>
                    <div class="card-header">
                    <form action="">
                      <label for="">Search Function:</label>
                        <div class="row">
                            <div class="col-4">
                                <input type="text" name="lname" class="form-control" placeholder="Type Last Name to search..." value="">
                            </div>
                            <div class="col-4">
                                <input type="text" name="uli" class="form-control" placeholder="Type ID Number to search..." value="">
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-sm btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                    </div>  
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th width="15%">ID Number</th>
                            <th width="20%">Appoinment Date</th>
                            <th  width="10%">Status</th>
                            <th width="5%"></th>
                            <th width="5%"></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($list_appointment as $std)
                            <tr>
                              <td>{{ strtoupper($std->lname) }}, {{strtoupper($std->fname) }} {{ucfirst($std->mname) }}.</td>
                              <td>{{ $std->uli }}</td>
                              <td>{{ $std->date }}</td>
                              @if($std->status == 'Pending')
                              <td><span class="badge badge-warning">Pending</span></td>
                              @else
                              <td><span class="badge badge-success">Approve</span></td>
                              @endif
                              <td>
                                <button class="btn btn-block btn-secondary btn-view-status" data-url="{{ route('appointments.show',$std->appointments_id) }}"><i class="cil-magnifying-glass"></i></button>
                              </td>
                              <td>
                                <button class="btn btn-block btn-primary btn-success btn-update-status" data-url="{{ route('appointments.edit',$std->appointments_id) }}" ><i class="cil-pencil"></i></button>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
@endif
@if(auth()->user()->user_type == 4)
<div class="container-fluid row">
    <div class="col-sm-12 col-xl-12 col-lg-12">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex">
                      <h4><i class="fa fa-align-justify"></i>  {{ __('Appointment Management') }}</h4>
                      
                    </div>
                    <div class="card-header">
                        <div class="row">
                        <div class="col-6">
                            <h>PLEASE SELECT DATE APPOINTMENT !!!</h4>
                        </div>
                        <div class="col-6 text-right">
                            <button class="btn btn-sm btn-primary " data-toggle="modal" data-target="#exampleModal">View Appoinment Status</button>
                        </div>
                        </div>
                    </div>  
                    <div class="card-body">
                    <div class="row">
            <div class="col-sm-4">
                <div id="datepicker"></div>
                
            </div>
            <div class="col-sm-5">
                <div id="first-step-available" style="display:none;">
                    <form action="{{ route('appointments.store') }}" method="post">
                    @csrf
                         <h3> <h3 id="date-String"></h3> Available Slots: <span id="available_slots"></span></h3>
                       <br> 
                       <div id="app-div">
                       <label>Select Time:</label>
                        <select name="time" class="form-control" required id="select-time">
                            <option disabled selected value="">-- Select Time --</option>
                            <option value="am" id="am" disabled>AM - 8:00am to 12:00pm</option>
                            <option value="pm" id="pm" disabled>PM - 1:00pm to 5:00pm</option>
                        </select>
                        <label class="mt-2">What is the nature of your Appointment?</label>
                        <textarea class="mt-2 text-uppercase text-center" style="line-height: 5;display: inline-block;vertical-align: middle;" name="purpose" id="" cols="70" rows="2" required></textarea>
                        
                        <div class="d-flex mt-2">
                            <input type="hidden" class="form-control text-center" name="date" id="date-value">
                        </div>
                        <button class="btn btn-primary mt-2" type="submit" style="">Schedule Now</button>
                       </div>
                       <style>
                        .dsp-block{
                            display:block;
                        }
                        .dsp-none{
                            display:none;
                        }
                       </style>
                       <div class="app-div-show dsp-none mt-2">
                       <div class="alert alert-danger text-center">
                        <strong>
                            NO AVAILABLE APPOINTMENT FOR THIS DATE!
                            <br>
                            Please choose a different date
                        </strong>
                    </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>

                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-lg-12 container">
                    <div class="card">
                    <div class="card-header"> <strong>Latest News/Activites/Holidays/Annoucements</strong>
                      <div class="card-header-actions"><a class="card-header-action" ><small class="text-muted">Blog</small></a></div>
                    </div>
                    <div class="card-body">
                      <p>
                        <a class="btn btn-primary collapsed" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">News</a>
                        <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">Activities</button>
                        <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">Holidays</button>
                        <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">Announcement</button>
                      </p>
                      <div class="collapse" id="collapseExample1" style="">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-6">
                                    <b>N E W S</b><br>
                                    <b>Title:</b> {{$latestPostNews->title ?? ''}}<br>
                                    <b> Subject:</b> {{$latestPostNews->subject ?? ''}}   <br>
                                    <b>Date:</b> {{$latestPostNews->date ?? ''}}<br>
                                    <b>Content:</b> {{$latestPostNews->content ?? ''}}   <br>
                                </div>
                                <div class="col-6">
                                    @if(empty($latestPostNews->image))
                                    @else
                                    <img src="{{asset('public/'.$latestPostNews->image) }}" alt="" style="width:600px;height:350px;">
                                    @endif
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="collapse" id="collapseExample2" style="">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-6">
                                    <b>A C T I V I T I E S</b><br>
                                    <b>Title:</b> {{$latestPostEvents->title ?? ''}}<br>
                                    <b> Subject:</b> {{$latestPostEvents->subject ?? ''}}   <br>
                                    <b>Date:</b> {{$latestPostEvents->date ?? ''}}<br>
                                    <b>Content:</b> {{$latestPostEvents->content ?? ''}}   <br>
                                </div>
                                <div class="col-6">
                                    @if(empty($latestPostEvents->image))
                                    @else
                                    <img src="{{asset('public/'.$latestPostEvents->image) }}" alt="" style="width:600px;height:350px;">
                                    @endif
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="collapse" id="collapseExample3" style="">
                        <div class="card card-body">
                            <b>H O L I D A Y S</b> <BR>
                            <b>Title:</b> {{$latestPostHolidays->name ?? ''}}<br>
                            <b>Date:</b> {{$latestPostHolidays->date ?? ''}}<br>
                        </div>
                      </div>
                      <div class="collapse" id="collapseExample4" style="">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-6">
                                    <b>A N N O U N C E M E N T</b><br>
                                    <b>Title:</b> {{$latestPostAnnouncements->title ?? ''}}<br>
                                    <b> Subject:</b> {{$latestPostAnnouncements->subject ?? ''}}   <br>
                                    <b>Date:</b> {{$latestPostAnnouncements->date ?? ''}}<br>
                                    <b>Content:</b> {{$latestPostAnnouncements->content ?? ''}}   <br>
                                </div>
                                <div class="col-6">
                                    @if(empty($latestPostAnnouncements->image))
                                    @else
                                    <img src="{{asset('public/'.$latestPostAnnouncements->image) }}" alt="" style="width:600px;height:350px;">
                                    @endif
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    </div>
        </div>
       
        </div>  
        @endif  
        <div class="append-status"></div>         
@endsection

@section('script')

        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
        <script>
            
            $('#open_modal').click(function(e) {
                alert('Please visit your zone president to clear your zone liabilities!')
            })
            $( function() {
                $( "#datepicker").datepicker({
                    minDate: 0,
                    maxDate: 31,
                    beforeShowDay: disableHoliday
                });
            });
            var holidays = [];
            function holidayConverter() {
                let holiday_dates = {!! json_encode($holidays, JSON_HEX_TAG) !!}; 
                var myObject = { 'a': 1, 'b': 2, 'c': 3 };

                Object.keys(holiday_dates).map(function(key, index) {
                    holidays.push(holiday_dates[key].date);
                });
            }
            holidayConverter();
            function disableHoliday(date) {
                var string = $.datepicker.formatDate('yy-mm-dd', date);
                    
                var filterDate = new Date(string);
                var day = filterDate.getDay();
                var isHoliday = ($.inArray(string, holidays) != -1);
                
                return [day != 0 && day !=6 && !isHoliday]
            }
            $('#datepicker').change(function(e) {
                var val = $(this).val()
                $('#date-value').val(val)
                $('#select-time').val('')
                $('#time-value').val('')
                $('#select-document-type').val('')
                $('#document-type-value').val('')
                $('.app-div-show').addClass('dsp-none');
                $('#overlay').show();
                $('#first-step-available').hide();
                $('#first-step-not-available').hide();
                $('#final-step-available').hide()
                $('#warning-message-container').hide()
                $('#am').attr('disabled', true); 
                $('#pm').attr('disabled', true); 

                var dateConvert = $('#date-value').val();
                const dateString = dateConvert;
                const dateParts = dateString.split('/');

                const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

                const monthIndex = parseInt(dateParts[0]) - 1;
                const day = parseInt(dateParts[1]);
                const year = parseInt(dateParts[2]);

                const formattedDate = `${monthNames[monthIndex]} ${day}, ${year}`;
                
                $('#date-String').html(formattedDate);

                




                $.ajax({
                    // "_token": "{{ csrf_token() }}",
                    type: 'get',
                    url: '/datepicker',
                    data: {'data': val},
                    success: function (result) {
                        console.log(result);
                        $('#overlay').hide();
                        

                            
                                if(result.available_slots == 0){
                                    $('#app-div').hide();
                                    $('.app-div-show').removeClass('dsp-none');
                                    $('.app-div-show').addClass('dsp-block');
                                }
                                else{
                                    $('#app-div').show();
                                    $('.app-div-show').addClass('dsp-none');
                                }
                           

                            
                        
                        if (result.first_step) {
                            $('#first-step-available').show();
                            $('#available_slots').html(result.available_slots);
                        } else {
                            $('#first-step-not-available').show();
                        }

                        if (result.am) {
                            $('#am').attr('disabled', false); 
                        }

                        if (result.pm) {
                            $('#pm').attr('disabled', false); 
                        }
                    }
                })
            })

            $('#next-step-form').submit(function(e) {
                e.preventDefault()
                $('#overlay').show()
                $('#final-step-available').hide()
                $('#final-step-not-available').hide()
                $('#warning-message-container').hide()
                $('#error-message').html('')
                $('#zone-name').val('')
                $('#age').val('')
                $('#resident-id-value').val('')
                $('#appointment-id-value').val('')
                
                var last_name = $('#last_name').val()
                var first_name = $('#first_name').val()
                var middle_name = $('#middle_name').val()
                var document_type = $('#select-document-type').val()
                var date = $('#date-value').val()
                
                $.ajax({
                    // "_token": "{{ csrf_token() }}",
                    type: 'get',
                    url: '/resident-check',
                    data: {'last_name': last_name, 'first_name': first_name, 'middle_name': middle_name, 'date': date, 'document_type': document_type},
                    success: function (result) {
                        $('#overlay').hide();
                        if (result.error_message !== null) {
                            $('#final-step-not-available').show()
                            $('#error-message').html(result.error_message)
                        } else {
                            $('#final-step-available').show();
                            $('#zone-name').val(result.resident.zone.name)
                            $('#age').val(result.resident.age)
                            $('#resident-id-value').val(result.resident.id)
                            $('#appointment-id-value').val(result.appointment.id)
                        }

                        if (result.warning_message !== null) {
                            $('#warning-message-container').show()
                            $('#warning-message').html(result.warning_message)
                        }
                    }
                })
            })

            $('#select-time').change(function(e) {
                $('#time-value').val($(this).val())
            })
            $('#select-document-type').change(function(e) {
                $('#document-type-value').val($(this).val())
            })

            $('#appointment-form').submit(function(e) {
                e.preventDefault();
                if (confirm('Are you sure you want to set this appointment?') == true) {
                    this.submit()
                }
            });
            $('.btn-update-status').click(function(){
                var div = $('.append-status');
                div.empty();
                var url = $(this).data('url');
            
                $.ajax({
                    url: url,
                    success:function(data){
                        div.append(data);
                        $('#update_status-app').modal('show');
                    }
                });
            });
            $('.btn-view-status').click(function(){
                var div = $('.append-status');
                div.empty();
                var url = $(this).data('url');
            
                $.ajax({
                    url: url,
                    success:function(data){
                        div.append(data);
                        $('#view_status-app').modal('show');
                    }
                });
            });
           
            

        </script>

@endsection

