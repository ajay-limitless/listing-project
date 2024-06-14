@extends('admin.layouts.master')
@section('contents')
<div class="card mt-5">
    <div class="card-header">
        <h4>
            Create Security Feature
        </h4>
    </div>

    <div class="card-body p-0">
        <form action="{{ route('admin.security_feature.store') }}" method="POST">
            @csrf
            @method('POST')
            <!-- <div class="col-md-6">
                <div class="form-group">
                    <label for="">Avatar</label>
                    <div id="image-preview" class="image-preview avatar-preview">
                        <label for="image-upload" id="image-label">Choose File</label>
                        <input type="file" name="avatar" id="image-upload" />
                        <input type="hidden" name="old_avatar" value="#">
                    </div>
                </div>
            </div> -->
            <div class="row mr-2 ml-2">

                <div class="col-6">
                    <div class="form-group">
                        <label>Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                    <label>status<span class="text-danger">*</span></label>
                    <div class="toggle-button">
        <input type="checkbox" id="toggle" class="toggle-input">
        <label for="toggle" class="toggle-label">
            <span class="toggle-slider"></span>
        </label>
    </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-info mr-3 mb-3 float-end">Save</button>
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