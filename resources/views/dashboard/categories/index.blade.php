@extends('dashboard.layouts.app')
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> All Categories</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="/backoffice" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active ps-0">All Categories</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table-bordered border table table-striped dataTable p-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->sort_number}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>
                                <td><span
                                            class="@if($category->status == 'active')text-success @else text-danger @endif ">{{$category->status}} </span>
                                </td>
                                <td>
                                    <div class="row justify-content-center">
                                        <a class="pe-2 w-auto" href="{{route('dashboard.categories.edit',$category->id)}}"> <i class="btn btn-warning fa fa-pencil"></i></a>
                                        <a class="pe-2 w-auto">
                                        <form method="POST" action="{{route('dashboard.categories.destroy',$category->id)}}">

                                            @csrf
                                            @method('DELETE')
                                            <button  class="btn-danger btn  fa fa-trash-o" onclick="return confirm('Are you sure you want to delete this {{$category->name}} ')">
                                            </button>
                                        </form>
                                        </a>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
