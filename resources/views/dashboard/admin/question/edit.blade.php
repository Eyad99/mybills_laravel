@extends('layouts.dashboard.app')
@section('title',__('site.Edit_Question'))
@section('content')

    @if(session()->has('success'))

        <div class="alert alert-info">
            {{session()->get('success')}}
        </div>
    @endif

<!-- Default form edit -->
            <div class="card-body px-lg-5 pt-0 py-4">
                <h5 class="card-header light-blue darken-1 white-text text-center py-4">
                    <strong>@lang('site.editquestion')</strong>
                    <i class="fas fa-edit"></i>
                </h5>
                <!-- Form -->
                <form class="border border-light-5 p-5" style="color: #757575;" action="{{route('dashboard.question.update',$question->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                      <div class="md-form">
                        <i class="fas fa-pencil-alt prefix"></i>
                        <textarea id="form10" class="md-textarea form-control @error('text_question') is-invalid @enderror"  name="text_question">{{ $question->text_question }}</textarea>
                        <label for="form10">@lang('site.text_question')</label>
                      </div>

                      <div class="md-form">
                        <i class="fas fa-pencil-alt prefix"></i>
                        <textarea id="form10" class="md-textarea form-control @error('text_answer') is-invalid @enderror"  name="text_answer">{{ $question->text_answer }}</textarea>
                        <label for="form10">@lang('site.text_answer')</label>
                      </div>
                      <div class="md-form">
                        <i class="fas fa-pencil-alt prefix"></i>
                        <textarea id="form10" class="md-textarea form-control @error('text_question_en') is-invalid @enderror"  name="text_question_en">{{ $question->text_question_en }}</textarea>
                        <label for="form10">@lang('site.text_question_en')</label>
                      </div>

                      <div class="md-form">
                        <i class="fas fa-pencil-alt prefix"></i>
                        <textarea id="form10" class="md-textarea form-control @error('text_answer_en') is-invalid @enderror"  name="text_answer_en">{{ $question->text_answer_en }}</textarea>
                        <label for="form10">@lang('site.text_answer_en')</label>
                      </div>



                    <div class="md-form">
                            <div class="form-check form-check-inline mr-2">
                            <input type="radio" class="form-check-input" value="0" name="center_type" {{$question->center_type==0?'checked':''}}>
                            @lang('site.water')
                            <i class="fas fa-tint mr-2"></i>
                            </div>

                            <div class="form-check form-check-inline mr-5">
                            <input type="radio" class="form-check-input"  value="1" name="center_type" {{$question->center_type==1?'checked':''}}>
                            @lang('site.electrec')
                            <i class="fas fa-lightbulb mr-2"></i>
                            </div>

                            <div class="form-check form-check-inline mr-5">
                                <input type="radio" class="form-check-input" value="2" name="center_type" {{$question->center_type==2?'checked':''}}>
                                @lang('site.phone')
                                <i class="fas fa-phone-alt mr-2"></i>
                            </div>
                     </div>

                     <div class="md-form">
                        <div class="form-check form-check-inline mr-2">
                        <input type="radio" class="form-check-input" value="1" name="status_view" {{$question->status_view==1 ? 'checked' : '' }}>
                        @lang('site.show')
                        <i class="fas fa-eye mr-2"></i>
                        </div>

                        <div class="form-check form-check-inline mr-5">
                        <input type="radio" class="form-check-input" value="2" name="status_view" {{$question->status_view==2 ? 'checked' : '' }}>
                        @lang('site.hide')
                        <i class="fas fa-eye-slash mr-2"></i>
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

                    <button class="form-control light-blue darken-1 mt-2">@lang('site.edit')</button>
                 </form>

            </div>
<!-- Default form edit -->


@endsection





