@extends('layouts.public.app')
@section('title',__('site.Login'))
@section('content')

  <div class="card-body px-lg-5 pt-0 py-4">
    <h5 class="card-header darken-1 text-info text-center py-4 mb-4 ">
    <i class="fab fa-angellist"></i> <strong>@lang('site.logtext')</strong> <i class="fab fa-angellist"></i>
    </h5>

    <div class="col-xl-6 col-md-6 col-sm-12 m-auto">

        <form class="border border-light z-depth-5 p-3" style="color: #757575;" action="{{route('login')}}"  method="post">
            @csrf

            <h5 class="card-header darken-1 text-info text-center py-4">
                <strong>@lang('site.login')</strong>
            </h5>

            <div class="md-form md-outline">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="inputIconEx1"  name="email" autocomplete="off" class="form-control @error('email') is-invalid @enderror">
                <label for="inputIconEx1">@lang('site.email')</label>
            </div>
            @error('email')
            <div class="text-danger">{{$message}}</div>
            @enderror

            <div class="md-form md-outline">
                <i class="fas fa-key prefix"></i>
                <input type="password" id="inputIconEx2"  name="password" autocomplete="new-password" class="form-control @error('password') is-invalid @enderror">
                <label for="inputIconEx">@lang('site.password')</label>
            </div>
            @error('password')
            <div class="text-danger">{{$message}}</div>
            @enderror

            <div class="md-form">
                <a href="{{route('showResetPasswordForm')}}">@lang('site.Forgot_password')?</a>
                <button class="form-control light-blue darken-1 mt-2">@lang('site.login')</button>
            </div>

        </form>

    </div>
  </div>



@endsection










