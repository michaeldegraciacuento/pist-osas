@extends('dashboard.base')

@section('content')
@include('announcements._create')
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex">
                      <h4><i class="fa fa-align-justify"></i>  {{ __('Annoucement Management') }}</h4>
                      <button class="btn btn-primary ml-auto" type="button" data-toggle="modal" data-target="#primaryModal">
                        <i class="cil-plus"></i>
                        Create
                      </button> 
                    </div>
                    <div class="card-header">
                    <label for="">Search Function:</label>
                    <form action="">
                        <div class="row">
                            <div class="col-4">
                                <input type="text" name="title" class="form-control" placeholder="Type Title to search..." value="">
                            </div>
                            <div class="col-2">
                                <input type="text" name="subject" class="form-control" placeholder="Type Subject to search..." value="">
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-sm btn-primary search">Search</button>
                            </div>
                            
                        </div>
                      </form>
                    </div>  
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th  width="8%">Image</th>
                            <th>Title</th>
                            <th>Subject</th>
                            <th width="15%">Date</th>
                            <th width="5%"></th>
                            <th width="5%"></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($announcements as $nw)
                            <tr>
                              <td><img src="{{asset('public/'.$nw->image) }}" alt="image" width="70" height="50" align="left"></td>
                              <td>{{ strtoupper($nw->title) }}</td>
                              <td>{{ strtoupper($nw->subject) }}</td>
                              <td>{{ strtoupper($nw->date) }}</td>
                              @if($nw->isDeleted == '1')
                               <td>
                               <span class="badge badge-warning">Pending Request Deletion</span>
                              </td>
                              
                              @if(auth()->user()->user_type == 1)
                              <td>
                              <form action="{{ route('announcements.destroy',$nw->id) }}" method="post" >
                                @csrf
                                @method('DELETE')
                                    <button class="btn btn-block btn-danger"><i class="cil-trash"></i></button>
                              </form> 
                              </td>
                              @endif
                              @endif
                              
                              @if($nw->isDeleted == '0')
                              <td>
                                <button class="btn btn-block btn-primary btn-update"data-url="{{ route('announcements.edit',$nw->id) }}" ><i class="cil-pencil"></i></button>
                              </td>
                              @if(auth()->user()->user_type == 2)
                                <td>
                                  <button class="btn btn-block btn-danger btn-request" data-url="{{ URL::to('/requestAnn',$nw->id) }}"><i class="cil-trash"></i></button>
                                </td>
                              @else
                              <td>
                              <form action="{{ route('announcements.destroy',$nw->id) }}" method="post" >
                                @csrf
                                @method('DELETE')
                                    <button class="btn btn-block btn-danger"><i class="cil-trash"></i></button>
                              </form> 
                              </td>
                              @endif
                              @endif
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
        <div class="append-announcements"></div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
@section('script')

    <script type="text/javascript">
        $('.btn-update').click(function(){
            var div = $('.append-announcements');
            div.empty();
            var url = $(this).data('url');
            $.ajax({
                url: url,
                success:function(data){
                    div.append(data);
                    $('#update_announcements').modal('show');
                }
            });
        });
        $('.btn-request').click(function(){
            var div = $('.append-announcements');
            div.empty();
            var url = $(this).data('url');
            $.ajax({
                url: url,
                success:function(data){
                    div.append(data);
                    $('#request_announcements').modal('show');
                }
            });
        });
    $('document').ready(function () {
        $("#image").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imageShow').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
        
        $(".filter").click(function () {
          $(".filter-div").show();
        }); 
	  });

    </script>
@endsection

