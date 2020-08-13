@extends('layouts.dashboard.app')
@section('title',__('site.Questions_Awaiting_The_Answer'))
@section('content')

    @if(session()->has('success'))

        <div class="alert alert-info">
            {{session()->get('success')}}
        </div>
    @endif

<!-- Default form Add -->


        <section class="mt-5 z-depth-5">
              <h5 class="card-header light-blue darken-1 white-text text-center py-4">
                <strong>@lang('site.questionAwaitingTheAnswer')</strong>
                <i class="fas fa-user"></i>
              </h5>

            <div class="row white-text mt-2">

                    <div class="col-xl-6 col-md-12 col-lg-6 col-sm-12 mb-4">
                        <div class="card-header text-center">
                            <h5 class="card-header unique-color
                            darken-1 white-text text-center py-4">
                                @lang('site.questionAwaitingTheAnswer')
                            </h5>
                        </div>

                         <table class="table table-bordered table-striped table-questions ">
                             <thead>
                                 <tr>
                                     <th class="text-center">@lang('site.id_question')</th>
                                     <th class="text-center">@lang('site.text_question')</th>
                                     <th class="text-center">@lang('site.action')</th>
                                 </tr>
                             </thead>
                             <tbody>

                                @foreach ($questions as $question)

                                <tr>
                                    <td class="pt-3-half"> {{$question->id}}</td>
                                    <td class="pt-3-half">
                                        <textarea  class="md-textarea form-control disabled" >{{$question->text_question}}</textarea>
                                    </td>
                                    <td class="pt-3-half">

                                    <form class="text-center border-light" action="{{ route('dashboard.question.destroy',$question->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <span class="table-add mt-5 mr-2">
                                            <button class="btn btn-link m-auto p-0"><a href="{{route('dashboard.question.destroy',$question->id)}}" class="text-danger"><i class="fas fa-trash fa-2x" aria-hidden="true"></i></a></button>
                                        </span>
                                    </form>

                                    <span class="table-add mt-5 mr-2 ">
                                        <button class="btn btn-link m-auto p-0 btn-reply text-success" data-id="{{ $question->id  }}"
                                            data-url="{{route('dashboard.questionSendReply',$question->id) }}">
                                            <i class="fas fa-reply fa-2x" aria-hidden="true"></i>
                                        </button>

                                    </span>

                                    </td>
                                </tr>

                                @endforeach

                                </tbody>
                            </table>
                        {{$questions->appends(request()->query())->links()}}
                </div>

                <div class="col-xl-6 col-md-12 col-lg-6 col-sm-12 mb-4">
                    <div class="card-header text-center">
                        <h5 class="card-header unique-color

                        darken-1 white-text text-center py-4">
                            @lang('site.windowanswer')
                    </div>
                    <form class="border border-light p-5" id="form_reply" action="" method="POST">
                        @csrf()
                        <div class="card-body text-center">
                            <table class="table table-striped table-bordered" id="table-answer">
                                <thead>
                                    <tr>
                                    <th class="text-center">@lang('site.text_answer')</th>
                                    <th class="text-center">@lang('site.action')</th>
                                    </tr>
                                </thead>
                            </table>
                            <input type="submit" class="btn-sm btn-primary form-control disabled btn-send-reply" value="@lang('site.send')">
                        </div>
                    </form>
                  </>
                </div>
            </section>
<!-- Default form Add -->

@endsection

