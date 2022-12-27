@extends('layouts.master')

@section('content')
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Register</h2>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container">
        <section class="registration-area my-5" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">{{__('Register Account')}}</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{url('/register')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="name">{{ __('Name') }}</label>
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control {{$errors->has('name')? 'is-invalid': ''}}">

                                        @if($errors->has('name'))
                                            <span class="invalid-feedback">
                                            <strong>{{$errors->first('name')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="email">{{ __('Email') }}</label>
                                        <input type="email" name="email" value="{{old('email')}}" class="form-control {{$errors->has('email')? 'is-invalid': ''}}">

                                        @if($errors->has('email'))
                                            <span class="invalid-feedback">
                                            <strong>{{$errors->first('email')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input type="password" name="password" class="form-control {{$errors->has('password')? 'is-invalid': ''}}">
                                        @if($errors->has('password'))
                                            <span class="invalid-feedback">
                                            <strong>{{$errors->first('password')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm password">{{ __('Confirm Password') }}</label>
                                        <input type="password" name="password_confirmation" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block btn-md mt-3" style="float:right;">{{ __('Register') }}</button>
                                    </div>
                                </form>
                                <small>{{ __('Already have an account') }}? <a href="{{url('login')}}">{{ __('Login here') }}</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
