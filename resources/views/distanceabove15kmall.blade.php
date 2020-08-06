
@extends('layouts.app')

@section('title')

Trips App
    
@endsection

@section('content')

<div class="container border my-4" >
    <div class="card">
        <h3 class="text-center my-5">Trip Search results</h3>
    </div>
    <h4 class="text-center">Complete and Cancelled Trips above 15km</h4>
    <div class="row justify-content-center">
        <div class="col-md-8">

      @foreach ($decoded_data->trips as $key => $value) 
       @if($value->distance >'15' && $value->duration >'20')     

         <div class="container border">
             <div class="row">
                <div class="col-md-6">
                 {{$value->request_date}}
                </div>
                <div class="col-md-6">
                  <div class="float-right">
                  <strong> {{$value->cost}} KES</strong>
                  </div>
                 </div>
            </div>
            <div class="float-right">
              Ratings : {{  $value->driver_rating}}
            </div>
            <br>
            <div class="float-left">
                <i class="fa fa-circle" aria-hidden="true" style="color:#02FC06";></i>
                {{$value->pickup_location}}
            </div>
            <br>
            <br>
         <div class="location">
            <i class="fa fa-circle" aria-hidden="true"  style="color:#FA3106;"></i>
            {{$value->dropoff_location}}
         </div>
         <br>
         <div class="col-md-10">
         <div class="float-right">
            @if($value->status =='COMPLETED')
                {{$value->status}}
                <i class="fa fa-check" aria-hidden="true"  style="color:#02FC06;"></i>
            @else 
              <div class="text-danger">
                {{$value->status}}
                <i class="fa fa-ban" aria-hidden="true" style="color:#FA3106;"></i>      
              </div>         
            @endif
         </div>
         <br>
         </div>
         <br>
         </div>

         @endif
         @endforeach
        </div>
    </div>
</div>

@endsection   

       