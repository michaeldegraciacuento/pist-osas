<div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
      <div class="modal-content">
        <form action="{{ url('/storeStudent') }}" method="post" enctype="multipart/form-data">
          @csrf              
          <div class="modal-header">
            <h4 class="modal-title">Create New Student</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-3">
                    <img src="" alt="" id="imageShow" style="width: 150px;height:150px;border:1px solid black;margin: 0;">
                </div>
                <div class="col-5">
                    <label for="">First Name:</label>
                    <input type="text" name="fname" class="form-control mb-3 text-center text-uppercase fname" required>
                    <label for="">Last Name:</label>
                    <input type="text" name="lname" class="form-control mb-3 text-center text-uppercase lname" required>
                </div>   
                <div class="col-4">
                    <label for="">Middle Name:</label>
                    <input type="text" name="mname" class="form-control mb-3 text-center text-uppercase mname" >
                    <label for="">Extension Name:</label>
                    <input type="text" name="ename" class="form-control mb-3 text-center text-uppercase" >
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="file" name="image" id="image" class="mb-1" required>
                    <input type="hidden" name="user_type" value="4">
                </div>
                <div class="col-6">
                    <label for="">ID #:</label>
                    <input type="text" name="uli" class="form-control uli text-center" required>
                    <input type="hidden" name="role" class="form-control mb-3 text-center text-uppercase" value="student">
                </div>
            </div>  
            <div class="row">
                <div class="col-6">
                    <label for="">Year:</label>
                    <input type="text" name="year" class="form-control mb-1 text-center text-uppercase" required>
                </div>
                <div class="col-6">
                    <label for="">Course:</label>
                    <input type="text" name="course" class="form-control mb-1 text-center text-uppercase" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="">Birthday:</label>
                    <input type="date" name="birthday" class="form-control mb-1 text-center text-uppercase bday" required>
                    <label for="">Birthplace:</label>
                    <input type="text" name="birthplace" class="form-control mb-1 text-center" required>
                </div>
                <div class="col-6">
                    <label for="">Age:</label>
                    <input type="text" name="age" class="form-control mb-1 text-center text-uppercase age" required>
                    <label for="">Gender</label>
                    <input type="text" name="gender" class="form-control mb-1 text-center text-uppercase" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="">Email:</label>
                    <input type="email" name="email" class="form-control mb-1 text-center text-uppercase" required>
                </div>
                <div class="col-6">
                    <label for="">Contact Number:</label>
                    <input type="number" name="contact_number nm" class="form-control mb-1 text-center text-uppercase" required>
                </div>
                <style>
                    @layer base {
  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
}
                </style>
            </div>
            <hr>
            <h6 class="fw-bold">Complete Permanent Address:</h6>
            <div class="row">
                <div class="col-6">
                    <label for="">Region:</label>
                    <input type="text" name="region" class="form-control mb-1 text-center text-uppercase" required>
                    <label for="">City/Municipality:</label>
                    <input type="text" name="city" class="form-control mb-1 text-center text-uppercase" required>
                </div>
                <div class="col-6">
                    <label for="">Province:</label>
                    <input type="text" name="province" class="form-control mb-1 text-center text-uppercase" required>
                    <label for="">Barangay:</label>
                    <input type="text" name="barangay" class="form-control mb-1 text-center text-uppercase"  required>
                </div>
                <div class="col-6">
                    <label for="">Purok/Street/Block:</label>
                    <input type="text" name="purok" class="form-control mb-1 text-center text-uppercase" required>
                </div>
            </div>
            <hr>
            <h6 class="fw-bold">Contact Person/Guardian/Spouse:</h6>
            <div class="row">
                <div class="col-6">
                    <label for="">Fullname:</label>
                    <input type="text" name="parent_name" class="form-control mb-1 text-center text-uppercase" required>
                </div>
                <div class="col-6">
                    <label for="">Contact Number:</label>
                    <input type="number" name="parent_contact" class="form-control mb-1 text-center text-uppercase" required>
                </div>
            </div>
            <hr>
            
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>