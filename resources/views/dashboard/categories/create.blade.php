@extends('dashboard.layouts.app')
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> Add New Category</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="/backoffice/dashboard" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active ps-0">Add New Category</li>
                </ol>
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

                    <form method="POST" action="{{route('dashboard.categories.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-30">
                                <div class="card card-statistics h-100">
                                    <div class="card-body row">
                                        <h5 class="card-title">Category</h5>

                                        <div class="mb-3 col-md-6">
                                            <div class="form-group mb-3 mt-10">
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
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="parent_id">Parent Category</label>
                                            <select name="parent_id" class="form-select form-select-lg mb-3"
                                                    id="parent_id">
                                                <option selected disabled>Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('parent_id'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('parent_id') }}
                                                </div>
                                            @endif
                                            <div id="categoryError" class="invalid-feedback"></div>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="exampleInputEmail1"> Name</label>
                                            <input required name="name" type="text" class="form-control"
                                                   aria-describedby="emailHelp"
                                                   value="{{old('name')}}">
                                            @if($errors->has('name'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="exampleInputEmail1"> Slug</label>
                                            <input required name="slug" type="text" class="form-control"
                                                   aria-describedby="emailHelp"
                                                   value="{{old('slug')}}">
                                            @if($errors->has('slug'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('slug') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlTextarea1">
                                                Description</label>
                                            <textarea name="description" class="form-control" id="description"
                                                      rows="2">{{old('description')}}</textarea>
                                            @if($errors->has('description'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('description') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label d-block" for="exampleFormControlFile1">
                                                Image</label>
                                            <input name="image" type="file" class="form-control" id="customFile"
                                                   value="{{old('image')}}">
                                            @if($errors->has('image'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('image') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="meta_title">Meta Title</label>
                                            <input name="meta_title" type="text" class="form-control"
                                                   value="{{old('meta_title')}}" id="meta_title"
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
                                                      rows="2"> {{old('meta_description')}}</textarea>
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
                            <div class="col-md-6 mb-30">
                                <div class="card card-statistics h-70">
                                    <div class="card-body row">
                                        <h5 class="card-title">Category Translations </h5>
                                        <ul class="nav nav-tabs" id="languageTabs">

                                            @foreach($languages as $lang)
                                                @if($lang->code!="en")
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab"
                                                    href="#{{$lang->name}}Tab">{{$lang->name}}</a>
                                                </li>
                                                @endif
                                            @endforeach

                                            <!-- Add tabs for other languages as needed -->
                                        </ul>
                                        <div class="tab-content">

                                            @foreach($languages as $lang)
                                                @if($lang->code!="en")
                                                    <div class="tab-pane fade {{ $loop->index === 1 ? 'active show' : '' }} " id="{{$lang->name}}Tab">
                                                        <div class="card-body row">
                                                            <div class="mb-3 col-6">
                                                                <label class="form-label" for="exampleInputEmail1">
                                                                    Name </label>
                                                                <input required name="name[{{$lang->code}}]" type="text" class="form-control"
                                                                       value="{{ old('name'.$lang->code) }}">
                                                                @if($errors->has('name.en'))
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $errors->first('name'.$lang->code) }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-6">
                                                                <label class="form-label" for="exampleInputEmail1">
                                                                    Slug </label>
                                                                <input required name="slug[{{$lang->code}}]" type="text" class="form-control"
                                                                       value="{{ old('slug'.$lang->code) }}">
                                                                @if($errors->has('slug'.$lang->code))
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $errors->first('slug'.$lang->code) }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-12">
                                                                <label class="form-label" for="exampleInputEmail1">
                                                                    Description </label>
                                                                <input required name="description[{{$lang->code}}]" type="text" class="form-control"
                                                                       value="{{ old('description'.$lang->code) }}">
                                                                @if($errors->has('description'.$lang->code))
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $errors->first('description'.$lang->code) }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-6">
                                                                <label class="form-label" for="exampleInputEmail1">
                                                                    Meta Title </label>
                                                                <input required name="meta_title[{{$lang->code}}]" type="text" class="form-control"
                                                                       value="{{ old('meta_title'.$lang->code) }}">
                                                                @if($errors->has('meta_title'.$lang->code))
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $errors->first('meta_title'.$lang->code) }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-6">
                                                                <label class="form-label" for="exampleInputEmail1">
                                                                    Meta Description </label>
                                                                <input required name="meta_description[{{$lang->code}}]" type="text" class="form-control"
                                                                       value="{{ old('meta_description'.$lang->code) }}">
                                                                @if($errors->has('meta_description'.$lang->code))
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $errors->first('meta_description'.$lang->code) }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection


@section('scripts')
    <script>
        var $j = jQuery.noConflict();
        $j(document).ready(function () {
            $j('#languageTabs a').click(function (e) {
                e.preventDefault();
                $j(this).tab('show');
            });
        });

        $(document).ready(function () {
            // Add an event listener to update the hidden input's value when the switch is toggled
            $("#statusCheckbox").on("change", function () {
                if ($(this).prop("checked")) {
                    $("#status_hidden").val('active');
                } else {
                    $("#status_hidden").val('inactive');
                }
            });
        });
    </script>

@endsection

