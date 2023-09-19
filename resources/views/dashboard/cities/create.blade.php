@extends('dashboard.layouts.app')
@section('style')
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Add New City</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="/backoffice/dashboard/index" class="default-color">Home</a>
                    </li>
                    <li class="breadcrumb-item active ps-0">Add New City</li>
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
    <div class="card card-statistics h-50 ">
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table-bordered border table table-striped dataTable p-0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach($cities as $city )
                        <tr>

                            <td>{{$city->name}}</td>
                            <td>{{$city->country->name}}</td>
                            <td>
                                <div class="row justify-content-center">
                                    <a class="pe-2 w-auto">
                                        <form method="POST"
                                              action="{{ route('dashboard.city.destroy', $city->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn-danger btn  fa fa-trash-o"
                                                    onclick="return confirm('Are you sure you want to delete {{$city->name}}')"></button>
                                        </form>
                                    </a>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
                    <form action="{{ route('dashboard.city.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-30">
                                <div class="card card-statistics h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4 col-xl-12 col-xxl-6 mb-3 form-group ">
                                                <label class="form-label" for="name">Name *</label>
                                                <input type="text" class="form-control" name="name" required
                                                       value="{{old('name')}}">
                                                @if($errors->has('name'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('name') }}
                                                    </div>
                                                @endif
                                                <div id="first_nameError" class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-sm-4 col-xl-12 col-xxl-6 mb-3">
                                                <label class="form-label" for="country_id">Country*</label>
                                                <select required class="form-control form-select form-select-lg mb-15"
                                                        aria-label=".form-select-lg example" name="country_id">
                                                    <option selected="">Choose...</option>
                                                    @foreach($countries as $country)
                                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
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


