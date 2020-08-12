@extends('layouts.client.app')
@section('title',__('site.Water_Bill'))
@section('content')

<!-- table -->
<div class="card mt-5">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">@lang('site.WC') <i class="fas fa-tint"></i></h3>
  <div class="card-body">
    <div id="table" class="table-editable">
    
      <table class="table table-bordered z-depth-5 table-responsive-lg table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">@lang('site.Counter_number')</th>
            <th class="text-center">@lang('site.Course_number')</th>
            <th class="text-center">@lang('site.Name')</th>
            <th class="text-center">@lang('site.Release_Date')</th>
            <th class="text-center">@lang('site.Next_release_date')</th>

            @isset($bill->receipt_id)
            <th class="text-center">@lang('site.Payment_Date')</th>
            @endisset()
           
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="pt-3-half" >{{$bill->counter_number}}</td>
            <td class="pt-3-half" >{{$bill->course_number}}</td>
            <td class="pt-3-half" >{{$bill->name}}</td>
            <td class="pt-3-half" >{{$bill->relase_date}}</td>
            <td class="pt-3-half" >{{$bill->next_relase_date}}</td>

            @isset($bill->receipt_id)
            <td class="pt-3-half" >{{$bill->payment_date}}</td>
            @endisset()
            
          </tr>
          <tr>
            <th class="text-center">@lang('site.Amount_of_consumption')</th>
            <th class="text-center">@lang('site.The_amount_payable')</th>
            <th class="text-center">@lang('site.city')</th>
            <th class="text-center">@lang('site.country')</th>
            <th class="text-center">@lang('site.street')</th>
            @isset($bill->receipt_id)
            <th class="text-center">@lang('site.Payment_receipt_number')</th>
            @endisset()
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="pt-3-half" >{{$bill->amount_of_consumption}}</td>
            <td class="pt-3-half" >{{$bill->amount_due_of_payment}}</td>
            <td class="pt-3-half" >{{$bill->city}}</td>
            <td class="pt-3-half" >{{$bill->area}}</td>
            <td class="pt-3-half" >{{$bill->street}}</td>
            @isset($bill->receipt_id)
            <td class="pt-3-half" >{{$bill->receipt_id}}</td>
            @endisset()
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--End table -->


<!-- table -->
@isset($bill->receipt_id)
<div class="card mt-5">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">@lang('site.Payment_receipt_information') <i class="fas fa-info-circle"></i></h3>
  <div class="card-body">
    <div id="table" class="table-editable">
    
      <table class="table table-bordered z-depth-5 table-responsive-lg table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">@lang('site.value_bill')</th>
            <th class="text-center">@lang('site.Date_created')</th>
            <th class="text-center">@lang('site.Invoice_type')</th>
            <th class="text-center">@lang('site.Receipt_number')</th>
            <th class="text-center">@lang('site.private_number')</th>
            <th class="text-center">@lang('site.Course_number')</th>
            <th class="text-center">@lang('site.name_motive')</th>
           
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="pt-3-half" >{{$receipt->value}}</td>
            <td class="pt-3-half" >{{$receipt->relase_date}}</td>
            <td class="pt-3-half" >{{$receipt->bill_type}}</td>
            <td class="pt-3-half" >{{$receipt->id}}</td>
            <td class="pt-3-half" >{{$receipt->number}}</td>
            <td class="pt-3-half" >{{$receipt->course_number}}</td>
            <td class="pt-3-half" >{{$receipt->name_payment}}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endisset()
<!--End table -->
<div class="text-left">
    <a href="{{url()->previous()}}" class="btn btn-outline-primary ">@lang('site.back')</a>
</div>



   
@endsection()
