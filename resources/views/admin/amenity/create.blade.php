@extends('admin.layouts.master')

@section('contents')
    <div class="card mt-5">
        <div class="card-header">

            <h4>
                Create Amenity
            </h4>

        </div>
        <div class="card-body p-0">
            <form action="{{ route('admin.amenity.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Image</label>
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
                            <label>Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>

                    <div class="col-6 text-center">
                    <label for="status" class="text-center">Status<span class="text-danger">*</span></label>
                        <div class="form-group gap-4 ">
                            
                          
                            <label for="active" class=" m-3">Active
                            <input type="radio" class="form-control" name="status" id="active" required>
                            </label>
                            <label for="inactive" class="m-3  h-0" style="height: 0px;">InActive
                            <input type="radio" class="form-control" name="status" id="inactive" required>
                            </label>
                        </div>
                        
                    </div>
                </div>
                                <button type="submit" class="btn btn-info mr-3 mb-3 float-right">Save</button>
            </form>
        </div>

    </div>
@endsection
