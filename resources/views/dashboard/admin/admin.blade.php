@extends('layouts.dashboard.app')
@section('title',__('site.Statistical_data'))
@section('content')

<div class="row  mt-5 justify-content-end">
    <form class="col-5">
        <select class="form-control filter-date z-depth-5 bg-light " name="searsh" >
        <option value="">...</option>
        <option class="btn-sub" value="0" {{request()->searsh==0?'selected':''}}>@lang('site.today')</option>
        <option class="btn-sub" value="yesterday"  {{request()->searsh=='yesterday'?'selected':''}}>@lang('site.yesterday')</option>
        <option class="btn-sub" value="7" {{request()->searsh==7?'selected':''}}>@lang('site.week')</option>
        <option class="btn-sub" value="30" {{request()->searsh==30?'selected':''}}>@lang('site.month')</option>
        <option class="btn-sub" value="current_year" {{request()->searsh=='current_year'?'selected':''}}>@lang('site.The current year')</option>
        <option class="btn-sub" value="last_year" {{request()->searsh=='last_year'?'selected':''}}>@lang('site.The last year')</option>
        <option value="all" {{request()->searsh=='all'?'selected':''}}>@lang('site.total')</option>
    </select>
    </form>
</div>



<div class="container my-5">

    <!-- Section: Block Content -->
    <section>

      <h6 class="font-weight-bold text-center  text-uppercase small mb-4">@lang('site.ADMIN')</h6>
      <h3 class="font-weight-bold text-center  pb-2">@lang('site.Statistic Data')</h3>
      <hr class="w-header my-4">

      <div class="row white-text">

        <!-- Grid column -->
        <div class="col-xl-4 col-md-6 mb-4">
          <!-- Card Primary -->

          <div class="card primary-color white-text">
            <div class="card-body d-flex justify-content-between align-items-center">
              <div>
                <p class="h2-responsive font-weight-bold mt-n2 mb-0">{{is_null($count_water)?0:$count_water}}</p>
                <p class="mb-0">@lang('site.water')</p>
              </div>
              <div>
                <i class="fas fa-tint fa-4x text-black-40"></i>
              </div>
            </div>
            <a class="card-footer footer-hover small text-center white-text border-0 p-2"><i class="fas fa-arrow-circle-right pl-2"></i></a>
          </div>

          <!-- Card Primary -->
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-4 col-md-6 mb-4">

          <!-- Card Yellow -->
          <div class="card warning-color white-text">
            <div class="card-body d-flex justify-content-between align-items-center">
              <div>
                <p class="h2-responsive font-weight-bold mt-n2 mb-0">{{is_null($count_electricty)?0:$count_electricty}}</p>
                <p class="mb-0">@lang('site.electrec')</p>
              </div>
              <div>
                <i class="fas fa-lightbulb fa-4x text-black-40"></i>
              </div>
            </div>
            <a class="card-footer footer-hover small text-center white-text border-0 p-2"><i class="fas fa-arrow-circle-right pl-2"></i></a>
          </div>
          <!-- Card Yellow -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-4 col-md-6 mb-4">

          <!-- Card Blue -->
         <div class="card default-color lighten-1 white-text">
            <div class="card-body d-flex justify-content-between align-items-center">
              <div>
                <p class="h2-responsive font-weight-bold mt-n2 mb-0"> {{is_null($count_telecome)?0:$count_telecome }}</p>
                <p class="mb-0">@lang('site.phone')</p>
              </div>
              <div>
                <i class="fas fa-phone-alt fa-4x text-black-40"></i>
              </div>
            </div>
            <a class="card-footer footer-hover small text-center white-text border-0 p-2"><i class="fas fa-arrow-circle-right pl-2"></i></a>
          </div>
          <!-- Card Blue -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-6 col-md-6 mb-4">

          <!-- Card Red -->
          <div class="card red accent-2 white-text">
            <div class="card-body d-flex justify-content-between align-items-center">
              <div>
                <p class="h2-responsive font-weight-bold mt-n2 mb-0">{{ $count_total }}</p>
                <p class="mb-0">@lang('site.total')</p>
              </div>
              <div>
                <i class="fas fa-chart-pie fa-4x text-black-40"></i>
              </div>
            </div>
            <a class="card-footer footer-hover small text-center white-text border-0 p-2"><i class="fas fa-arrow-circle-right pl-2"></i></a>
          </div>
          <!-- Card Red -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-6 col-md-12 mb-4">

          <!-- Card Blue -->

          <div class="card light-blue lighten-1 white-text">
            <div class="card-body d-flex justify-content-between align-items-center">
              <div>
                <p class="h2-responsive font-weight-bold mt-n2 mb-0">{{ is_null($count_user)?0:$count_user}}</p>
                <p class="mb-0">@lang('site.User_Registrations')</p>
              </div>
              <div>
                <i class="fas fa-user-plus fa-4x text-black-40"></i>
              </div>
            </div>
            <a class="card-footer footer-hover small text-center white-text border-0 p-2"><i class="fas fa-arrow-circle-right pl-2"></i></a>
          </div>

          <!-- Card Blue -->

        </div>
        <!-- Grid column -->
      </div>
    </section>
    <!-- Section: Block Content -->
  </div>

@endsection





