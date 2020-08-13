@extends('layouts.dashboard.app')
@section('title',__('site.Add_Place'))
@section('content')

    @if(session()->has('success'))

        <div class="alert alert-info">
            {{session()->get('success')}}
        </div>
    @endif

<!-- Default form Add -->
            <div class="card-body px-lg-5 pt-0 py-4">
                <h5 class="card-header light-blue darken-1 white-text text-center py-4">
                    <strong>@lang('site.addplace')</strong>
                    <i class="far fa-map"></i>
                </h5>
                <!-- Form -->
                <form class="border border-light-5 p-5" style="color: #757575;" action="{{route('dashboard.place.store')}}"  method="POST" enctype="multipart/form-data">
                    @csrf

                      <div class="md-form">
                        <i class="fas fa-place-of-worship prefix"></i>          
                        <input type="text" id="inputIconEx1" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" autocomplete="off">
                        <label for="inputIconEx1">@lang('site.center_name')</label>
                      </div>

                      <div class="md-form">
                        <i class="fas fa-map-marked prefix"></i>
                        <input type="text" id="inputIconEx2" class="form-control @error('location') is-invalid @enderror" value="{{ old('location') }}" name="location" autocomplete="off">
                        <label for="inputIconEx2">@lang('site.location')</label>
                      </div>

                      <div class="md-form">
                        <i class="fas fa-place-of-worship prefix"></i>          
                        <input type="text" id="inputIconEx3" class="form-control @error('name_en') is-invalid @enderror" value="{{ old('name_en') }}" name="name_en" autocomplete="off">
                        <label for="inputIconEx3">@lang('site.center_name_en')</label>
                      </div>

                      <div class="md-form">
                        <i class="fas fa-map-marked prefix"></i>
                        <input type="text" id="inputIconEx4" class="form-control @error('location_en') is-invalid @enderror" value="{{ old('location_en') }}" name="location_en" autocomplete="off">
                        <label for="inputIconEx4">@lang('site.location_en')</label>
                      </div>

                      <div class="md-form">
                        <i class="fas fa-map-marker-alt prefix"></i>
                        <input type="text" id="inputIconEx5" class="form-control @error('lat_lag') is-invalid @enderror" value="{{ old('lat_lag') }}" name="lat_lag" autocomplete="off">
                        <label for="inputIconEx5">@lang('site.lat_lag')</label>
                      </div>



                    <div class="md-form">
                            <div class="form-check form-check-inline mr-2">
                            <input type="radio" class="form-check-input"  value="0" name="center_type">
                            @lang('site.water')
                            <i class="fas fa-tint mr-2"></i>
                            </div>

                            <div class="form-check form-check-inline mr-5">
                            <input type="radio" class="form-check-input"  value="1" name="center_type">
                            @lang('site.electrec')
                            <i class="fas fa-lightbulb mr-2"></i>
                            </div>

                            <div class="form-check form-check-inline mr-5">
                                <input type="radio" class="form-check-input" value="2" name="center_type">
                                @lang('site.phone')
                                <i class="fas fa-phone-alt mr-2"></i>
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

                    <button class="form-control light-blue darken-1 mt-2">@lang('site.add')</button>
                 </form>

            </div>
<!-- Default form Add -->


@endsection




