@extends('admin.layouts.master')

@section('contents')
<div class="card mt-5">
    <div class="card-header">
        <h4>
            Create Property
        </h4>
    </div>

    <div class="card-body p-0">
        <form action="{{ route('admin.property.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Avatar</label>
                    <div id="image-preview" class="image-preview avatar-preview">
                        <label for="image-upload" id="image-label">Choose File</label>
                        <input type="file" name="avatar" id="image-upload" />
                        <input type="hidden" name="old_avatar" value="#">
                    </div>
                </div>
            </div>
            <div class="row mr-2 ml-2">

                <div class="col-6">
                    <div class="form-group">
                        <label>Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Description<span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="description " required>
                    </div>
                </div>
                <div class="col-6">
                    <label>Type<span class="text-danger">*</span></label>
                    <div class="form-group">

                        <select class="form-select w-100 p-2 border border-light-subtle rounded-1" aria-label="Default select example" style="border-radius: 5px; ">
                            <option value="" placeholder="--select_any_one--">--Select Any One--</option>
                            <option value="house">House</option>
                            <option value="villa">Villa</option>
                            <option value="apartment">Apartment</option>
                            <option value="land">Land</option>
                        </select>

                    </div>


                </div>
                <div class="col-6">
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
            </div>
            <div class="row mr-2 ml-2">
                <div class="col-6">
                    <div class="form-group">
                        <label>Price<span class="text-danger">*</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Address<span class="text-danger">*</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>City<span class="text-danger">*</label>
                        <input type="text" class="form-control" name="city">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>State<span class="text-danger">*</label>
                        <input type="text" class="form-control" name="state">

                    </div>
                </div>


            </div>
            <div class="row mr-2 ml-2">
                <div class="col-6">
                    <div class="form-group">
                        <label>Zip_code<span class="text-danger">*</label>
                        <input type="number" class="form-control" name="zip_code">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Country<span class="text-danger">*</label>
                        <input type="text" class="form-control" name="country">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Bedrooms<span class="text-danger">*</label>
                        <input type="text" class="form-control" name="bedrooms">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Bathrooms<span class="text-danger">*</label>
                        <input type="text" class="form-control" name="bathrooms">
                    </div>
                </div>


            </div>
            <div class="row mr-2 ml-2">
                <div class="col-6">
                    <div class="form-group">
                        <label>Area<span class="text-danger">*</label>
                        <input type="text" class="form-control" name="area">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>ClotSize<span class="text-danger"></label>
                        <input type="text" class="form-control" name="clot size">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>YearBuilt<span class="text-danger"></label>
                        <input type="text" class="form-control" name="year built">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Parking<span class="text-danger"></label>
                        <input type="text" class="form-control" name="parking">
                    </div>
                </div>


            </div>
            <div class="row mr-2 ml-2">
                <div class="col-6">
                    <div class="form-group">
                        <label>Floor<span class="text-danger"></label>
                        <input type="number" class="form-control" name="floor">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>BuildingName<span class="text-danger"></label>
                        <input type="text" class="form-control" name="building_name">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>parkingSpot<span class="text-danger"></label>
                        <input type="text" class="form-control" name="parking_spot">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Garden<span class="text-danger">*</label>
                        <input type="text" class="form-control" name="garden">
                    </div>
                </div>


            </div>
            <div class="row mr-2 ml-2">
                <div class="col-6">
                    <div class="form-group">
                        <label>Garage<span class="text-danger">*</label>
                        <input type="text" class="form-control" name="garage">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>GarageSize<span class="text-danger">*</label>
                        <input type="text" class="form-control" name="garage_size">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Features<span class="text-danger"></label>
                        <input type="text" class="form-control" name="features">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>MainImage<span class="text-danger">*</label>
                        <input type="file" class="form-control" name="main_image">
                    </div>
                </div>


            </div>
            <div class="row mr-2 ml-2">
                <div class="col-6">
                    <div class="form-group">
                        <label>GalleryImages<span class="text-danger"></label>
                        <input type="file" class="form-control" name="gallery_images">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Amenities<span class="text-danger"></label>
                        <input type="text" class="form-control" name="amenities">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>SecurityFeatures<span class="text-danger"></label>
                        <input type="text" class="form-control" name="security_features">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>SecurityType<span class="text-danger"></label>
                        <input type="text" class="form-control" name="security_type">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label>ServiceCharges<span class="text-danger"></label>
                        <input type="text" class="form-control" name="service_charges">
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-info mr-3 mb-3 float-right">Save</button>
        </form>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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