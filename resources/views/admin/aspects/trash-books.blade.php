@extends('layouts.admin-master')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Trashed Aspects</h1>
        <div class="my-2 px-1">
            <div class="row">
                <div class="col-6">
                    <div>
                        <a href="{{route('aspects.create')}}" class="btn-primary btn-sm">
                            <i class="fas fa-plus-circle mr-1"></i>
                            Add aspect
                        </a>
                    </div>
                </div>
            </div>
        </div>

    @include('layouts.includes.flash-message')
    <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All trashed aspects list</h6>
            </div>
            <div class="card-body">
                @if($aspects->count())
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Action</th>
                                <th>Image</th>
                                <th>Title</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Action</th>
                                <th>Image</th>
                                <th>Title</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($aspects as $aspect)
                                <tr>
                                    <td>
                                    <div class="action d-flex flex-row">
                                        {!! Form::open(['method'=>'PUT', 'route'=>['aspect.restore', $aspect->id]]) !!}
                                            <button type="submit" class="btn btn-sm btn-primary mr-2" title="Restore"><i class="fa fa-undo"></i></button>
                                        {!! Form::close() !!}

                                        {!! Form::open(['method'=>'DELETE', 'route'=>['aspect.forceDelete', $aspect->id]]) !!}
                                            <button type="submit" onclick="return confirm('Aspect will delete to permanently! Are you sure to delete??')" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                        {!! Form::close() !!}
                                    </div>

                                    </td>
                                    <td><img src="{{$aspect->image_url}}" width="60" height="70" alt=""></td>
                                    <td><a href="#">{{$aspect->title}}</a></td>
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
