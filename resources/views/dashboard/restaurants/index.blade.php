@extends('dashboard.layouts.app')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">All Restaurants</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="/dashboard/index" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active ps-0">All Restaurants</li>
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
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table-bordered border table table-striped dataTable p-0">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Featured</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($posts as $post )
                                <tr>

                                    <td>{{$post->title}}</td>
                                    <td>{{$post->slug}}</td>
                                    <td><span
                                            class="@if($post->status == 'active')text-success @else text-danger @endif ">{{$post->status}} </span>
                                    </td>
                                    <td> <span class=" @if ($post->featured == '1') text-success @else text-danger @endif "> @if($post->featured == 1) Yes @else No @endif </span></td>
                                    <td>{{$post->category->name}}</td>
                                    <td>
                                        <div class="row justify-content-center">
                                            <a class="pe-2 w-auto" href="{{ route('dashboard.posts.edit', $post->id) }}">
                                                <button class="btn btn-warning fa fa-pencil"></button>
                                            </a>
                                            <a class="pe-2 w-auto">
                                                <form method="POST" action="{{ route('dashboard.posts.destroy', $post->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn-danger btn  fa fa-trash-o" onclick="return confirm('Are you sure you want to delete {{$post->name}}')"></button>
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
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('dashboard.posts.data') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'sku', name: 'sku'},
                    {data: 'name', name: 'name'},
                    {data: 'category_name', name: 'category_name'},
                    {data: 'status', name: 'status'},
                    {data: 'image', name: 'image'},
                    {data: 'action', name: 'action'},
                ]
            });
        });
    </script>
@endpush
