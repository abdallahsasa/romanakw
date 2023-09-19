@extends('dashboard.layouts.app')
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> Edit {{$category->name}} Category</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="/backoffice/dashboard" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active ps-0">{{$category->name}}</li>
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
                    <form method="POST" action="{{route('dashboard.categories.update',$category->id)}}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-30">
                                <div class="card card-statistics h-100">
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label class="form-label" for="parent_id">Parent Name</label>
                                            <select name="parent_id" class="form-select form-select-lg mb-3" id="parent_id">
                                                <option value="">Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" {{ old('parent_id', $category->id) == $category->id || (is_null(old('parent_id')) && is_null($category->parent_id)) ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @if($errors->has('parent_id'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('parent_id') }}
                                                </div>
                                            @endif
                                            <div id="categoryError" class="invalid-feedback"></div>
                                        </div>





                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputEmail1">Category Name</label>
                                            <input required name="name" type="text" class="form-control"
                                                   aria-describedby="emailHelp"
                                                   placeholder="Ex.. Fresh juice " value="{{$category->name}}">
                                            @if($errors->has('name'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlTextarea1">Category
                                                Description</label>
                                            <textarea name="description" class="form-control" id="description"
                                                      id="exampleFormControlTextarea1"
                                                      rows="3">{{$category->description}}</textarea>
                                            @if($errors->has('description'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('description') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label d-block" for="exampleFormControlFile1">Category
                                                Image</label>
                                            <img width="15%" src="{{$category->image_url}}"
                                                 class="form-label d-block w-10" for="exampleFormControlFile1" alt="">
                                            <input name="image" type="file" class="form-control" id="customFile"
                                                   value="{{$category->image_url}}">
                                            @if($errors->has('image'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('image') }}
                                                </div>
                                            @endif
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
