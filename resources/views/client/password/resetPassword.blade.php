@extends('layouts.public.app')
@section('title',__('site.Reset_Password'))
@section('content')

<div class="card-body px-lg-5 pt-0 py-4 mt-5">

    <div class="col-xl-6 col-md-6 col-sm-12 m-auto">

        <form class="border border-light z-depth-5 p-3" style="color: #757575;" action="{{ route('searshYourAccount')}}"  method="post">
            @csrf

            <h5 class="card-header darken-1 text-info text-center py-4">
                <strong>@lang('site.Reset_password')</strong>
                <i class="fas fa-question-circle"></i>
            </h5>

            <div class="md-form md-outline">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="inputIconEx1"  name="email" autocomplete="off" class="form-control @error('email') is-invalid @enderror">
                <label for="inputIconEx1">@lang('site.email')</label>
            </div>
            @error('email')
            <div class="alert-danger">{{$message}}</div>
            @enderror


            @if(session()->has('sendEmailToResetPassword'))
                <div class="alert alert-info">
                    {{session()->get('sendEmailToResetPassword')}}
                </div>
             @endif()


            <div class="md-form">

                <button class="btn btn-info "><a class=" form-control-sm ml-3 w-20 btn-submit">@lang('site.searsh')<i class="fas fa-search" aria-hidden="true"></i></a></button>

            </div>
            <button class="form-control light-blue darken-1 mt-2 btn-submit"><a class="text-white" href="{{route('login')}}" >@lang('site.back')</a></button>

        </form>
        

    </div>
  </div>



@endsection


