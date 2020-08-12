@extends('layouts.public.app')
@section('title',__('site.Register'))
@section('content')




      <div class="card-body px-lg-5 pt-0 py-4">
        <h5 class="card-header darken-1 text-info text-center py-4 mb-4 ">
            <strong>@lang('site.logtext')</strong>
        </h5>

        <div class="col-xl-7 col-md-12 col-lg-12 col-sm-12 m-auto">

            <form class="border border-light z-depth-5 p-3" style="color: #757575;" action="{{ route('register') }}"  method="post">
                @csrf

                <h5 class="card-header darken-1 text-info text-center py-4">
                    <strong>@lang('site.register')</strong>
                    <i class="fas fa-registered"></i>

                </h5>


                <div class="md-form">
                    <i class="fas fa-id-card prefix"></i>
                    <input type="text" id="inputIconEx1" class="form-control @error('bank_id') is-invalid @enderror" value="{{ old('bank_id') }}" name="bank_id" autocomplete="off">
                    <label for="inputIconEx1">@lang('site.bank_id')</label>
                  </div>

                  <div class="md-form">
                    <i class="far fa-id-card prefix "></i>
                    <input type="text" id="inputIconEx1" class="form-control @error('id_number') is-invalid @enderror" value="{{ old('id_number') }}" name="id_number" autocomplete="off">
                    <label for="inputIconEx1">@lang('site.id_number')</label>
                  </div>

                  @if(session()->has('msg'))
                  <div class="alert alert-danger container" role="alert">
                      {{ session()->get('msg') }}
                  </div>
                 @endif

                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" id="inputIconEx2" class="form-control @error('user_name') is-invalid @enderror" value="{{ old('user_name') }}" name="user_name" autocomplete="off">
                    <label for="inputIconEx2">@lang('site.user_name')</label>
                </div>

                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" id="inputIconEx1" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" autocomplete="off">
                    <label for="inputIconEx1">@lang('site.name')</label>
                  </div>

                <div class="md-form">
                    <i class="fas fa-envelope prefix"></i>
                    <input type="text" id="inputIconEx2" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" autocomplete="off">
                    <label for="inputIconEx2">@lang('site.email')</label>
                </div>

                <div class="md-form">
                    <i class="fas fa-user-lock prefix"></i>
                    <input type="password" id="inputIconEx1" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                    <label for="inputIconEx1">@lang('site.password')</label>
                  </div>

                <div class="md-form">
                    <i class="fas fa-user-lock prefix"></i>
                    <input type="password" id="inputIconEx2" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                    <label for="inputIconEx2">@lang('site.password_confirmation')</label>
                </div>

                <div class="md-form">
                    <i class="fas fa-phone-alt prefix"></i>
                   <input type="text" id="inputIconEx1" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone" autocomplete="off">
                    <label for="inputIconEx1">@lang('site.Phone')</label>
                </div>

                <div class="md-form">
                    <i class="fas fa-city prefix"></i>
                    <input type="text" id="inputValidationEx2" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}" name="city" autocomplete="off">
                    <label for="inputValidationEx2" data-error="wrong">@lang('site.city')</label>
                </div>

                <div class="md-form">
                        <div class="form-check form-check-inline mr-2">
                        <input type="radio" class="form-check-input" value="0"  name="gender">
                        <i class="fas fa-male mr-2"></i>
                        </div>

                        <div class="form-check form-check-inline mr-5">
                        <input type="radio" class="form-check-input" value="1"  name="gender">
                        <i class="fas fa-female mr-2"></i>
                        </div>
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
                    <button class="form-control light-blue darken-1 mt-2">@lang('site.register')</button>
                </div>

            </form>

        </div>
      </div>



@endsection
