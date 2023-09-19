@extends('dashboard.layouts.app')
@section('style')
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Edit Supplier</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="/backoffice/dashboard/index" class="default-color">Home</a>
                    </li>
                    <li class="breadcrumb-item active ps-0"> Edit Supplier</li>
                </ol>
            </div>
        </div>
    </div>
    @if ($message = \Session::get('errors'))
        <div class="alert alert-danger alert-block">
            @foreach($message->all() as $error)
                <strong>{{ $error }}</strong><br>
            @endforeach
        </div>
    @endif
    <div class="row">
        <div class="col-xl-12 mb-30">
            @if(session()->get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('error') }}
                </div>
            @endif
            @if(session()->get('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <form action="{{ route('dashboard.supplier.update',$supplier->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-9 mb-30">
                                <div class="card card-statistics h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4 col-xl-12 col-xxl-6 mb-3">
                                                <label class="form-label" for="name">Name*</label>
                                                <input type="text" class="form-control" name="name" required
                                                       value="{{old('name',$supplier->name)}}">
                                                @if($errors->has('name'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('name') }}
                                                    </div>
                                                @endif
                                                <div id="first_nameError" class="invalid-feedback"></div>
                                            </div>

                                            <div class="col-sm-4 col-xl-12 col-xxl-6 mb-3">
                                                <label class="form-label" for="phone">Phone Number*</label>
                                                <input required type="text" class="form-control" name="phone" value="{{old('phone',$supplier->phone)}}">
                                                @if($errors->has('phone'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('phone') }}
                                                    </div>
                                                @endif
                                                <div id="numberError" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 col-xl-12 col-xxl-6 mb-3">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="text" class="form-control" name="email" value="{{old('email',$supplier->email)}}">
                                                @if($errors->has('email'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('email') }}
                                                    </div>
                                                @endif
                                                <div id="emailError" class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-sm-4 col-xl-12 col-xxl-6 mb-3">
                                                <label class="form-label" for="country_id">Country*</label>
                                                <select required class="form-control form-select form-select-lg mb-15"
                                                        aria-label=".form-select-lg example" name="country_id">
                                                    <option selected="">Choose...</option>
                                                    @foreach($countries as $country)
                                                        <option value="{{$country->id}}"  @if($country->id == $supplier->country->id) selected @endif>{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-30">

                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <h5 class="card-title">Supplier Status</h5>
                                        <div class="form-group mb-3">
                                            <div class="checkbox checbox-switch switch-success">
                                                <label>
                                                    <input name="status" type="checkbox" id="statusCheckbox" checked=""
                                                           value="{{old('status',$supplier->status)}}" >
                                                    <span></span>
                                                    Active/Inactive
                                                </label>
                                                <!-- Hidden input field to store the actual status value -->
                                                <input type="hidden" name="status" id="status_hidden" value="{{old('status',$supplier->status)}}">
                                                @if($errors->has('status'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('status') }}
                                                    </div>
                                                @endif
                                                <div id="statusError" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics h-20">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="meta_title">Meta Title</label>
                                            <input name="meta_title" type="text" class="form-control"
                                                   value="{{old('meta_title',$supplier->meta_title,)}}" id="meta_title"
                                                   placeholder="Meta Title">
                                            @if($errors->has('meta_title'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('meta_title') }}
                                                </div>
                                            @endif
                                            <div id="metaTitleError" class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="meta_description">Meta Description</label>
                                            <textarea name="meta_description" class="form-control" id="meta_description"
                                                      rows="2"> {{old('meta_description',$supplier->meta_description)}}</textarea>
                                            @if($errors->has('meta_description'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('meta_description') }}
                                                </div>
                                            @endif
                                            <div id="metaDescriptionError" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <button id="submitBtn" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {

            // Fetch the supplier state from the server and store it in a variable (e.g., productsupplier)
            var suppliertState = "{{$supplier->status}}"; // Replace this with your dynamic value from the server
            // Set the checkbox state based on the product state
            if (suppliertState === "active") {
                $("#statusCheckbox").prop("checked", true);
            } else {
                $("#statusCheckbox").prop("checked", false);
            }

            // Add an event listener to update the hidden input's value when the switch is toggled
            $("#statusCheckbox").on("change", function () {
                if ($(this).prop("checked")) {
                    $("#status_hidden").val('active');
                } else {
                    $("#status_hidden").val('inactive');
                }
            });


            // Add an event listener to update the hidden input's value when the switch is toggled
            $("#featuredAuthor").on("change", function () {
                if ($(this).prop("checked")) {
                    $("#featured_hidden").val(1);
                } else {
                    $("#featured_hidden").val(0);
                }
            });
        });
    </script>
@endsection


