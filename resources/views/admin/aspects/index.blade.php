@extends('layouts.admin-master')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Aspects to donate</h1>
        <div class="my-2 px-1">
            <div class="row">
                <div class="col-6">
                    <div>
                        <a href="{{route('aspects.create')}}" class="btn-primary btn-sm">
                            <i class="fas fa-plus-circle mr-1"></i>
                            New aspect
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.includes.flash-message')
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Aspects list</h6>
            </div>
            <div class="card-body">
                @if($aspects->count())
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Action</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Slug</th>
                            <th>Description</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Action</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Slug</th>
                            <th>Description</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($aspects as $aspect)
                        <tr>
                            <td>
                                {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminAspectsController@destroy', $aspect->id]]) !!}
                                <div class="action d-flex flex-row">
                                    <a href="{{route('aspects.edit', $aspect->id)}}" class="btn-primary btn btn-sm mr-2"><i class="fas fa-edit"></i></a>

                                    <button type="submit" onclick="return confirm('Aspect will move to trash! Are you sure to delete??')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                                {!! Form::close() !!}
                            </td>
                            <td><a href="{{route('aspects.edit', $aspect->id)}}">{{$aspect->title}}</a></td>
                            <td><img src="{{$aspect->image_url}}" width="60" height="70" alt=""></td>
                            <th>{{$aspect->slug}}</th>
                            <th>{{$aspect->description}}</th>
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
