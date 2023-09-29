@extends('dashboard.layouts.app')


@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Add New Post</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="/backoffice/dashboard/index" class="default-color">Home</a>
                    </li>
                    <li class="breadcrumb-item active ps-0">Add New Post</li>
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
            @if ($message = \Session::get('errors'))
                <div class="alert alert-danger alert-block">
                    @foreach($message->all() as $error)
                        <strong>{{ $error }}</strong><br>
                    @endforeach
                </div>
            @endif
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <form action="{{ route('dashboard.posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-30">
                                <div class="card card-statistics h-100">
                                    <div class="card-body row">
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Featured </label>
                                            <div class="form-group mb-3">
                                                <div class="checkbox checbox-switch switch-success">
                                                    <label>
                                                        <input name="featured" type="checkbox" id="featuredPost"
                                                               checked="" value="1">
                                                        <span></span>
                                                        Yes/No
                                                    </label>
                                                    <!-- Hidden input field to store the actual status value -->
                                                    <input type="hidden" name="featured" id="featured_hidden" value="1">
                                                    @if($errors->has('featured'))
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ $errors->first('featured') }}
                                                        </div>
                                                    @endif
                                                    <div id="featuredError" class="invalid-feedback"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label class="form-label" for="title">Title</label>
                                            <input required name="title" type="text" class="form-control"
                                                   value="{{old('title')}}" id="name" placeholder="Enter Post Name">
                                            @if($errors->has('title'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('title') }}
                                                </div>
                                            @endif
                                            <div id="nameError" class="invalid-feedback"></div>
                                        </div>

                                        <div class="mb-3 col-6">
                                            <label class="form-label" for="slug">Slug</label>
                                            <input name="slug" type="text" class="form-control"
                                                   value="{{old('slug')}}" id="slug" placeholder="Enter Post slug">
                                            @if($errors->has('slug'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('slug') }}
                                                </div>
                                            @endif
                                            <div id="slugError" class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <div class="mb-3">
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
                                        </div>
                                        <div class="mb-3 col-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="meta_description">Meta
                                                    Description</label>
                                                <textarea name="meta_description" class="form-control"
                                                          id="meta_description"
                                                          rows="2"> {{old('meta_description')}}</textarea>
                                                @if($errors->has('meta_description'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('meta_description') }}
                                                    </div>
                                                @endif
                                                <div id="metaDescriptionError" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="category_id">Category Name</label>
                                                <select required name="category_id"
                                                        class="form-select form-select-lg mb-3"
                                                        id="category_id">
                                                    <option selected disabled>Category</option>
                                                    @foreach($categories as $category)
                                                        <option
                                                            value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                            {{$category->name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('category_id'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('category_id') }}
                                                    </div>
                                                @endif
                                                <div id="categoryError" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="category_id">Status</label>
                                                <select required name="status"
                                                        class="form-select form-select-lg mb-3"
                                                        id="status">
                                                    <option selected disabled>Status</option>
                                                    <option  value="published">published</option>
                                                    <option  value="draft">draft</option>
                                                    <option  value="private">private</option>
                                                </select>
                                                @if($errors->has('status'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('status') }}
                                                    </div>
                                                @endif
                                                <div id="status" class="invalid-feedback"></div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="description"> Description</label>
                                            <textarea name="description" class="form-control summernote"
                                                      rows="2">{{old('description')}}</textarea>
                                            @if($errors->has('description'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('description') }}
                                                </div>
                                            @endif
                                            <div id="descriptionError" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="card card-statistics h-70">
                                    <div class="card-body row">
                                        <h5 class="card-title">Post Translations </h5>
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
                                                    <div
                                                        class="tab-pane fade {{ $loop->index === 1 ? 'active show' : '' }} "
                                                        id="{{$lang->name}}Tab">
                                                        <div class="card-body row">
                                                            <div class="mb-3 col-6">
                                                                <label class="form-label" for="exampleInputEmail1">
                                                                    Title </label>
                                                                <input required name="{{$lang->code}}[title]"
                                                                       type="text" class="form-control"
                                                                       value="{{ old('name'.$lang->code) }}">
                                                                @if($errors->has($lang->code.'title'))
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $errors->first($lang->code.'title') }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-6">
                                                                <label class="form-label" for="exampleInputEmail1">
                                                                    Slug </label>
                                                                <input required name="{{$lang->code}}[slug]" type="text"
                                                                       class="form-control"
                                                                       value="{{ old($lang->code.'slug') }}">
                                                                @if($errors->has($lang->code.'slug'))
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $errors->first($lang->code.'slug') }}
                                                                    </div>
                                                                @endif
                                                            </div>

                                                            <div class="mb-3 col-6">
                                                                <label class="form-label" for="exampleInputEmail1">
                                                                    Meta Title </label>
                                                                <input required name="{{$lang->code}}[meta_title]"
                                                                       type="text" class="form-control"
                                                                       value="{{ old($lang->code.'meta_title') }}">
                                                                @if($errors->has($lang->code.'meta_title'))
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $errors->first($lang->code.'meta_title') }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-6">
                                                                <label class="form-label" for="exampleInputEmail1">
                                                                    Meta Description </label>
                                                                <input required name="{{$lang->code}}[meta_description]"
                                                                       type="text" class="form-control"
                                                                       value="{{ old($lang->code.'meta_description') }}">
                                                                @if($errors->has($lang->code.'meta_description'))
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $errors->first($lang->code.'meta_description') }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="description">
                                                                    Description</label>
                                                                <textarea name="{{$lang->code}}[description]"
                                                                          class="form-control summernote"
                                                                          rows="2">{{old($lang->code.'description')}}</textarea>

                                                                @if($errors->has('description'))
                                                                    <div class="alert alert-danger" role="alert">
                                                                        {{ $errors->first(old($lang->code.'description')) }}
                                                                    </div>
                                                                @endif

                                                                <div id="descriptionError"
                                                                     class="invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics h-70">
                                    <div class="card-body row">
                                        <h5 class="card-title">Post Media </h5>
                                        <div class="tab-content">
                                            <div class="card-body row">
                                                <div class="mb-3 col-6">
                                                    <label class="form-label" for="exampleInputEmail1">
                                                        Featured Image </label>
                                                    <input required name="featured_image" type="file"
                                                           class="form-control"
                                                           value="{{ old('featured_image') }}">
                                                    @if($errors->has('featured_image'))
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ $errors->first('featured_image') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="mb-3 col-6">
                                                    <label class="form-label" for="exampleInputEmail1">
                                                        Gallery </label>
                                                    <input required name="gallery[]" multiple type="file"
                                                           class="form-control"
                                                           value="{{ old('gallery') }}">
                                                    @if($errors->has('gallery'))
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ $errors->first('gallery') }}
                                                        </div>
                                                    @endif
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
        var $j = jQuery.noConflict();
        $j(document).ready(function () {
            $j('#languageTabs a').click(function (e) {
                e.preventDefault();
                $j(this).tab('show');
            });
        });
        element = document.getElementById('product_tags');
        tags = new Tagify(element, {
            delimiters: ';'
        });

    </script>
    <script>
        $(document).ready(function () {
            // Add an event listener to update the checkbox value when the switch is toggled
            $("#switchCheckbox").on("change", function () {
                if ($(this).prop("checked")) {
                    $(this).val("active");
                } else {
                    $(this).val("inactive");
                }
            });
        });
    </script>



    <script>
        $(document).ready(function () {
            // Add an event listener to update the hidden input's value when the switch is toggled
            $("#featuredPost").on("change", function () {
                if ($(this).prop("checked")) {
                    $("#featured_hidden").val(1);
                } else {
                    $("#featured_hidden").val(0);
                }
            });
        });
    </script>
@endsection


