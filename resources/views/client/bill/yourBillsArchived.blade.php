@extends('layouts.client.app')
@section('title',__('site.Archived_Bills'))
@section('content')

    <div class="container">

             <div class="container col-xl-12 col-md-12 mt-4 mb-4">
                 <h5 class="card-header darken-1 text-center py-4">
                    <strong>@lang('site.archived_bill')</strong>
                    <i class="far fa-file-archive"></i>
                 </h5>

                    <div class="card-body">
                        <table class="table table-bordered  table-hover  table-responsive-md table-responsive-sm table-striped text-center">
                            @if($bills!="@lang('site.num_bill')")
                            @foreach($bills as $bill)
                            <tr>
                                <th class="text-center">@lang('site.name')</th>
                                @if (isset($bill->counter_number))
                                <th class="text-center">@lang('site.Counter_number')</th>
                                @elseif (isset($bill->phone_number))
                                <th class="text-center">@lang('site.Phone_number')</th>
                                @else
                                <th class="text-center">@lang('site.Hour_number')</th>
                                @endif
                                <th class="text-center">@lang('site.Course_number')</th>
                                <th class="text-center">@lang('site.Release_Date')</th>
                                <th class="text-center">@lang('site.Payment_Date')</th>
                                <th class="text-center">@lang('site.bill_value')</th>
                                <th class="text-center">@lang('site.options')</th>
                            </tr>

                            <tr>
                                <td>{{$bill->name}}</td>
                                <td>
                                    @isset($bill->phone_number){{$bill->phone_number}} @endisset
                                    @isset($bill->hour_number){{$bill->hour_number}} @endisset
                                    @isset($bill->counter_number){{$bill->counter_number}} @endisset
                                </td>
                                <td>{{$bill->course_number}}</td>
                                <td>{{$bill->relase_date }}</td>
                                <td>{{$bill->payment_date}}</td>
                                <td>{{$bill->amount_due_of_payment}}</td>
                                @isset($bill->phone_number)
                                   <td> <a href="{{route('archived.telecome.bills.view',[$bill->phone_number,$bill->course_number])}}"><button class="btn btn-outline-primary">@lang('site.Vision')</button></a></td>
                                @endisset()
                                @isset($bill->hour_number)
                                   <td><a href="{{route('archived.electricity.bills.view',[$bill->hour_number,$bill->course_number])}}"><button class="btn btn-outline-primary">@lang('site.Vision')</button></a></td>
                                @endisset()
                                @isset($bill->counter_number)
                                   <td><a href="{{route('archived.water.bills.view',[$bill->counter_number,$bill->course_number])}}"><button class="btn btn-outline-primary">@lang('site.Vision')</button></a></td>
                                @endisset()
                            </tr>

                            @endforeach
                            @endif()
                        </table>
                    </div>
                 </div>


         <div class="container col-xl-12 col-md-12 mb-12 card">

             <h5 class="card-header darken-1 text-center py-4">
                    <strong>@lang('site.archived_bill-rate')</strong>
                    <i class="fas fa-chart-line"></i>
             </h5>

            <div class="card-body">
                <div class="box-body border-radius-none">
                    <div class="chart" id="line-chart" style="height: 250px;"></div>
                </div>
            </div>

        </div>


    </div>

@endsection

@push('script')
    <script>

        var line = new Morris.Line({
            element: 'line-chart',
            resize: true,
            data: [
                    @if($code =='200')
                    @foreach ($statistic as $data)
                {
                    ym: "{{$data->relase_date }}", sum: "{{$data->amount_due_of_payment }}"
                },
                @endforeach
                @endif()
            ],
            xkey: 'ym',
            ykeys: ['sum'],
            labels: ['@lang("site.total")'],
            lineWidth: 2,
            hideHover: 'auto',
            gridStrokeWidth: 0.4,
            pointSize: 4,
            gridTextFamily: 'Open Sans',
            gridTextSize: 10,
            @isset(request()->phone_number)
            lineColors: ['#B29215'],
            @endisset()
                @isset(request()->hour_number)
            lineColors: ['#1AB244'],
            @endisset()
                @isset(request()->counter_number)
            lineColors: ['#1531B2'],
            @endisset()
        });
    </script>
@endpush
