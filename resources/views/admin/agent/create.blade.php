@extends('admin.layouts.master')

@section('contents')
<div class="card mt-5">
    <div class="card-header">
        <h4>
            Create Agent
        </h4>
    </div>

    <div class="card-body p-0">
        <form action="{{ route('admin.agent.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">profile_picture</label>
                    <div id="image-preview" class="image-preview avatar-preview">
                        <label for="image-upload" id="image-label">Choose File</label>
                        <input type="file" name="profile_picture" id="image-upload" />
                        <input type="hidden" name="profile_picture" value="#">
                    </div>
                </div>
            </div>
            <div class="row mr-2 ml-2">

                <div class="col-4">
                    <div class="form-group">
                        <label>FirstName<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="first_name" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>LastName<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="last_name" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>Email<span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>

            </div>


            <div class="row mr-2 ml-2">
                <div class="col-4">
                    <div class="form-group">
                        <label>State<span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="state" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>City<span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="city" required>
                    </div>
                </div>


                <div class="col-4">
                    <div class="form-group">
                        <label>Zip_code<span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="zip_code" required>
                    </div>
                </div>
            </div>
            <div class="row mr-2 ml-2">
                <div class="col-4">
                    <label class="">Bio<span class="text-danger"></span></label>
                    <div class="form-group">

                        <textarea name="bio" id="" cols="30" rows="2" class="p-2 border border-light-subtle rounded-1"></textarea>
                        <!-- <input type="text" class="form-control" name="Bio" required> -->
                    </div>
                </div>
                <div class="col-4">
                    <label>Address</label>
                    <div class="form-group">
                        <textarea name="address" id="" cols="30" rows="2" class="p-2 border border-light-subtle rounded-1"></textarea>
                        <!-- <input type="text" class="form-control" name="address"> -->
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
            </div>
            <div class="row mr-2 ml-2">

                <div class="col-4">

                    <div class="form-group">
                        <label for="property_type">Role<span class="text-danger"></span></label>
                        <select class="form-select w-100  border border-light-subtle rounded-1" aria-label="Default select example" style="border-radius: 5px;padding:10px 10px 10px 10px; " name="role">

                            <option value="house">House</option>
                            <option value="villa">Villa</option>
                            <option value="apartment">Apartment</option>
                            <option value="land">Land</option>
                        </select>

                    </div>

                </div>

                <div class="col-4">

                    <div class="form-group">
                        <label for="property_type">Department<span class="text-danger"></span></label>
                        <select class="form-select w-100  border border-light-subtle rounded-1" aria-label="Default select example" style="border-radius: 5px; padding:10px 10px 10px 10px;" name="department">

                            <option value="house">House</option>
                            <option value="villa">Villa</option>
                            <option value="apartment">Apartment</option>
                            <option value="land">Land</option>
                        </select>

                    </div>

                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>Hire date<span class="text-danger">*</span></label>
                        <div class="input-group">

                            <input type="date" class="form-control phone-number" name="hire_date ">
                        </div>
                    </div>
                </div>
            </div>





            <div class="row mr-2 ml-2">
                <div class="col-4">
                    <div class="form-group">
                        <label>Status<span class="text-danger">*</span></label>
                        <div class="toggle-button">
                            <input type="checkbox" id="toggle" class="toggle-input">
                            <label for="toggle" class="toggle-label">
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>Permissions<span class="text-danger"></span></label>
                        <div class="input-group">

                            <input type="text" class="form-control pwstrength" data-indicator="pwindicator" name="permissions" required>
                        </div>
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>Total sales<span class="text-danger">*</span></label>
                        <div class="input-group">

                            <input type="number" class="form-control pwstrength" data-indicator="pwindicator" name="total_sales" required>
                        </div>
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>Total properties sold<span class="text-danger">*</span></label>
                        <div class="input-group">

                            <input type="number" class="form-control pwstrength" data-indicator="pwindicator" name="total_properties_sold" required>
                        </div>
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>Total_leases<span class="text-danger">*</span></label>
                        <div class="input-group">

                            <input type="number" class="form-control pwstrength" data-indicator="pwindicator" name="total_leases" required>
                        </div>
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>Commission rate<span class="text-danger"></span></label>
                        <div class="input-group">

                            <input type="text" class="form-control pwstrength" data-indicator="pwindicator" name="commission_rate" required>
                        </div>
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>Average rating<span class="text-danger"></span></label>
                        <div class="input-group">

                            <input type="text" class="form-control pwstrength" data-indicator="pwindicator" name="average_rating" required>
                        </div>
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex  flex-column">
                    <label for="is_admin" class="">Is admin <span class="text-danger">*</span></label>
                    <div class="d-flex m-3 gap-5">
                        <label for="active" class="" style="margin-left: 20px;">Active
                            <input type="radio" class="btn-check fs-2" name="is_admin" id="active" required style="height:15px; width:15px;">
                        </label>


                        <label for="InActive" class="" style="margin-left: 20px;">In active
                            <input type="radio" class="" name="is_admin" id="InActive" required style="height:15px; width:15px;">
                        </label>
                    </div>
                </div>
                <div class="col-4">

                    <div class="form-group">
                        <label for="property_type">Employee_id <span class="text-danger"></span></label>
                        <select class="form-select w-100  border border-light-subtle rounded-1" aria-label="Default select example" style="border-radius: 5px;padding:10px 10px 10px 10px; " name="employee_id">

                            <option value="house">House</option>
                            <option value="villa">Villa</option>
                            <option value="apartment">Apartment</option>
                            <option value="land">Land</option>
                        </select>

                    </div>

                </div>
            </div>
            <h6 class=" m-3 fs-4 fw-bold" style="margin-right: 80px;">EmergencyContact</h6>
            <div class="row mr-2 ml-2">


                <div class="col-4">
                    <div class="form-group">
                        <label>Emergency contact namer<span class="text-danger"></span></label>
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
                        <label>Emergency contact phone<span class="text-danger"></span></label>
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
                        <label>Emergency contact relationship<span class="text-danger"></span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <input type="tel" class="form-control phone-number" name="emergency_contact_relationship">
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

    .toggle-input:checked+.toggle-label {
        background-color: #4caf50;
    }

    .toggle-input:checked+.toggle-label .toggle-slider {
        transform: translateX(30px);
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleInput = document.getElementById('toggle');

        toggleInput.addEventListener('change', function() {
            if (toggleInput.checked) {
                console.log('Toggle is ON');
            } else {
                console.log('Toggle is OFF');
            }
        });
    });
</script>
@endsection