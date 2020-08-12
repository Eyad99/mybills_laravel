@extends('layouts.public.app')
@section('title',__('site.New_Password'))
@section('content')



<div class="card-body px-lg-5 pt-0 py-4 mt-5">

    <div class="col-xl-6 col-md-6 col-sm-12 m-auto">

        <form class="border border-light z-depth-5 p-3" style="color: #757575;" action="{{ route('setNewPassword',$user->id) }}"  method="post">
            @csrf

            <h5 class="card-header darken-1 text-info text-center py-4">
                <strong>@lang('site.Reset_password')</strong>
                <i class="fas fa-question-circle"></i>
            </h5>

            <div class="md-form md-outline">
                <i class="fas fa-unlock-alt prefix"></i>
                <input type="password" id="inputIconEx1"  name="password" autocomplete="new-password" class="form-control">
                <label for="inputIconEx1">@lang('site.password')</label>
            </div>
           
            <div class="md-form md-outline">
                <i class="fas fa-unlock-alt prefix"></i>
                <input type="password" id="inputIconEx2"  name="password_confirmation" autocomplete="new-password" class="form-control">
                <label for="inputIconEx2">@lang('site.password_confirmation')</label>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="md-form">
                <button class="form-control light-blue darken-1 mt-2 btn-submit">@lang('site.Reset')</button>
            </div>

        </form>

    </div>
  </div>


@endsection



