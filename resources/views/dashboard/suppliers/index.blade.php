@extends('dashboard.layouts.app')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">All Books</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="index.html" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active ps-0">All Books</li>
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
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Country</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($suppliers as $supplier )
                                <tr>

                                    <td>{{$supplier->name}}</td>
                                    <td>{{$supplier->phone}}</td>
                                    <td>{{$supplier->country->name}} </td>
                                    <td><span
                                            class="@if($supplier->status == 'active')text-success @else text-danger @endif ">{{$supplier->status}} </span>
                                    </td>

                                    <td>
                                        <div class="row justify-content-center">
                                            <a class="pe-2 w-auto" href="{{ route('dashboard.supplier.edit', $supplier->id) }}">
                                                <button class="btn btn-warning fa fa-pencil"></button>
                                            </a>
                                            <a class="pe-2 w-auto">
                                                <form method="POST" action="{{ route('dashboard.supplier.destroy', $supplier->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn-danger btn  fa fa-trash-o" onclick="return confirm('Are you sure you want to delete {{$supplier->name}}')"></button>
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

@endpush
