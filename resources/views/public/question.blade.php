@extends('layouts/public/app')
@section('title',__('site.Questions'))
@section('content')

    <div class="container mt-3">

        <span class="table-add mb-3 mr-2 text-info">
           <a class="text-info" href="#a"><i class="fas fa-tint mr-2 fa-2x"></i></a>
        </span>

        <span class="table-add mb-3 mr-2 ">
            <a class="text-warning" href="#b"><i class="fas fa-lightbulb mr-2 fa-2x"></i></a>
        </span>

        <span class="table-add mb-3 mr-2">
            <a class="text-default" href="#c" ><i class="fas fa-phone-alt mr-2 fa-2x"></i></a>
        </span>

    </div>


        <div class="container py-4">
            <div class="row">

                <div class="col-xl-12 col-md-12 mb-4">
                    <div class="z-depth-5">
                        <h5 class="card-header darken-1 text-center py-4" id="a">
                            <strong>@lang('site.water')</strong>
                                <i class="fas fa-tint mr-2 fa-1x"></i>
                        </h5>
                            <div class="under-line-blue w-100">
                            </div>
                            @foreach($questions_water as $qt)
                                @if(app()->getLocale()=='ar')
                                    <ul class="faq">
                                        <li>
                                            <h3 class="question accordion">
                                            {{$qt->text_question}}
                                            </h3>
                                            <div class="answer">
                                            {{$qt->text_answer}}

                                            </div>
                                        </li>
                                    </ul>
                                @else
                                    <ul class="faq">
                                        <li>
                                            <h3 class="question accordion">
                                            {{$qt->text_question_en}}
                                            </h3>
                                            <div class="answer">
                                            {{$qt->text_answer_en}}

                                            </div>
                                        </li>
                                    </ul>
                                @endif
                             @endforeach
                    </div>
                </div>



                <div class="col-xl-12 col-md-12 mb-4">
                    <div class="z-depth-5">
                        <h5 class="card-header darken-1 text-center py-4" id="b">
                            <strong>@lang('site.electrec')</strong>
                            <i class="fas fa-lightbulb mr-2 fa-1x"></i>
                         </h5>
                            <div class="under-line-blue w-100">
                            </div>
                            @foreach($questions_electricity as $qt)
                                @if(app()->getLocale()=='ar')
                                    <ul class="faq">
                                        <li>
                                            <h3 class="question accordion">
                                            {{$qt->text_question}}
                                            </h3>
                                            <div class="answer">
                                            {{$qt->text_answer}}

                                            </div>
                                        </li>
                                    </ul>
                                @else
                                    <ul class="faq">
                                        <li>
                                            <h3 class="question accordion">
                                            {{$qt->text_question_en}}
                                            </h3>
                                            <div class="answer">
                                            {{$qt->text_answer_en}}

                                            </div>
                                        </li>
                                    </ul>
                                @endif
                            @endforeach
                    </div>
                </div>



                <div class="col-xl-12 col-md-12 mb-4">
                    <div class="z-depth-5">
                        <h5 class="card-header darken-1 text-center py-4" id="c">
                            <strong>@lang('site.phone')</strong>
                            <i class="fas fa-phone-alt mr-2 fa-1x"></i>
                         </h5>
                        <div class="under-line-blue w-100">
                        </div>
                             @foreach($questions_telecome as $qt)
                                @if(app()->getLocale()=='ar')
                                    <ul class="faq">
                                        <li>
                                            <h3 class="question accordion">
                                            {{$qt->text_question}}
                                            </h3>
                                            <div class="answer">
                                            {{$qt->text_answer}}

                                            </div>
                                        </li>
                                    </ul>
                                @else
                                    <ul class="faq">
                                        <li>
                                            <h3 class="question accordion">
                                            {{$qt->text_question_en}}
                                            </h3>
                                            <div class="answer">
                                            {{$qt->text_answer_en}}

                                            </div>
                                        </li>
                                    </ul>
                                @endif
                             @endforeach
                    </div>
                </div>

            </div>
        </div>

@endsection

@push('script')
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("activee");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>

@endpush
