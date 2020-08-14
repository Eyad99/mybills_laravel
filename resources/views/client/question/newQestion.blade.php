@extends('layouts.client.app')
@section('title',__('site.Inquire_about_a_question'))
@section('content')
            <div class="card-body px-lg-5 pt-0 py-4">
                <h5 class="card-header light-blue darken-1 white-text text-center py-4">
                    <strong>@lang('site.addnewquestion')</strong>
                    <i class="fas fa-question-circle"></i>
                </h5>
                <!-- Form -->
                <form class="border border-light-5 p-5" style="color: #757575;" action="{{route('Question.store')}}"  method="POST">
                    @csrf


                      <div class="md-form">
                        <i class="fas fa-pencil-alt prefix"></i>
                        <textarea id="form10" class="md-textarea form-control @error('text_question') is-invalid @enderror"  name="text_question">{{ old('text_question') }}</textarea>
                        <label for="form10">@lang('site.text_questions')</label>
                      </div>
               
                    <div class="md-form">
                            <div class="form-check form-check-inline mr-2">
                            <input type="radio" class="form-check-input"  value="0" name="center_type" id="water">
                            @lang('site.water')
                            <i class="fas fa-tint mr-2"></i>
                            </div>

                            <div class="form-check form-check-inline mr-5">
                            <input type="radio" class="form-check-input"  value="1" name="center_type" id="electricity">
                            @lang('site.electrec')
                            <i class="fas fa-lightbulb mr-2"></i>
                            </div>

                            <div class="form-check form-check-inline mr-5">
                                <input type="radio" class="form-check-input" value="2" name="center_type" id="telecome">
                                @lang('site.phone')
                                <i class="fas fa-phone-alt mr-2"></i>
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

                    <button class="form-control light-blue darken-1 mt-2">@lang('site.send')</button>
                 </form>

            </div>


@endsection





