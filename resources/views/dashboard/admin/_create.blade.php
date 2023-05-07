<div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-primary" role="document">
      <div class="modal-content">
        <form action="{{ route('users.store') }}" method="post">
          @csrf              
          <div class="modal-header">
            <h4 class="modal-title">Create New User</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <input type="text" name="lname" class="form-control mb-3" placeholder="Lastname" required>
            <input type="text" name="fname" class="form-control mb-3" placeholder="Firstname" required>
            <input type="text" name="position" class="form-control mb-3" placeholder="Position" required>
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
            <input type="hidden" name="user_type" id="user_type" class="form-control mb-3">
            <input type="password" name="password" minlength="8" class="form-control mb-3" placeholder="Password" required>
            <select name="role" class="form-control mb-3" id="role_select">
                <!-- <option value="">-- Role(Skip if Role is only User) --</option> -->
                <option >Please Select</option>
                @foreach($roles as $i => $role)
                    <option value="{{ $role->name }}">{{ ucwords($role->name) }}</option>
                @endforeach
            </select>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
   
  </script>