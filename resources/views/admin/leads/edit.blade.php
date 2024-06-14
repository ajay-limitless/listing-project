@extends('admin.layouts.master')

@section('contents')
<div class="card mt-5">
    <div class="card-header">

        <h4>
            Create Lead
        </h4>

    </div>
    <div class="card-body p-0">
        <form action="{{ route('admin.lead.update', $leads->id) }}" method="POST">

            @csrf
            @method('POST')

            <div class="row mr-2 ml-2">

                <div class="col-6">
                    <div class="form-group">
                        <label for="name">Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$leads->name}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="email">Email<span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" id="email" value="{{$leads->email}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="bedrooms">bedrooms<span class="text-danger"></span></label>
                        <input type="number" class="form-control" name="bedrooms" id="bedrooms" value="{{$leads->bedrooms}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="bathrooms">bathrooms<span class="text-danger"></span></label>
                        <input type="number" class="form-control" name="bathrooms" id="bathrooms" value="{{$leads->bathrooms}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="source">source<span class="text-danger"></span></label>
                        <input type="text" class="form-control" name="source" value="{{$leads->source}}" id="source" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="priority">priority<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="priority" id="priority" value="{{$leads->priority}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <label for="property_type">property_type<span class="text-danger"></span></label>
                    <div class="form-group">

                        <select class="form-select w-100 p-2 border border-light-subtle rounded-1" aria-label="Default select example" style="border-radius: 5px; " name="property_type" value="{{$leads->property_type}}">

                            <option value="">{{$leads->property_type}}</option>

                            <!-- <option value="house"></option>
                            <option value="villa">Villa</option>
                            <option value="apartment">Apartment</option>
                            <option value="land">Land</option> -->

                        </select>

                    </div>
                    <!-- <div class="form-group">

                            <input type="text" class="form-control" name="property_type" id="property_type" required>
                        </div> -->
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>status<span class="text-danger">*</span></label>
                        <div class="toggle-button">
                            <input type="checkbox" id="toggle" class="toggle-input" name="status" value="{{$leads->status}}">
                            <label for="toggle" class="toggle-label">
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mr-2 ml-2">
                <!-- <div class="col-6">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="{{$leads->address}}">
                    </div>
                </div> -->
                <div class="col-6">
                    <label for="lead_type">lead_type<span class="text-danger">*</span></label>
                    <div class="form-group">

                        <select class="form-select w-100 p-2 border border-light-subtle rounded-1" aria-label="Default select example" style="border-radius: 5px; " name="lead_type">

                            <option value="{{$leads->lead_type}}">property</option>
                            <option value="marketing">marketing</option>

                        </select>

                    </div>
                    <!-- <div class="form-group">

                            <input type="text" class="form-control" name="property_type" id="property_type" required>
                        </div> -->
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="notes">notes<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="notes" id="notes" value="{{$leads->notes}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Phone Number<span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <input type="tel" class="form-control phone-number" value="{{$leads->phone}}" name="phone">
                        </div>
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