@extends('admin.layouts.master')

@section('contents')
<div class="card mt-5">
    <div class="card-header">

        <h4>
            Farm Feature
        </h4>

    </div>
    <div class="card-body p-0">
        <form action="{{ route('admin.farm_feature.store') }}" method="POST">
            @csrf
            @method('POST')

            <div class="row mr-1 ml-2">

                <div class="col-6">
                    <div class="form-group">
                        <label for="name">Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" required>
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
    </div>

    <button type="submit" class="btn btn-info mr-3 mb-3 float-right">Save</button>
    </form>
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