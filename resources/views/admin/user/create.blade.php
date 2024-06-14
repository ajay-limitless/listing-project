@extends('admin.layouts.master')

@section('contents')
    <div class="card mt-5">
        <div class="card-header">

            <h4>
                Create User
            </h4>

        </div>
        <div class="card-body p-0">
            <form action="{{ route('admin.user.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Avatar <span class="text-danger">*</span></label>
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
                            <label for="name">Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="user_type">User type<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="user_type" id="user_type" required>
                        </div>
                    </div>
                 
                </div>
                <div class="row mr-2 ml-2">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="banner">banner <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="banner">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="phone">Phone Number<span class="text-danger"></span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <input type="tel" class="form-control phone-number" name="phone" id="phone">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="banner">about</label>
                            <input type="text" class="form-control" name="about" id="about">
                        </div>
                    </div>
                </div>

                <div class="row mr-2 ml-2">
                <div class="col-6">
                        <div class="form-group">
                            <label for="email">Email<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Password">Password<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                                <input type="password" class="form-control pwstrength" data-indicator="pwindicator"
                                    name="password" id="Password" required>
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
@endsection
