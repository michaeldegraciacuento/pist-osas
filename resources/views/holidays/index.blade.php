@extends('dashboard.base')

@section('content')
@include('holidays._create')
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex">
                      <h4><i class="fa fa-align-justify"></i>  {{ __('Holiday Management') }}</h4>
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
                                <input type="name"  name="name"class="form-control" placeholder="Type Name of holiday to search...">
                            </div>
                            <div class="col-4">
                                <input type="date" name="date" class="form-control" placeholder="Type Course to search...">
                            </div>
                            <div class="col-2">
                                <button class="btn btn-sm btn-primary">Search</button>
                            </div>
                            <div class="col-2">
                                <button class="btn btn-sm btn-primary float-right">Filter</button>
                            </div>
                        </div>
                        </form>
                    </div>  
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th width="5%"></th>
                            <th width="5%"></th>
                           
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($holiday as $nw)
                            <tr>
                        
                              <td>{{ strtoupper($nw->name) }}</td>
                              <td>{{ strtoupper($nw->date) }}</td>
                             
                               <!-- <td>
                                <a href="" class="btn btn-block btn-primary"><i class="fa fa-eye"></i></a>
                              </td> -->
                              <td>
                                <button class="btn btn-block btn-primary btn-update"data-url="{{ route('events.edit',$nw->id) }}" ><i class="cil-pencil"></i></button>
                              </td>
                              <td>
                              <form action="{{ route('events.destroy',$nw->id) }}" method="post" >
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
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script type="text/javascript">
        
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
        
        $('.bday').on("change", function(){
            var dob = new Date($(".bday").val());
				var today = new Date();
				var age = today.getFullYear() - dob.getFullYear(); 
				if(today.getMonth() < dob.getMonth() || (today.getMonth() == dob.getMonth() && today.getDate() < dob.getDate())){
					age--; 
				}
                $('.age').val(age);
        });
        $('.age').val(age);
       
        $("#fname").focus(function () {
         var fname = $('.fname').val();
         console.log(fname);
        });
	  });

    </script>
@endsection

