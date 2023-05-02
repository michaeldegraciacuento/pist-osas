@extends('dashboard.base')

@section('content')
@include('news._create')
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex">
                      <h4><i class="fa fa-align-justify"></i>  {{ __('News Management') }}</h4>
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
                        @foreach($news as $nw)
                            <tr>
                              <td><img src="{{asset('public/'.$nw->image) }}" alt="image" width="70" height="50" align="left"></td>
                              <td>{{ strtoupper($nw->title) }}</td>
                              <td>{{ strtoupper($nw->subject) }}</td>
                              <td>{{ strtoupper($nw->date) }}</td>
                               <!-- <td>
                                <a href="" class="btn btn-block btn-primary"><i class="fa fa-eye"></i></a>
                              </td> -->
                              <td>
                                <button class="btn btn-block btn-primary btn-update"data-url="{{ route('news.edit',$nw->id) }}" ><i class="cil-pencil"></i></button>
                              </td>
                              <td>
                              <form action="{{ route('news.destroy',$nw->id) }}" method="post" >
                                @csrf
                                @method('DELETE')
                                    <button class="btn btn-block btn-danger"><i class="cil-trash"></i></button>
                              </form> 
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
        <div class="append-news"></div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
@section('script')

    <script type="text/javascript">
        $('.btn-update').click(function(){
            var div = $('.append-news');
            div.empty();
            var url = $(this).data('url');
            $.ajax({
                url: url,
                success:function(data){
                    div.append(data);
                    $('#update_news').modal('show');
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

