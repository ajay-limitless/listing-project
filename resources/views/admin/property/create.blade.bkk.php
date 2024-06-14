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
                        <div class="">
                            <label>Type<span class="text-danger">*</span></label>
                           
                          
                            <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                            <option value="" placeholder="--select_any_one--">--Select Any One--</option>
                                <option value="house">House</option>
                                <option value="villa">Villa</option>
                                <option value="apartment">Apartment</option>
                                <option value="land">Land</option>
</select>

                        </div>
                    </div>
                </div>
                <div class="row mr-2 ml-2">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Address<span class="text-danger">*</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Bedrooms<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <input type="number" name="bedrooms">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mr-2 ml-2">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Bathrooms<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <input type="number" name="bathrooms">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info mr-3 mb-3 float-right">Save</button>
            </form>
        </div>

    </div>
    
@endsection
