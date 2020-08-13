@extends('layouts/client/app')
@section('title',__('site.My_Bills'))
@section('content')

    @if(auth()->user()->verified())
        @if(session()->has('success'))
            <div class="alert alert-success text-center container">
                {{session()->get('success')}}
            </div>
        @endif()

    <section class="section overfree mt-5">
        <div class="container">
            <div class="section-title text-center" >
                <small>@lang('site.text1')</small>
                <h3 >@lang('site.text2')</h3>
                <p class="lead">@lang('site.text3') <br> @lang('site.text4')</p>
            </div>


            

            <div class="row service-list text-center mb-3">
                <div class="col-md-4 col-sm-12 col-xs-12 first">
                    <div class="service-wrapper wow fadeIn">
                        <img class="widthimage" src="{{asset('image/images/wave/idea.svg')}}" >
                        <div class="service-details">
                            <h4>@lang('site.ELECTRICITY_BILL')</h4>

                            <form action="{{route('new.electricity')}}" method="get">

                                <div class="md-form form-sm">
                                <input id="form-bg-sm" class="form-control form-control-sm @error('hour_number') is-invalid @enderror" type="text" name="hour_number" >
                                <label for="form-bg-sm">@lang('site.Hour_number')</label>    
                                </div>
                              
                                
                                @error('hour_number')
                                <div class="alert-danger">{{$message}}</div>
                                @enderror
                               <button class="btn btn-link m-auto p-0"><img src="{{asset('image/images/wave/search.svg')}}" style="width:18%"></button>

                            </form>
                        </div>
                    </div><!-- end service-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="service-wrapper wow fadeIn">
                        <img class="widthimage" src=" {{asset('image/images/wave/water.svg')}} ">
                        <div class="service-details">
                            <h4>@lang('site.WATER_BILL')</h4>
                            <form action="{{route('new.water')}}" method="get">

                                <div class="md-form form-sm">
                                <input id="form-bg-sm1" class="form-control form-control-sm @error('counter_number') is-invalid @enderror" type="text" name="counter_number" >
                                <label for="form-bg-sm1">@lang('site.Counter_number')</label>
                                </div>

                                @error('counter_number')
                                <div class="alert-danger">{{$message}}</div>
                                @enderror
                               <button class="btn btn-link m-auto p-0"><img src="{{asset('image/images/wave/search.svg')}}" style="width:18%"></button>


                            </form>
                        </div>
                    </div><!-- end service-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-12 col-xs-12 last">
                    <div class="service-wrapper wow fadeIn">
                        <img class="widthimage" src=" {{asset('image/images/wave/phone.svg')}} ">
                        <div class="service-details">
                            <h4>@lang('site.PHONE_BILL')</h4>
                            <form action="{{route('new.telecome')}}" method="get">

                                <div class="md-form form-sm">
                                <input id="form-bg-sm2" class="form-control form-control-sm @error('phone_number') is-invalid @enderror" type="text" name="phone_number" >
                                <label for="form-bg-sm2">@lang('site.Phone_number')</label>
                                </div>

                                @error('phone_number')
                                <div class="alert-danger">{{$message}}</div>
                                @enderror
                                <button class="btn btn-link m-auto p-0"><img src="{{asset('image/images/wave/search.svg')}}" style="width:18%"></button>
                            </form>
                        </div>
                    </div><!-- end service-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->



            <div class="row">
                <div class="col-xl-6 col-md-12 col-lg-6 col-sm-12">
                    <div class="milestone-counter">
                        <img src="{{asset('image/images/wave/customer-support.svg')}}"  alt="" class="alignleft">
                        <h3 class="stat-count">{{$users}}</h3>
                        <p>@lang('site.Customer')</p>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12 col-lg-6 col-sm-12">
                    <div class="milestone-counter c2">
                        <img src="{{asset('image/images/wave/worker.svg')}}" alt="" class="alignleft">
                        <h3 class="stat-count">{{$count_total}}</h3>
                        <p>@lang('site.Frequency_of_use')</p>
                    </div>
                </div>

            </div>
        </div><!-- end container -->
    </section><!-- end section -->



    <section class="container text-center">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('site.phone_app')</div>
                    <div class="panel-body">
                        <h3>@lang('site.phone_1')</h3>
                        <p>@lang('site.phone_2')</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('site.Advertisement')</div>
                    <div class="panel-body"><h3>@lang('site.service')</h3>
                        <p>@lang('site.service1')</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('site.Advertisement')</div>
                    <div class="panel-body"><h3>@lang('site.service')</h3>
                        <p>@lang('site.service1')</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    

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


















