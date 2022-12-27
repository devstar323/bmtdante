@extends('layouts.admin-master')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Donation by user</h1>
        <div class="my-2 px-1">
            <div class="row">  
                <div class="col-6">
                </div>
                <div class="col-6 text-right">

                </div>
            </div>
        </div>

    {{--Flash Message--}}
    @include('layouts.includes.flash-message')

    <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <span class="m-0 font-weight-bold text-primary">Donation list</span>
            </div>
            <div class="card-body">
                @if($donations->count())
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Action</th>
                                <th>id</th>
                                <th>User</th>
                                <th>Aspect</th>
                                <th>Donation</th>
                                <th>Created at</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Action</th>
                                <th>id</th>
                                <th>User</th>
                                <th>Aspect</th>
                                <th>Donation</th>
                                <th>Created at</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($donations as $donation)
                                <tr>
                                    <td>
                                        {!! Form::open(['method'=>'DELETE', 'route'=> ['donations.destroy', $donation->id]]) !!}
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-times"></i></button>
                                        {!! Form::close() !!}
                                    </td>
                                    <td>{{$donation->id}}</td>
                                    <td>{{$donation->user->name}}</td>
                                    <td>{{$donation->aspect->title}}</td>
                                    <td>{{$donation->body}} $</td>
                                    <td>{{$donation->created_at->diffForHumans()}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>

    </div>
@endsection
