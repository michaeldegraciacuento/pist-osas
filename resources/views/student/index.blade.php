@extends('dashboard.base')

@section('content')
@include('student._create')
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex">
                      <h4><i class="fa fa-align-justify"></i>  {{ __('Student Management') }}</h4>
                      <button class="btn btn-primary ml-auto" type="button" data-toggle="modal" data-target="#primaryModal">
                        <i class="cil-plus"></i>
                        Create
                      </button> 
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
                            <th  width="8%">Image</th>
                            <th>Fullname</th>
                            <th>ID Number</th>
                            <th>E-mail</th>
                            <th>Contact #</th>
                            <th width="5%"></th>
                            <th width="5%"></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($student as $std)
                            <tr>
                              <td><img src="{{asset('public/'.$std->image) }}" alt="image" width="70" height="50" align="left"></td>
                              <td>{{ strtoupper($std->lname) }}, {{ strtoupper($std->fname) }} {{ strtoupper($std->mname) }}</td>
                              <td>{{ $std->uli }}</td>
                              <td>{{ $std->email }}</td>
                              <td>{{ $std->contact_number }}</td>
                               <!-- <td>
                                <a href="" class="btn btn-block btn-primary"><i class="fa fa-eye"></i></a>
                              </td> -->
                              <td>
                                <button class="btn btn-block btn-primary btn-update" data-url="{{ URL::to('/updateStudent',$std->id) }}" ><i class="cil-pencil"></i></button>
                              </td>
                              <td>
                              <!-- <form action="{{ URL::to('/destroyStudent',$std->id) }}" method="post" >
                                @csrf
                                @method('DELETE')
                                    <button class="btn btn-block btn-danger"><i class="cil-trash"></i></button>
                              </form>  -->
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
        <div class="append-student"></div>
        
@endsection


@section('script')
    <script type="text/javascript">
        
    $('document').ready(function () {
      $('.btn-update').click(function(){
            var div = $('.append-student');
            div.empty();
            var url = $(this).data('url');
            $.ajax({
                url: url,
                success:function(data){
                    div.append(data);
                    $('#updateStudent').modal('show');
                }
            });
        });
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

