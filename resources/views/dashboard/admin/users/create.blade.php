
@extends('layouts.dashboard.app')
@section('title',__('site.Add_Admin'))
@section('content')

    @if(session()->has('success'))
        <div class="alert alert-info">
            {{session()->get('success')}}
        </div>
    @endif

<!-- Default form Add -->
            <div class="card-body px-lg-5 pt-0 py-4 ">
                <h5 class="card-header light-blue darken-1 white-text text-center py-4">
                    <strong>@lang('site.adduser')</strong>
                    <i class="fas fa-user"></i>

                </h5>
                <!-- Form -->
                <form class="border border-light-5 p-5 " style="color: #757575;" action="{{route('dashboard.user.store')}}"  method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="md-form">
                        <i class="fas fa-id-card prefix"></i>
                        <input type="text" id="inputIconEx1" class="form-control @error('bank_id') is-invalid @enderror" value="{{ old('bank_id') }}" name="bank_id" autocomplete="off">
                        <label for="inputIconEx1">@lang('site.bank_id')</label>
                      </div>

                      <div class="md-form">
                        <i class="far fa-id-card prefix "></i>
                        <input type="text" id="inputIconEx2" class="form-control @error('id_number') is-invalid @enderror" value="{{ old('id_number') }}" name="id_number" autocomplete="off">
                        <label for="inputIconEx2">@lang('site.id_number')</label>
                      </div>

                    <div class="md-form">
                        <i class="fas fa-user prefix"></i>
                        <input type="text" id="inputIconEx3" class="form-control @error('user_name') is-invalid @enderror" value="{{ old('user_name') }}" name="user_name" autocomplete="off">
                        <label for="inputIconEx3">@lang('site.user_name')</label>
                    </div>

                    <div class="md-form">
                        <i class="fas fa-user prefix"></i>
                        <input type="text" id="inputIconEx4" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" autocomplete="off">
                        <label for="inputIconEx4">@lang('site.name')</label>
                      </div>

                    <div class="md-form">
                        <i class="fas fa-envelope prefix"></i>
                        <input type="text" id="inputIconEx5" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" autocomplete="off">
                        <label for="inputIconEx5">@lang('site.email')</label>
                    </div>

                    <div class="md-form">
                        <i class="fas fa-user-lock prefix"></i>
                        <input type="password" id="inputIconEx6" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                        <label for="inputIconEx6">@lang('site.password')</label>
                      </div>

                    <div class="md-form">
                        <i class="fas fa-user-lock prefix"></i>
                        <input type="password" id="inputIconEx7" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                        <label for="inputIconEx7">@lang('site.password_confirmation')</label>
                    </div>

                    <div class="md-form">
                        <i class="fas fa-phone-alt prefix"></i>
                       <input type="text" id="inputIconEx8" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone" autocomplete="off">
                        <label for="inputIconEx8">@lang('site.Phone')</label>
                    </div>

                    <div class="md-form">
                        <i class="fas fa-city prefix"></i>
                        <input type="text" id="inputValidationEx9" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}" name="city" autocomplete="off">
                        <label for="inputValidationEx9" data-error="wrong">@lang('site.city')</label>
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


                     <!--start permissions section-->
                     <?php $models=['users','places','questions'];?>
                     <?php $options=['create','read','update','delete','send'];?>

                    <table class="table table-bordered table-striped ">
                        <thead>
                        <tr>
                            <th class="text-center"><h6 class="text-uppercase font-weight-bold  ">@lang('site.permission')</h6></th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($models as $index=>$model)
                        <tr>
                            <td class="pt-3-half">@lang('site.' . $model)</td>
                        </tr>
                        <tr>
                            <td class="pt-3-half">

                                @foreach($options as $option)
                                    @if ($option=='send' && ($model=='users' || $model=='places'))
                                    <div >&nbsp;</div>
                                    @else
                                    
                                    <input class=" ml-2" type="checkbox" name="permissions[]" value="{{$option}}_{{$model}}">
                                    <label class=" ml-2">@lang('site.'.$option)</label>

                                    @endif

                                @endforeach
                            </td>
                        </tr>

                        @endforeach
                        </tbody>
                    </table>

                    <!-- end permissions section-->

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <button class="form-control light-blue darken-1 mt-2">@lang('site.add')</button>
                </form>
                <!-- Form -->
         </div>
<!-- Default form Add -->


@endsection

