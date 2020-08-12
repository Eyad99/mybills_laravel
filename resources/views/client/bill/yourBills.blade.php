@extends('layouts.client.app')
@section('title',__('site.Billing_List'))
@section('content')

    <div class="container sh my-5">
        <h4 class="text-center mb-3">@lang('site.bl1')</h4>
        <h4 class="text-center mb-3">@lang('site.bl2')</h4>
        <h4 class="text-center">@lang('site.bl3')</h4>
    </div>

    <section class="mt-5">
        <div class="row">

            <div class="col-xl-6 col-md-12 col-lg-12 col-sm-12 mb-4 archivd " style="display: inline-block;">

                @if($bills!=__('site.num_bill'))

                @foreach($bills as $bill)

                    <div class="card con-bills" >
                        <div class="card-header light-blue darken-1 white-text text-center py-4">
                            <table>
                                <thead>
                                    <tr>
                                        <td>@lang('site.Course_number') : </td>
                                        <td>{{$bill->course_number}}</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>@lang('site.name') : </td>
                                    <td>{{$bill->name}}</td>
                                </tr>
                                <tr>
                                    <td>@lang('site.Release_Date') : </td>
                                    <td>{{$bill->relase_date }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('site.Invoice_value') : </td>
                                    <td>{{$bill->amount_due_of_payment}}</td>
                                </tr>
                            </table>

                        <div class="mt-3">

                            @isset($bill->phone_number)
                            <a><button
                                    id="{{$bill->course_number}}"
                                    class="btn btn-outline-dark btn-add-basket"
                                    data-url="{{route('telecome.bill.payAll')}}"
                                    data-value="{{$bill->amount_due_of_payment}}"
                                    data-number="{{$bill->phone_number}}"
                                    data-course_number="{{$bill->course_number}}" >@lang('site.add_to_basket')
                            </button></a>

                            <a href="{{route('telecome.bills.view',[$bill->phone_number,$bill->course_number])}}"><button class="btn btn-outline-primary">@lang('site.Vision')</button></a>
                           <form class="d-inline" action="{{route('telecome.bill.pay',[$bill->phone_number,$bill->course_number,Auth::user()->bank_id])}}" method="post">
                               @csrf()
                               <input type="submit" class="btn btn-outline-success" value="@lang('site.push')"></input>
                           </form>
                            @endisset()

                            @isset($bill->hour_number)
                            <a><button
                                    id="{{$bill->course_number}}"
                                    class="btn btn-outline-dark btn-add-basket"
                                    data-url="{{route('electricity.bill.payAll')}}"
                                    data-value="{{$bill->amount_due_of_payment}}"
                                    data-number="{{$bill->hour_number}}"
                                    data-course_number="{{$bill->course_number}}" >@lang('site.add_to_basket')
                            </button></a>
                            <a href="{{route('electricity.bills.view',[$bill->hour_number,$bill->course_number])}}"><button class="btn btn-outline-primary">@lang('site.Vision')</button></a>
                            <form class="d-inline" action="{{route('electricity.bill.pay',[$bill->hour_number,$bill->course_number,Auth::user()->bank_id])}}" method="post">
                                @csrf()
                                <input type="submit" class="btn btn-outline-success" value="@lang('site.push')"></input>
                            </form>
                            @endisset()

                            @isset($bill->counter_number)
                            <a><button
                                    id="{{$bill->course_number}}"
                                    class="btn btn-outline-dark btn-add-basket"
                                    data-url="{{route('water.bill.payAll')}}"
                                    data-value="{{$bill->amount_due_of_payment}}"
                                    data-number="{{$bill->counter_number}}"
                                    data-course_number="{{$bill->course_number}}" >@lang('site.add_to_basket')
                            </button></a>
                            <a href="{{route('water.bills.view',[$bill->counter_number,$bill->course_number])}}"><button class="btn btn-outline-primary">@lang('site.Vision')</button></a>
                            <form class="d-inline" action="{{route('water.bill.pay',[$bill->counter_number,$bill->course_number,Auth::user()->bank_id])}}" method="post">
                                @csrf()
                                <input type="submit" class="btn btn-outline-success" value="@lang('site.push')"></input>
                            </form>
                            @endisset()
                          </div>
                        </div>
                    </div>
                @endforeach

               @else
                   <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-4 ">
                       <h5 class="card-header light-blue darken-1 white-text text-center py-4">
                           <strong>@lang('site.no_bill')</strong>
                      </h5>
                   </div
               @endif()

            </div>

            <div class="col-xl-6 col-md-12 col-lg-12 col-sm-12 mb-4">

                <h5 class="card-header light-blue darken-1 white-text text-center py-4">
                    <strong>@lang('site.bl')</strong>
                </h5>

                @isset(request()->counter_number)
                <form action="{{route('archived.water')}}" method="get">
                    <input type="hidden" value="{{request()->counter_number}}" name="counter_number">
                    <input type="submit" class="btn btn-light btn-md" value="@lang('site.Vision')">
                </form>
                @endisset()
                @isset(request()->hour_number)
                    <form action="{{route('archived.electricity')}}" method="get">
                        <input type="hidden" value="{{request()->hour_number}}" name="hour_number">
                        <input type="submit" class="btn btn-light btn-md" value="@lang('site.Vision')">
                    </form>
                @endisset()
                @isset(request()->phone_number)
                    <form action="{{route('archived.telecome')}}" method="get">
                        <input type="hidden" value="{{request()->phone_number}}" name="phone_number">
                        <input type="submit" class="btn btn-light btn-md" value="@lang('site.Vision')">
                    </form>
                @endisset()

            </div>

        </div>
    </section>

@endsection


