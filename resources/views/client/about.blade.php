@extends('layouts.client.app')
@section('title',__('site.About'))
@section('content')

@if(auth()->user()->verified())

<div class="card mt-5">
    <h2 class="card-header text-center font-weight-bold text-uppercase py-4">@lang('site.about')
        <i class="fab fa-angellist"></i>
    </h2>

    <div class="card-body text-center">
        <p>@lang('site.p')</p>
        <p>@lang('site.p1')</p>
        <p>@lang('site.p2')</p>
        <p>@lang('site.p3')</p>
        <p>@lang('site.p4')</p>
        <p>@lang('site.p5')</p>
   
    </div>



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
