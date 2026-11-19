<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Faculty Record</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form id="frmEdit">
            <input type="hidden" id="id" name="id">

            <div class="mb-3">
                <label for="edit_fname" class="form-label">First Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="edit_fname" name="fname" placeholder="Enter First Name" required pattern="[A-Za-z\s\-]+">
            </div>

            <div class="mb-3">
                <label for="edit_mname" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="edit_mname" name="mname" placeholder="Enter Middle Name">
            </div>

            <div class="mb-3">
                <label for="edit_lname" class="form-label">Last Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="edit_lname" name="lname" placeholder="Enter Last Name" required pattern="[A-Za-z\s\-]+">
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="edit_age" class="form-label">Age <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="edit_age" name="age" min="18" max="100" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="edit_gender" class="form-label">Gender <span class="text-danger">*</span></label>
                    <select class="form-select" id="edit_gender" name="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="edit_address" class="form-label">Address <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="edit_address" name="address" placeholder="Enter Address" required minlength="5">
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="edit_position" class="form-label">Position <span class="text-danger">*</span></label>
                    <select class="form-select" id="edit_position" name="position" required>
                        <option value="Instructor">Instructor</option>
                        <option value="Assistant Professor">Assistant Professor</option>
                        <option value="Associate Professor">Associate Professor</option>
                        <option value="Professor">Professor</option>
                        <option value="Department Head">Department Head</option>
                        <option value="Dean">Dean</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="edit_salary" class="form-label">Salary <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="edit_salary" name="salary" step="0.01" min="0" required>
                </div>
            </div>

            <div class="modal-footer px-0 pb-0">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </form>

      </div>
    </div>
  </div>
</div>
