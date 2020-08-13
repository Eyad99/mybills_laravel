@extends('layouts.dashboard.app')
@section('title',__('site.admins'))
@section('content')

@if(session()->has('success'))
    <div class="alert alert-info">
        {{session()->get('success')}}
    </div>
@endif


    <!-- Add table -->
    <div class="card mt-5">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">@lang('site.user')
        <small>{{ $users->total() }}</small>
        <i class="fa fa-user-alt"></i>
    </h3>
        <div class="card-body">
            <div id="table" class="table-editable">

                @if(auth()->user()->hasPermission('create_users'))
                    <span class="table-add float-right mb-3 mr-2"><a href="{{route('dashboard.user.create')}}" class="text-success"><i
                        class="fas fa-plus fa-2x" aria-hidden="true"></i></a>
                    </span>
            @else
                    <span class="table-add float-right mb-3 mr-2 disabled"><a href="#!" class="text-success"><i
                    class="fas fa-plus fa-2x" aria-hidden="true"></i></a>
                    </span>
                @endif

            <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2">
                @csrf
                <input class="form-control form-control-sm ml-3 w-25" type="text" name="searsh" placeholder="@lang('site.searsh')"
                value="{{ request()->searsh }}" autocomplete="off" aria-label="Search">
                <button class="btn btn-link"><a class=" form-control-sm ml-3 w-20 btn-submit">@lang('site.searsh')<i class="fas fa-search" aria-hidden="true"></i></a></button>
            </form>



            <table class="table table-bordered table-responsive-md table-responsive-sm table-responsive-lg table-striped text-center">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">@lang('site.name')</th>
                    <th class="text-center">@lang('site.user_name')</th>
                    <th class="text-center">@lang('site.email')</th>
                    <th class="text-center">@lang('site.phone')</th>
                    <th class="text-center">@lang('site.city')</th>
                    <th class="text-center">@lang('site.created_at')</th>
                    <th class="text-center">@lang('site.action')</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                <tr>
                    <td class="pt-3-half">{{$user->id}}</td>
                    <td class="pt-3-half">{{$user->name}}</td>
                    <td class="pt-3-half">{{$user->user_name}}</td>
                    <td class="pt-3-half">{{$user->email}}</td>
                    <td class="pt-3-half">{{$user->phone}}</td>
                    <td class="pt-3-half">{{$user->city}}</td>
                    <td class="pt-3-half">{{$user->created_at}}</td>
                    <td class="pt-3-half">
                        @if(auth()->user()->hasPermission('update_users'))
                        <span class="table-edit mt-2 mr-2"><a href="{{route('dashboard.user.edit',$user->id)}}" class="text-warning">
                            <i class="fas fa-edit fa-2x" aria-hidden="true"></i></a>
                        </span>
                        @endif

                        @if(auth()->user()->hasPermission('delete_users'))
                        <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2" action="{{route('dashboard.user.destroy',$user->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <span class="table-add mt-2 mr-2">
                                <button class="btn btn-link m-auto p-0"><a href="{{route('dashboard.user.destroy',$user->id)}}" class="text-danger"><i class="fas fa-trash fa-2x" aria-hidden="true"></i></a></button>
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
            {{$users->appends(request()->query())->links()}}

            </div>
        </div>
    </div>
<!-- Add table -->
@endsection


