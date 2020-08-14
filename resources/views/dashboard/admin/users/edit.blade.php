@extends('layouts.dashboard.app')
@section('title',__('site.Edit_Admin'))
@section('content')

    @if(session()->has('success'))

        <div class="alert alert-info">
            {{session()->get('success')}}
        </div>
    @endif

<!-- Default form Add -->
            <div class="card-body px-lg-5 pt-0 py-4">

                <h5 class="card-header light-blue darken-1 white-text text-center py-4">
                    <strong>@lang('site.edituser')</strong>
                    <i class="fas fa-user"></i>
                </h5>
                <!-- Form -->
                <form class="border border-light-5 p-5" style="color: #757575;" action="{{route('dashboard.user.update',$user->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="md-form">
                        <i class="fas fa-id-card prefix"></i>
                        <input type="text" id="inputIconEx1" class="form-control @error('bank_id') is-invalid @enderror" value="{{$user->bank_id}}" disabled name="bank_id" >
                        <label for="inputIconEx1">@lang('site.bank_id')</label>
                      </div>

                      <div class="md-form">
                        <i class="far fa-id-card prefix"></i>
                        <input type="text" id="inputIconEx1" class="form-control @error('id_number') is-invalid @enderror" value="{{ $user->id_number }}" disabled name="bank_id" >
                        <label for="inputIconEx1">@lang('site.id_number')</label>
                      </div>

                    <div class="md-form">
                        <i class="fas fa-user prefix"></i>
                        <input type="text" id="inputIconEx2" class="form-control @error('user_name') is-invalid @enderror" value="{{$user->user_name}}"  name="user_name" >
                        <label for="inputIconEx2">@lang('site.user_name')</label>
                    </div>


                    <div class="md-form">
                        <i class="fas fa-user prefix"></i>
                        <input type="text" id="inputIconEx1" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}" name="name" >
                        <label for="inputIconEx1">@lang('site.name')</label>
                      </div>

                    <div class="md-form">
                        <i class="fas fa-envelope prefix"></i>
                        <input type="text" id="inputIconEx2" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}" name="email" >
                        <label for="inputIconEx2">@lang('site.email')</label>
                    </div>

                    <div class="md-form">
                        <i class="fas fa-phone-alt prefix"></i>
                        <input type="text" id="inputIconEx1" class="form-control @error('phone') is-invalid @enderror" value="{{$user->phone}}" name="phone" >
                        <label for="inputIconEx1">@lang('site.phone')</label>
                    </div>

                    <div class="md-form">
                        <i class="fas fa-city prefix"></i>
                        <input type="text" id="inputValidationEx2" class="form-control @error('city') is-invalid @enderror" value="{{$user->city}}" name="city" >
                        <label for="inputValidationEx2" data-error="wrong">@lang('site.city')</label>
                    </div>

                    <div class="md-form">
                            <div class="form-check form-check-inline mr-2">
                            <input type="radio" class="form-check-input" {{$user->gender==0?'checked':''}} value="0"  name="gender">
                            <i class="fas fa-male mr-2"></i>
                            </div>

                            <div class="form-check form-check-inline mr-5">
                            <input type="radio" class="form-check-input" {{$user->gender==1?'checked':''}} value="1"  name="gender">
                            <i class="fas fa-female mr-2"></i>
                            </div>
                     </div>


                     <!--start permissions section-->
                     <?php $models=['users','places','questions'];?>
                     <?php $options=['create','read','delete','update','send'];?>

                    <table class="table table-bordered table-striped ">
                        <thead>
                        <tr>
                            <th class="text-center"><h6 class="text-uppercase font-weight-bold  ">@lang('site.permission')</h6></th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($models as $index=>$model)
                        <tr>
                            <td class="pt-3-half"><a class="" data-toggle="tab">@lang('site.' . $model)</a></td>
                        </tr>
                        <tr>
                            <td class="pt-3-half">

                                @foreach($options as $option)
                                @if ($option=='send' && ($model=='users' || $model=='places') || $option=='update' && ($model=='places'))
                                <div >&nbsp;</div>
                                @else
                                <input class=" ml-2" type="checkbox" name="permissions[]" value="{{$option}}_{{$model}}" {{$user->can($option.'_'.$model)?'checked':''}}>

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

                    <button class="form-control light-blue darken-1 mt-2">@lang('site.edit')</button>
                </form>
                <!-- Form -->
         </div>
<!-- Default form Add -->


@endsection






