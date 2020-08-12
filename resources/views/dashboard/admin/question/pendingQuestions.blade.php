@extends('layouts.dashboard.app')
@section('title',__('site.Pending_Questions'))
@section('content')

@if(session()->has('success'))

    <div class="alert alert-info">
        {{session()->get('success')}}
    </div>
@endif


    <!-- table -->
    <div class="card mt-5">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">@lang('site.Pending_questions')
        <i class="fas fa-marker"></i>
        <small>{{ $questions->total() }}</small>
        </h3>
        <div class="card-body">
            <div id="table" class="table-editable">

            <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2" action="{{route('dashboard.pendingQuestions')}}" method="GET">
                @csrf
                <input class="form-control form-control-sm ml-3 w-25" type="text" name="searsh" placeholder="@lang('site.searsh')"
                value="{{ request()->searsh }}" autocomplete="off" aria-label="Search">
                <button class="btn btn-link"><a class=" form-control-sm ml-3 w-20 btn-submit">@lang('site.searsh')<i class="fas fa-search" aria-hidden="true"></i></a></button>
            </form>



            <table class="table table-bordered table-responsive-md table-responsive-sm table-striped text-center">
                <thead>
                <tr>
                    <th class="text-center">@lang('site.id_question')</th>
                    <th class="text-center">@lang('site.text_questions')</th>
                    <th class="text-center">@lang('site.text_answers')</th>
                    <th class="text-center">@lang('site.center_type')</th>
                    <th class="text-center">@lang('site.action')</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($questions as $question)
                <tr>
                    <td class="pt-3-half">{{$question->id}}</td>


                    @if(app()->getLocale()=='ar')
                        <td class="pt-3-half">
                            <div class="md-form">
                                <textarea  class="md-textarea form-control disabled" >{{$question->text_question}}</textarea>
                            </div>
                        </td>

                        <td class="pt-3-half">
                            <div class="md-form">
                                <textarea  class="md-textarea form-control disabled" >{{$question->text_answer}}</textarea>
                            </div>
                        </td>
                    @else
                        <td class="pt-3-half">
                            <div class="md-form">
                                <textarea  class="md-textarea form-control disabled" >{{$question->text_question_en}}</textarea>
                            </div>
                        </td>

                        <td class="pt-3-half">
                            <div class="md-form">
                                <textarea  class="md-textarea form-control disabled" >{{$question->text_answer_en}}</textarea>
                            </div>
                        </td>
                    @endif

                    <td class="pt-3-half">
                        @if ($question->center_type==0)
                            @lang('site.water')
                       @elseif ($question->center_type==1)
                            @lang('site.electrec')
                       @elseif ($question->center_type==2)
                            @lang('site.phone')
                       @else
                            @lang('site.contactus')
                       @endif
                    </td>

                    <td class="pt-3-half">
                        @if(auth()->user()->hasPermission('update_questions'))
                        <span class="table-edit mt-2 mr-2"><a href="{{route('dashboard.question.edit',$question->id)}}" class="text-warning">
                            <i class="fas fa-edit fa-2x" aria-hidden="true"></i></a>
                        </span>
                        @endif


                        @if(auth()->user()->hasPermission('delete_questions'))
                        <form class="form-inline d-flex justify-content-center form-sm active-cyan active-cyan-2 mt-2" action="{{route('dashboard.question.destroy',$question->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <span class="table-add mt-4 mr-2">
                                <button class="btn btn-link m-auto p-0"><a href="{{route('dashboard.question.destroy',$question->id)}}" class="text-danger"><i class="fas fa-trash fa-2x" aria-hidden="true"></i></a></button>
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
            {{$questions->appends(request()->query())->links()}}

            </div>
        </div>
    </div>
<!-- table -->
@endsection





