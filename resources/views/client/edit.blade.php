@extends('layouts/client/app')
@section('title',__('site.Profile_Settings'))
@section('content')


<!-- Default form eidi -->
            <div class="card-body px-lg-5 pt-0 py-4">

                <h5 class="card-header light-blue darken-1 white-text text-center py-4">
                    <strong>@lang('site.seetinguser')</strong>
                    <i class="fas fa-user-cog"></i>
                </h5>
                <!-- Form -->
           
                <form class="border border-light z-depth-5 p-5" style="color: #757575;" action="{{route('Client.update',$Client->id)}}" method="post">
                        @csrf()
                        @method("PUT")


                    <div class="md-form">
                        <i class="fas fa-user prefix"></i>
                        <input type="text" id="inputIconEx1" class="form-control @error('user_name') is-invalid @enderror" value="{{$Client->user_name}}"  name="user_name">
                        <label for="inputIconEx1">@lang('site.user_name')</label>
                          @error('user_name')
                            <div class=" alert-sm alert-danger mt-1">
                                {{$message}}
                            </div>
                         @enderror()
                    </div>

                    <div class="md-form">
                        <i class="fas fa-envelope prefix"></i>
                        <input type="text" id="inputIconEx1" class="form-control @error('email') is-invalid @enderror" value="{{$Client->email}}"  name="email">
                        <label for="inputIconEx1">@lang('site.email')</label>
                          @error('email')
                            <div class=" alert-sm alert-danger mt-1">
                                {{$message}}
                            </div>
                         @enderror()
                    </div>


                    <div class="md-form">
                        <i class="fas fa-unlock-alt prefix"></i>
                        <input type="password" id="inputIconEx2" class="form-control @error('current_password') is-invalid @enderror" name="current_password" autocomplete="off" >
                        <label for="inputIconEx2">@lang('site.current_password')</label>
                         @error('current_password')
                            <div class=" alert-sm alert-danger mt-1">
                                {{$message}}
                            </div>
                         @enderror()
                        @isset($msg_result_check_pass)
                            <div class="alert-sm alert-info mt-1">
                                {{ $msg_result_check_pass }}
                            </div>
                        @endisset()
                      </div>

                    <div class="md-form">
                        <i class="fas fa-user-lock prefix"></i>
                        <input type="password" id="inputIconEx3" class="form-control @error('password') is-invalid @enderror" name="password" >
                        <label for="inputIconEx3">@lang('site.password')</label>
                         @error('password')
                            <div class=" alert-sm alert-danger mt-1">
                                {{$message}}
                            </div>
                         @enderror()
                         
                    </div>

                    <div class="md-form">
                        <i class="fas fa-user-lock prefix"></i>
                        <input type="password" id="inputIconEx4" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" >
                        <label for="inputIconEx4">@lang('site.password_confirmation')</label>
                    </div>

                   

                    <div class="md-form">
                        <input type="submit" class="btn btn-info" value="@lang('site.save')" </input>

                     </div>

                </form>
                <!-- Form -->
            </div>
<!-- Default form edit -->


@endsection









