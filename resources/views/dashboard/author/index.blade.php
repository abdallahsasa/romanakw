@extends('dashboard.layouts.app')
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> All Authors</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="/backoffice" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active ps-0">All Authors</li>
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
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table-bordered border table table-striped dataTable p-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Featured</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($authors as $author)
                                <tr>
                                    <td><img class="img-fluid mr-15 avatar-small" src="{{$author->image_url}}" alt="{{$author->image_name}}"> </td>
                                    <td>{{$author->first_name }} {{$author->middle_name }} {{$author->last_name}}</td>
                                    <td> <span class="@if($author->status == 'active')text-success @else text-danger @endif ">{{$author->status}} </span> </td>

                                    <td> <span class="@if($author->featured == '1')text-success @else text-danger @endif "> @if($author->featured == 1) Yes @else  No @endif  </span> </td>

                                    <td>
                                        <div class="row justify-content-center w-auto">
                                            <a class="pe-2  w-auto" href="{{route('dashboard.author.edit',$author->id)}}">
                                                <button class="btn btn-warning fa fa-pencil"></button>
                                            </a>
                                            <a class="pe-2  w-auto">
                                            <form method="POST"
                                                  action="{{route('dashboard.author.destroy',$author->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button  class="btn-danger btn  fa fa-trash-o"
                                                        onclick="return confirm('Are you sure you want to delete this {{$author->name}} ')">
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
