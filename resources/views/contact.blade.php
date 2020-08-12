@extends('layouts.public.app')
@section('title',__('site.Contact_Us'))
@section('content')


    @if(session()->has('success'))

        <div class="alert alert-info">
            {{session()->get('success')}}
        </div>
    @endif

<!-- Default form Add -->
            <div class="card-body px-lg-5 pt-0 py-4">
                <h5 class="card-header darken-1 text-center py-4">
                    <strong>@lang('site.contactuss')</strong><i class="far fa-share-square"></i>
                </h5>
                <!-- Form -->
                <form class="border border-light z-depth-5 p-5" style="color: #757575;" action="{{route('ContactusUs.store')}}"  method="POST">
                    @csrf


                    <div class="md-form md-outline">
                        <i class="fas fa-envelope prefix"></i>
                        <input type="email" id="inputIconEx1"  name="email" autocomplete="off" class="form-control @error('email') is-invalid @enderror">
                        <label for="inputIconEx1">@lang('site.email')</label>
                    </div>


                      <div class="md-form">
                        <i class="far fa-comment-alt prefix"></i>
                        <textarea id="form10" class="md-textarea form-control @error('text_question') is-invalid @enderror"  name="text_question">{{ old('text_question') }}</textarea>
                        <label for="form10">@lang('site.message')</label>
                      </div>



                      <button class="form-control light-blue darken-1 mt-2">@lang('site.send')</button>

                     @if ($errors->any())
                     <div class="alert alert-danger">
                         <ul>
                             @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                             @endforeach
                         </ul>
                     </div>
                      @endif

                 </form>

            </div>


@endsection














