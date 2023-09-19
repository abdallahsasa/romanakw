@extends('dashboard.layouts.app')
@section('style')
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Add New Country</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="/backoffice/dashboard/index" class="default-color">Home</a>
                    </li>
                    <li class="breadcrumb-item active ps-0">Add New Country</li>
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
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach($countries as $country )
                        <tr>

                            <td>{{$country->name}}</td>
                            <td><span
                                    class="@if($country->status == 'active')text-success @else text-danger @endif ">{{$country->status}} </span>
                            </td>

                            <td>
                                <div class="row justify-content-center">
                                    <a class="pe-2 w-auto">
                                        <form method="POST"
                                              action="{{ route('dashboard.country.destroy', $country->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn-danger btn  fa fa-trash-o"
                                                    onclick="return confirm('Are you sure you want to delete {{$country->name}}')"></button>
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
                    <form action="{{ route('dashboard.country.store') }}" method="POST" enctype="multipart/form-data">
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
                                                <label class="form-label" for="name">Country Status *</label>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox checbox-switch switch-success">
                                                        <label>
                                                            <input name="status" type="checkbox" id="statusCheckbox"
                                                                   checked=""
                                                                   value="active">
                                                            <span></span>
                                                            Active/Inactive
                                                        </label>
                                                        <!-- Hidden input field to store the actual status value -->
                                                        <input type="hidden" name="status" id="status_hidden"
                                                               value="active">
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


