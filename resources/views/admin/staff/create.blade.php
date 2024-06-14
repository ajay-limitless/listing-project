@extends('admin.layouts.master')

@section('contents')
<div class="card mt-5">
    <div class="card-header">

        <h4>
            Create Staff
        </h4>

    </div>
    <div class="card-body p-0">
        <form action="{{ route('admin.staff.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">profile_picture</label>
                    <div id="image-preview" class="image-preview avatar-preview">
                        <label for="image-upload" id="image-label">Choose File</label>
                        <input type="file" name="	profile_picture" id="image-upload" />
                        <input type="hidden" name="	profile_picture" value="#">
                    </div>
                </div>
            </div>
            <div class="row mr-2 ml-2">

                <div class="col-4">
                    <div class="form-group">
                        <label>firstName<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="first_Name" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>lastName<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="last_Name" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>Email<span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="Email" required>
                    </div>
                </div>

            </div>
            <div class="row mr-2 ml-2">

             

             
            </div>
            <div class="row mr-2 ml-2">

              

              
            </div>
            <div class="row mr-2 ml-2">
            <div class="col-4">
                    <div class="form-group">
                        <label>city<span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="city" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>state<span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="state" required>
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        <label>zip_code<span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="zip_code" required>
                    </div>
                </div>
            </div>
            <div class="row mr-2 ml-2">
                <div class="col-4">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>Phone Number<span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <input type="tel" class="form-control phone-number" name="phone">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label> role<span class="text-danger">*</span></label>
                        <div class="input-group">

                            <input type="text" class="form-control phone-number" name="role">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>department<span class="text-danger"></span></label>
                        <div class="input-group">

                            <input type="text" class="form-control phone-number" name="department">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>hireDate<span class="text-danger"></span></label>
                        <div class="input-group">

                            <input type="date" class="form-control phone-number" name="hire_date">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>Bio<span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="Bio" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label >salary<span class="text-danger"></span></label>
                        <div class="input-group">

                            <input type="text" class="form-control phone-number" name="salary">
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex  flex-column">
                    <label for="status" class=""> Is active <span class="text-danger">*</span></label>
                        <div class="d-flex m-3">
                       
                            <input type="radio" class="btn-check fs-2" name="status" id="active" required style="padding: 20px 20px 20px 20px;height:35px; width:35px;">

                            <label for="active" class="m-2">Active</label>
                     
                            <input type="radio" class="" name="status" id="InActive" required style="padding: 20px 20px 20px 20px;height:35px; width:35px;">

                            <label for="InActive" class="m-2">InActive</label>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="form-group ">
                        <label>status<span class="text-danger">*</span></label>
                        <div class="toggle-button">
                            <input type="checkbox" id="toggle" class="toggle-input">
                            <label for="toggle" class="toggle-label">
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <h6 class=" m-3 fs-4 fw-bold" style="margin-right: 80px;">EmergencyContact</h6>
            <div class="row mr-2 ml-2">


                <div class="col-4">
                    <div class="form-group">
                        <label>emergency_contact_namer<span class="text-danger"></span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <input type="tel" class="form-control phone-number" name="emergency_contact_namer">
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        <label>emergency_contact_phone<span class="text-danger"></span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <input type="tel" class="form-control phone-number" name="emergency_contact_phone">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>emergency_contact_relationship<span class="text-danger"></span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <input type="tel" class="form-control phone-number" name=">emergency_contact_relationship">
                        </div>
                    </div>
                </div>
            </div>



            <div class="row mr-2 ml-2">
                <div class="col-6">
                    <div class="form-group">
                        <label>Password<span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <input type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" required>
                        </div>
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Confirm Password<span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <input type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password_confirmation" required>
                        </div>
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-info mr-3 mb-3 float-right">Save</button>
        </form>
    </div>

</div>
<style>
   

.toggle-button {
    position: relative;
}

.toggle-input {
    display: none;
}

.toggle-label {
    display: block;
    width: 60px;
    height: 30px;
    background-color: #ccc;
    border-radius: 15px;
    cursor: pointer;
    position: relative;
    transition: background-color 0.3s;
}

.toggle-slider {
    position: absolute;
    top: 3px;
    left: 3px;
    width: 24px;
    height: 24px;
    background-color: #fff;
    border-radius: 50%;
    transition: transform 0.3s;
}

.toggle-input:checked + .toggle-label {
    background-color: #4caf50;
}

.toggle-input:checked + .toggle-label .toggle-slider {
    transform: translateX(30px);
}

</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const toggleInput = document.getElementById('toggle');

    toggleInput.addEventListener('change', function () {
        if (toggleInput.checked) {
            console.log('Toggle is ON');
        } else {
            console.log('Toggle is OFF');
        }
    });
});

</script>
@endsection