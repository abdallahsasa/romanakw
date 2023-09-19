@extends('dashboard.layouts.app')
@section('style')
    <style>
        /* Apply hover effects when hovering over the image */
        .hoverable:hover {
            cursor: pointer;
            opacity: 0.7; /* Adjust the opacity value for the desired fade effect */
        }
        .img-fluid {
            max-width: 150px; /* Set your desired fixed width here */
            max-height: 150px; /* Set your desired fixed height here */
        }
        .img-fluid-gallery {
            max-width: 70px; /* Set your desired fixed width here */
            max-height: 70px; /* Set your desired fixed height here */
        }
        .scrollable-div {
            max-height: 450px; /* Adjust the desired maximum height */
            overflow-y: auto;
        }

    </style>

@endsection


@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Edit {{$product->name}}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="{{url('/dashboard/index')}}" class="default-color">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{route('dashboard.products.index')}}" class="default-color">Books</a>
                    </li>
                    <li class="breadcrumb-item active ps-0">{{$product->name}}</li>
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
                    <form action="{{route('dashboard.product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-9 mb-30">
                                <div class="card card-statistics h-100">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="name">Book Name</label>
                                            <input required name="name" type="text" class="form-control"
                                                   value=" {{old('name',$product->name)}}" id="name"
                                                   placeholder="Enter Book Name">
                                            @if($errors->has('name'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                            <div id="nameError" class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="slug">Slug</label>
                                            <input required name="slug" type="text" class="form-control"
                                                   value="{{old('slug',$product->slug)}}" id="slug"
                                                   placeholder="Enter Book slug">
                                            @if($errors->has('slug'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('slug') }}
                                                </div>
                                            @endif
                                            <div id="slugError" class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="sku">Book Sku</label>
                                            <input required name="sku" type="text" class="form-control"
                                                   value=" {{old('sku',$product->sku)}}" id="sku"
                                                   placeholder="Ex.. Book-01">
                                            @if($errors->has('sku'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('sku') }}
                                                </div>
                                            @endif
                                            <div id="skuError" class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="short_description">Book Short
                                                Description</label>
                                            <textarea name="short_description" class="form-control"
                                                      id="short_description"
                                                      rows="2"> {{old('short_description',$product->short_description)}}</textarea>
                                            @if($errors->has('short_description'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('short_description') }}
                                                </div>
                                            @endif
                                            <div id="short_descriptionError" class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="description">Book Description</label>
                                            <textarea id="summernote" name="description" class="form-control"
                                                      id="description"
                                                      rows="2"> {{old('description',$product->description)}}</textarea>
                                            @if($errors->has('description'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('description') }}
                                                </div>
                                            @endif
                                            <div id="descriptionError" class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3 ">
                                            <h4 class="form-label">Book Attributes</h4>

                                            <div class="repeater-add scrollable-div">
                                                <div data-repeater-list="attributes">
                                                    @foreach($product->attributes as $attribute)
                                                        <div data-repeater-item="">
                                                            <div class="row mb-20">
                                                                <div class="row mb-3 attribute-row">
                                                                    <div class="col-md-5">
                                                                        <input type="text" name="attributes[][name]"
                                                                               value="{{$attribute->name}} {{old('attributes.*.name')}}"
                                                                               class="form-control attribute-name"
                                                                               placeholder="Attribute name">
                                                                        @if($errors->has('attributes.*.name'))
                                                                            <div class="alert alert-danger" role="alert">
                                                                                {{ $errors->first('attributes.*.name') }}
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <input type="text" name="attributes[][value]"
                                                                               value="{{$attribute->value}} {{old('attributes.*.value')}}"
                                                                               class="form-control attribute-value"
                                                                               placeholder="Attribute Value">
                                                                        @if($errors->has('attributes.*.value'))
                                                                            <div class="alert alert-danger" role="alert">
                                                                                {{ $errors->first('attributes.*.value') }}
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <button class="btn btn-danger remove-attribute-btn"
                                                                                data-repeater-delete="" type="button"> Remove
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="form-group clearfix mb-20">
                                                    <input class="btn btn-primary" data-repeater-create="" type="button"
                                                           value="Add Attribute">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-30">
                                <div class="card card-statistics h-30">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="category_id">Category Name</label>
                                            <select required name="category_id" class="form-select form-select-lg mb-3"
                                                    id="category_id">
                                                <option selected disabled>Category</option>
                                                @foreach($categories as $category)
                                                    <option value=" {{old("category_id",$category->id)}}"
                                                            @if($category->id == $product->category_id) selected @endif>{{ $category->name }}
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

                                        <div class="mb-3">
                                            <label class="form-label" for="authors_ids">Author Name</label>

                                            <select  required name="authors_ids[]" class="choices-multiple-remove-button form-select form-select-lg" multiple >

                                                @foreach($authors as $author)
                                                    <option
                                                        value="{{ $author->id }}" {{ in_array($author->id, $selectedAuthorIds) ? 'selected' : '' }}>

                                                    {{$author->first_name}} {{$author->middle_name}} {{$author->last_name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('authors_ids'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('authors_ids') }}
                                                </div>
                                            @endif
                                            <div id="authorError" class="invalid-feedback"></div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="auditors_ids">Auditor Name</label>
                                            <select  name="auditors_ids[]" class="choices-multiple-remove-button form-select form-select-lg mb-3"   multiple>

                                                @foreach($auditors as $auditor)
                                                    <option
                                                        value="{{ $auditor->id }}" {{ in_array($auditor->id, $selectedAuditorIds) ? 'selected' : '' }}>
                                                        {{$auditor->first_name}} {{$auditor->middle_name}} {{$auditor->last_name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('auditors_ids'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('auditors_ids') }}
                                                </div>
                                            @endif
                                            <div id="auditorError" class="invalid-feedback"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <h5 class="card-title">Book State</h5>
                                        <div class="form-group mb-3">
                                            <div class="checkbox checbox-switch switch-success">
                                                <label>
                                                    <input type="checkbox" name="status_checkbox" id="status" value="{{old('status',$product->status)}} ">
                                                    <span></span>
                                                    Active/Inactive
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Hidden input field to store the actual status value -->
                                        <input type="hidden" name="status" id="status_hidden" value="{{old('status',$product->status)}} ">
                                    </div>
                                </div>

                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <h5 class="card-title">Featured Book</h5>
                                        <div class="form-group mb-3">
                                            <div class="checkbox checbox-switch switch-success">
                                                <label>
                                                    <input type="checkbox"  id="featuredBook" checked="" value="{{old('featured',$product->featured)}} ">
                                                    <span></span>
                                                    Yes/No
                                                </label>
                                                @if($errors->has('featured'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('featured') }}
                                                    </div>
                                                @endif
                                                <!-- Hidden input field to store the actual status value -->
                                                <input type="hidden" name="featured" id="featured_hidden" value="{{old('featured',$product->featured)}} ">
                                                <div id="featuredError" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-statistics h-10">
                                    <div class="card-body datepicker-form">
                                        <h5 class="card-title">Created At</h5>
                                        <div class="input-group date display-years" data-date-format="dd-mm-yyyy" data-date="{{$product->created_at}}">
                                            <input  id="datepicker-input" value="{{$product->created_at}}" class="form-control" type="text" placeholder="{{$product->created_at}}">
                                            <input type="hidden" name="created_at" id="created_at_hidden" value="{{$product->created_at}}">

                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label d-block" for="image">Book Image</label>

                                            <label for="new-image">
                                                @foreach($product->media as $img)
                                                    @if($img->is_featured=='true')
                                                    <img src="{{$img->image_url}}" alt="{{$img->image_name,$img->id}}" class="img-fluid-gallery m-1">
                                                        <meta name="csrf-token" content="{{ csrf_token() }}">
                                                        <button type="button" onclick="confirm('Are you sure you want to delete this image : {{$img->image_name}} ?') " class="deleteRecord btn btn-danger" data-id="{{ $img->id }}" ><i class=" fa fa-trash"></i></button>
                                                    @endif
                                                @endforeach                                            </label>
                                            <div class="row">
                                                <input type="file"  name="image" id="new-image" class="form-control">

                                            </div>
                                                @if($errors->has('image'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('image') }}
                                                </div>
                                            @endif
                                            <div id="imageError" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label d-block" for="gallery">Book Gallery</label>
                                            <div id="imageContainer">
                                                @foreach($product->media as $img)
                                                    @if($img->is_featured =='false')
                                                        <img src="{{$img->image_url}}" alt="{{$img->image_name}}" class="img-fluid-gallery m-1">
                                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                                    <button type="button" onclick="confirm('Are you sure you want to delete this image : {{$img->image_name}} ?') " class="deleteRecord btn btn-danger" data-id="{{ $img->id }}" ><i class=" fa fa-trash"></i></button>
                                                    @endif
                                                @endforeach
                                            </div>

                                            <input name="gallery[]" type="file"  class="form-control" id="gallery" multiple>
                                            @if($errors->has('gallery'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('gallery') }}
                                                </div>
                                            @endif
                                            <div id="galleryError" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics h-20">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="meta_title">Meta Title</label>
                                            <input name="meta_title" type="text" class="form-control"
                                                   value=" {{old('meta_title',$product->meta_title)}}"
                                                   id="meta_title"
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
                                                      rows="2">  {{old('meta_description',$product->meta_description)}}</textarea>
                                            @if($errors->has('meta_description'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('meta_description') }}
                                                </div>
                                            @endif
                                            <div id="metaDescriptionError" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="product_tags">Book Tags</label>
                                            <div class="tag-input">
                                                <input type="text" name="product_tags" class="form-control"
                                                       value=" {{ old('product_tags',$tags = implode(';', $product->tags->pluck('tag')->toArray()))}}"
                                                       id="product_tags"
                                                       placeholder="Product Tags"/>
                                            </div>
                                            @if ($errors->has('product_tags'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('product_tags') }}
                                                </div>
                                            @endif
                                            <div id="productTagsError" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <button id="submitBtn" type="submit" class="btn btn-warning">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')

    <script>
        element = document.getElementById('product_tags');
        tags = new Tagify(element, {
            delimiters: ';'
        });

    </script>

    <script>
        function updateImage() {
            // Get the selected file from the input element
            const inputElement = document.getElementById("new-image");
            const selectedFile = inputElement.files[0];

            if (selectedFile) {
                // Create a FileReader to read the selected file
                const reader = new FileReader();

                // When the FileReader finishes loading the file, update the image tag
                reader.onload = function (event) {
                    const imageTag = document.getElementById("image");
                    imageTag.src = event.target.result;
                };

                // Read the selected file as a data URL
                reader.readAsDataURL(selectedFile);
            }
        }
    </script>

    <script>
        document.getElementById('gallery').addEventListener('change', async (e) => {
            // Get the container that wraps the existing images
            const imageContainer = document.getElementById('imageContainer');

            // Clear the existing images
            imageContainer.innerHTML = '';

            // Loop through the selected files and display them as new images
            const files = await e.target.files;
            for (const file of files) {
                const img = document.createElement('img');
                img.src = await URL.createObjectURL(file);
                img.alt = file.name;
                img.classList.add('img-fluid-gallery');
                imageContainer.appendChild(img);
            }
        });
    </script>
    <script>
        $(".deleteRecord").click(function(){
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");

            $.ajax(
                {
                    url: "http://127.0.0.1:8000/dashboard/products/media/delete/"+id,
                    type: 'DELETE',
                    data: {
                        "id": id,
                        "_token": token,
                    },
                    success: function (){
                        console.log("Image with ID: "+ id +" Deleted ");
                    }
                });

        })
    </script>
    <script>
        $(document).ready(function () {

        // Fetch the product state from the server and store it in a variable (e.g., productState)
        var productState = "{{$product->status}}"; // Replace this with your dynamic value from the server
        // Set the checkbox state based on the product state
        if (productState === "active") {
            $("#status").prop("checked", true);
        } else {
            $("#status").prop("checked", false);
        }

            $(document).ready(function() {
                // Add an event listener to update the checkbox value when the switch is toggled
                $("#status").on("change", function () {
                    if ($(this).prop("checked")) {
                        $(this).val("active");
                    } else {
                        $(this).val("inactive");
                    }
                });
            });

            // Add an event listener to update the hidden input's value when the switch is toggled
            $("#status").on("change", function () {

                if ($(this).prop("checked")) {
                    $("#status_hidden").val("active");
                } else {
                    $("#status_hidden").val("inactive");
                }
            });



            var featuredBook = "{{$product->featured}}"; // Replace this with your dynamic value from the server
            // Set the checkbox state based on the product state
            if (featuredBook == 1) {
                $("#featuredBook").prop("checked", 1);
            } else {
                $("#featuredBook").prop("checked", 0);
            }

            $("#featuredBook").on("change", function () {
                if ($(this).prop("checked")) {
                    $('#featured_hidden').val(1);
                } else {
                    $('#featured_hidden').val(0);
                }
            });
        });


    </script>

    <script>
        $(document).ready(function () {
            // Assuming $product->created_at is a valid date string from the database
            var formattedDateTime = "{{$product->created_at}}";

            $('#datepicker-input').datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
                orientation: "bottom",
                templates: {
                    leftArrow: '<i class="fa fa-angle-left"></i>',
                    rightArrow: '<i class="fa fa-angle-right"></i>'
                }
            }).on('change', function (e) {
                // Update the input value when the datepicker date changes
                var selectedDate = $('#datepicker-input').val();
                console.log(selectedDate)
                $('#created_at_hidden').val(selectedDate);
            });
        });
    </script>



@endsection


