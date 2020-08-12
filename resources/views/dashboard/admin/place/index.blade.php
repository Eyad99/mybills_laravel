
@extends('layouts.dashboard.app')
@section('title',__('site.Places'))
@section('content')

@if(session()->has('success'))

    <div class="alert alert-info">
        {{session()->get('success')}}
    </div>
@endif
    <!-- table -->
    <div class="card mt-5">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">@lang('site.places')
        <i class="fas fa-map-marked-alt"></i>
   </h3>
        <div class="card-body">
            <div id="table" class="table-editable">

                @if(auth()->user()->hasPermission('create_places'))
                    <span class="table-add float-right mb-3 mr-2"><a href="{{route('dashboard.place.create')}}" class="text-success">
                        <i class="fas fa-plus fa-2x" aria-hidden="true"></i></a>
                    </span>
                 @else
                    <span class="table-add float-right mb-3 mr-2 disabled"><a href="#!" class="text-success"><i
                    class="fas fa-plus fa-2x" aria-hidden="true"></i></a>
                    </span>
                @endif

            <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2" action="{{route('dashboard.place.index')}}" method="GET">
                @csrf
                <input class="form-control form-control-sm ml-3 w-25" type="text" name="searsh" placeholder="@lang('site.searsh')"
                value="{{ request()->searsh }}" autocomplete="off" aria-label="Search">
                <button class="btn btn-link"><a class=" form-control-sm ml-3 w-20 btn-submit">@lang('site.searsh')<i class="fas fa-search" aria-hidden="true"></i></a></button>
            </form>



            <table class="table table-bordered table-striped text-center">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">@lang('site.center_name_t')</th>
                    <th class="text-center">@lang('site.location_t')</th>
                    <th class="text-center">@lang('site.center_type')</th>
                    <th class="text-center">@lang('site.action')</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($places as $place)
                <tr>
                    <td class="pt-3-half">{{$place->id}}</td>
                    @if(app()->getLocale()=='ar')
                    <td class="pt-3-half">{{$place->name}}</td>
                    <td class="pt-3-half">{{$place->location}}</td>
                    @else
                    <td class="pt-3-half">{{$place->name_en}}</td>
                    <td class="pt-3-half">{{$place->location_en}}</td>
                    @endif
                  
                    <td class="pt-3-half">
                        @if ($place->center_type==0)
                         @lang('site.water')
                        @elseif ($place->center_type==1)
                         @lang('site.electrec')
                        @else
                         @lang('site.phone')
                        @endif
                    </td>
                    <td class="pt-3-half">
                        @if(auth()->user()->hasPermission('delete_places'))
                        <form class="form-inline d-flex justify-content-center form-sm active-cyan active-cyan-2 mt-2" action="{{route('dashboard.place.destroy',$place->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <span class="table-add mb-3 mr-2">
                              <button class="btn btn-link m-auto p-0">  <a href="{{route('dashboard.place.destroy',$place->id)}}" class="text-danger"><i class="fas fa-trash fa-2x" aria-hidden="true"></i></a></button>
                            </span>

                        </form>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                <td class="pt-3-half">
                    <td class="pt-3-half text-center" colspan="8">empty.</td>
                </td>
                </tr>

                @endforelse
                </tbody>
            </table>
            {{$places->appends(request()->query())->links()}}

            </div>
        </div>
    </div>
<!-- table -->
@endsection


