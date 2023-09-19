@extends('dashboard.layouts.app')
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Messages Subjects</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Requested Messages</li>
                </ol>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-8 mb-30">
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
                            <tr class="text-dark">
                                <th>#</th>
                                <th>Subject</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subjects as $subject)
                                <tr>
                                    <td>{{$subject->id}}</td>
                                    <td>{{$subject->subject}}</td>
                                    <td>
                                        <div class="row justify-content-center">
                                            <a class="pe-2 w-auto">
                                                <form method="POST" action="{{route('dashboard.contact-us.destroy',$subject->id)}}">

                                                    @csrf
                                                    @method('DELETE')
                                                    <button  class="btn-danger btn  fa fa-trash-o" onclick="return confirm('Are you sure you want to delete this {{$subject->name}} ')">
                                                    </button>
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
        <div class="col-md-4 mb-30">
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <form method="POST" action="{{route('dashboard.contact-us.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="subject">Message Subject</label>
                            <input required type="text" class="form-control" name="subject" id="subject">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
