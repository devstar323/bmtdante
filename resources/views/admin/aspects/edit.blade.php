@extends('layouts.admin-master')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit aspect</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <span class="mr-3"><a href="{{route('aspects.index')}}" cl><i class="fas fa-long-arrow-alt-left"></i> Back</a></span>
                <span class="m-0 font-weight-bold text-primary">Aspect edit form</span>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="display-img text-center p-4">
                        <img src="{{$aspect->image? $aspect->image_url:$aspect->default_img}}" alt="">
                    </div>
                    <video width="100%" height="240" controls style="padding-left: 5%; padding-right:5%;">
                        @if($aspect->video_id != null)
                        <source src="{{ route('getVideo', $aspect->video_id)  }}" type="video/mp4">
                        @endif
                    </video>
                </div>
                <div class="col-lg-9">
                    <div class="card-body">
                        {!! Form::model($aspect, ['method'=>'PATCH', 'action'=>['Admin\AdminAspectsController@update', $aspect->id], 'files'=>true]) !!}

                        <div class="form-group">
                            {!! Form::label('title') !!}
                            {!! Form::text('title', null, ['class'=>'form-control '.($errors->has('title')? 'is-invalid': '')]) !!}
                            @if($errors->has('title'))
                                <span class="invalid-feedback">
                            <strong>{{$errors->first('title')}}</strong>
                        </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('slug') !!}
                            {!! Form::text('slug', null, ['class'=>'form-control '.($errors->has('slug')? 'is-invalid': '')]) !!}
                            @if($errors->has('slug'))
                                <span class="invalid-feedback">
                            <strong>{{$errors->first('slug')}}</strong>
                        </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('description') !!}
                            {!! Form::textarea('description', null, ['class'=>'form-control '.($errors->has('description')? 'is-invalid': ''), 'rows'=>10]) !!}
                            @if($errors->has('description'))
                                <span class="invalid-feedback">
                            <strong>{{$errors->first('description')}}</strong>
                        </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('image_id', 'Aspect Image') !!}
                            {!! Form::file('image_id', ['class'=>'form-control '.($errors->has('image_id')? 'is-invalid': '')]) !!}
                            <small>Max size 1MB</small>
                            @if($errors->has('image_id'))
                                <span class="invalid-feedback">
                            <strong>{{$errors->first('image_id')}}</strong>
                        </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('video_id', 'Aspect Video') !!}
                            {!! Form::file('video_id', ['class'=>'form-control '.($errors->has('video_id')? 'is-invalid': '')]) !!}
                            @if($errors->has('video_id'))
                                <span class="invalid-feedback">
                            <strong>{{$errors->first('video_id')}}</strong>
                        </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Update', ['class'=>'btn btn-warning']) !!}
                            {!! Form::reset('Reset', ['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('script')
    <script type="text/javascript">
        /*
         making slug automatically
        */
        $('#name').on('blur', function() {
            var theTitle = this.value.toLowerCase().trim(),
                slugInput = $('#slug');
            theSlug = theTitle.replace(/&/g, '-and-')
                .replace(/[^a-z$0-9-]+/g, '-')
                .replace(/\-\-+/g, '-')
                .replace(/^-+|-+$/g, '')

            slugInput.val(theSlug);
        });
    </script>
@endsection
