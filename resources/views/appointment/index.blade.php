@extends('dashboard.base')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

@section('content')
@include('holidays._create')
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex">
                      <h4><i class="fa fa-align-justify"></i>  {{ __('Appointment Management') }}</h4>
                      
                    </div>
                    <div class="card-header">
                        <div class="row">
                        <div class="col-4">
                            <h>PLEASE SELECT DATE APPOINTMENT !!!</h4>
                        </div>
                        <div class="col-8 text-right">
                            <button class="btn btn-sm btn-primary">View Appoinment Status</button>
                        </div>
                        </div>
                    </div>  
                    <div class="card-body">
                    <div class="row">
            <div class="col-sm-3">
                <div id="datepicker"></div>
                
            </div>
            <div class="col-sm-5">
                <div id="first-step-available" style="display:none;">
                    <form action="{{ route('appointments.store') }}" method="post">
                    @csrf
                         <h3> <h3 id="date-String"></h3> Available Slots: <span id="available_slots"></span></h3>
                       <br> <label>Select Time:</label>
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
                        <button class="btn btn-primary mt-2" type="submit" style="float: right;">Schedule Now</button>
                    </form>
                </div>  
                <div id="first-step-not-available" style="display:none;">
                    <div class="alert alert-danger text-center">
                        <strong>
                            NO AVAILABLE TIME FOR THIS DATE!
                            <br>
                            Please choose a different date
                        </strong>
                    </div>
                </div>
            </div>
        </div><div id="warning-message-container" class="mt-3" style="display:none;">
            <div class="alert alert-info text-center">
                <strong id="warning-message"></strong>
            </div>
        </div>
        <div id="final-step-available" style="display:none">
            <hr>
            <h4 class="mt-3">Fill all information:</h4>
            <div class="row">
                <div class="col">
                    <label>Zone:</label>
                    <input type="text" class="form-control" value="" readonly id="zone-name">
                </div>
                <div class="col">
                    <label>Age:</label>
                    <input type="text" class="form-control" value="" readonly id="age">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label>Phone Number:</label>
                    <input type="text" class="form-control" value="" id="phone_number" form="appointment-form" name="phone_number">
                </div>
                <div class="col">
                    <label>Email:</label>
                    <input type="email" class="form-control" value="" id="email-address" form="appointment-form" name="email_address">
                </div>
            </div>
            <label class="mt-3">Purpose:</label>
            <input type="text" class="form-control" value="" form="appointment-form" required name="purpose">
            <button class="btn btn-primary btn-block mt-3" type="submit" form="appointment-form">Submit</button>
        </div>
        <div id="final-step-not-available" class="mt-3" style="display:none;">
            <div class="alert alert-danger text-center">
                <strong id="error-message"></strong>
            </div>
        </div>
    </div>
    
    {{-- hidden form --}}
        <form action="{{ route('set-appointment') }}" method="POST" id="appointment-form">
            @csrf
            <input type="hidden" id="date-value" name="date">
            <input type="hidden" id="resident-id-value" name="resident_id">
            <input type="hidden" id="time-value" name="time">
            <input type="hidden" id="document-type-value" name="document_type">
            <input type="hidden" id="appointment-id-value" name="appointment_id">
        </form>
    {{-- hidden form end --}}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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


            

        </script>
@endsection

