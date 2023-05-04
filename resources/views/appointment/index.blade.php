@extends('dashboard.base')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

@section('content')
<div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12">
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
                              <!-- <td>
                                <button class="btn btn-block btn-primary btn-success btn-update-status" data-url="{{ route('appointments.edit',$std->appointments_id) }}" ><i class="cil-pencil"></i></button>
                              </td> -->
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
        <div class="append-status"></div>   
@endsection

@section('script')
<script type="text/javascript">
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

