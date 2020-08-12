@extends('layouts.client.app')
@section('title',__('site.Contact_Us'))
@section('content')

@if(auth()->user()->verified())

    @if(session()->has('success'))

        <div class="alert alert-info">
            {{session()->get('success')}}
        </div>
    @endif

<!-- Default form Add -->
            <div class="card-body px-lg-5 pt-0 py-4 mt-4">
                <h5 class="card-header darken-1 text-center py-4">
                    <strong>@lang('site.contactuss') <i class="far fa-share-square"></i></strong>
                </h5>
                <!-- Form -->
                <form class="border border-light p-5 z-depth-5" style="color: #757575;" action="{{route('Contactus.store')}}"  method="POST">
                    @csrf

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
            @else
  
       <div class="card-body px-lg-5 pt-0 py-4 mt-4">
       <div class="z-depth-5">
         <h5 class="card-header darken-1 text-center py-4">
             <strong>@lang('site.verified1') </strong>
         </h5>
         <div class="md-form text-center py-4">
         <h5>@lang('site.verified2')!! </h5>
         <h5>@lang('site.verified3') <i class="fab fa-angellist"></i></h5>

         </div>
  
         </div>
    </div>
    @endif()
    

@endsection














