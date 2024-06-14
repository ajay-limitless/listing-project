@extends('admin.layouts.master')

@section('contents')
    <div class="card mt-5">
        <div class="card-header">

            <h4>
                Create Testimonial
            </h4>

        </div>
        <div class="card-body p-0">
            <form action="{{ route('admin.testimonial.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="col-md-6">
                <div class="form-group">
                    <label for="">image</label>
                    <div id="image-preview" class="image-preview avatar-preview">
                        <label for="image-upload" id="image-label">Choose File</label>
                        <input type="file" name="avatar" id="image-upload" />
                        <input type="hidden" name="image" value="#">
                    </div>
                </div>
            </div>
            <div class="row mr-2 ml-2">

                <div class="col-6">
                    <div class="form-group">
                        <label for="client_name">ClientName<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="client_name" id="client_name" required>
                    </div>
                </div>
             
                <div class="col-6">
                    <div class="form-group">
                        <label for="transaction_date">Transaction date<span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="transaction_date" id="transaction_date" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="permission_to_use">Permission to use<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="	permission_to_use" id="permission_to_use" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="attribution">Attribution<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="attribution" id="attribution" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="consent_to_share">Consent to share<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="consent_to_share" id="consent_to_share" required>
                    </div>
                </div>
                <div class="col-6">
                    <label for="client_type" style="font-size: 12px;font-weight: 500;">Client type<span class="text-danger">*</span></label>
                    <div class="form-group">

<select class="form-select w-100 p-2 border border-light-subtle rounded-1" aria-label="Default select example" style="border-radius: 5px; ">
    <option value="" placeholder="--select_any_one--">--Select Any One--</option>
    <option value="house">House</option>
    <option value="villa">Villa</option>
    <option value="apartment">Apartment</option>
    <option value="land">Land</option>
</select>

</div>
                    <!-- <div class="form-group">

                            <input type="text" class="form-control" name="property_type" id="property_type" required>
                        </div> -->
                </div>
              
            </div>
            <div class="row mr-2 ml-2">
                <div class="col-6">
                    <div class="form-group">
                        <label for="rating">Rating <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="rating" id="rating" >
                    </div>
                </div>
                <div class="col-6">
                    <label for="property_type " class="" style="font-size: 12px;font-weight: 500;">Property type<span class="text-danger">*</span></label>
                    <div class="form-group">

<select class="form-select w-100 p-2 border border-light-subtle rounded-1" aria-label="Default select example" style="border-radius: 5px; ">
    <option value="" placeholder="--select_any_one--">--Select Any One--</option>
    <option value="house">House</option>
    <option value="villa">Villa</option>
    <option value="apartment">Apartment</option>
    <option value="land">Land</option>
</select>

</div>
                    <!-- <div class="form-group">

                            <input type="text" class="form-control" name="property_type" id="property_type" required>
                        </div> -->
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="property_address">Property address<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="property_address" id="notes" required>
                    </div>
                </div>
                
            </div>

         

            <button type="submit" class="btn btn-info mr-3 mb-3 float-right">Save</button>
            </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
