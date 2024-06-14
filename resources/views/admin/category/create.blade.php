@extends('admin.layouts.master')

@section('contents')
    <div class="card mt-5">
        <div class="card-header">

            <h4>
                Create Category
            </h4>

        </div>
        <div class="card-body p-0">
            <form action="{{ route('admin.category.store') }}" method="POST">
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

                    <div class="col-6">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description" required>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" name="slug" required>
                        </div>
                    </div>

                 

                    <div class="col-6">
                        <div class="form-group">
                            <label>Parent Id<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="parent_id" required>
                        </div>
                    </div>

                  
                    <div class="col-6 d-flex  flex-column">
                    <label for="status" class="">status <span class="text-danger">*</span></label>
                        <div class="d-flex m-3">
                       
                            <input type="radio" class="btn-check fs-2" name="status" id="active" required style="padding: 20px 20px 20px 20px;height:35px; width:35px;">

                            <label for="active" class="m-2">Active</label>
                     
                            <input type="radio" class="" name="status" id="InActive" required style="padding: 20px 20px 20px 20px;height:35px; width:35px;">

                            <label for="InActive" class="m-2">InActive</label>
                        </div>
                    </div>
                 
                </div>
                                <button type="submit" class="btn btn-info mr-3 mb-3 float-right">Save</button>
            </form>
        </div>

    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
