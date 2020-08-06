@extends('layouts.app')

@section('title')

Trips App
    
@endsection

@section('content')

<div class="container border my-4" >
    <h4 class="text-center">Trip Details</h4>
    <div class="row justify-content-center">
        <div class="col-md-8">

      @foreach ($decoded_data->trips as $key => $value)    

         <div class="container border">
             <div class="row">
                <div class="col-md-6">
            Trips Details
                </div>
                <div class="col-md-6">
                  <div class="float-right">
                    {{-- <strong> wwwwwww KES</strong> --}}
                  </div>
                 </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    Request Time:<strong>{{$value->request_date}}</strong>
                </div>
                <div class="col-md-6">
                  <div class="float-right">
                    <strong> {{$value->cost}} KES</strong>
                  </div>
                 </div>
            </div>
            <br>
            <hr style="border: none; border-bottom: 2px solid black;">
            <div class="row">
                <div class="col-md-6">
                  Pickup Time: <strong> {{$value->pickup_location}}</strong>
                </div>
                <div class="col-md-6">
                  <div class="float-right">
                    <strong>  {{$value->pickup_date}}</strong>
                  </div>
                 </div>
            </div>
         <br>

         <div class="row">
            <div class="col-md-6">
              Dropoff Time <strong> {{$value->dropoff_location}}</strong>
            </div>
            <div class="col-md-6">
              <div class="float-right">
             <strong> {{$value->dropoff_date}}</strong>
              </div>
             </div>
        </div>
        <hr style="border: none; border-bottom: 2px solid black;">
        <br>
        <br>
        <div class="row">
            <div class="col-md-3">
            
                <img src=" {{$value->car_pic}}" class="css-class" alt="alt text" height="70" width="100">
            
                {{$value->car_make}} 
            </div>
            <div class="col-md-3">
                Distance<br/>
               Duration<br/>
               Sub Total<br/>
            </div>
            <div class="col-md-3">
               <strong>{{$value->distance}} km</strong><br/>
               <strong>{{$value->duration}} min  </strong><br/>
               Driver Name: <strong>{{$value->cost}} KES</strong>
             </div>
             <div class="col-md-3">
            Driver Name: <strong>{{$value->driver_name}}</strong>
            <img src=" {{$value->driver_pic}}" class="css-class" alt="alt text" height="40" width="70">
            </div>
        </div>


        <div>
            <iframe src="https://maps.google.com/maps?q='+{{$value->pickup_lat}}+','+{{$value->pickup_lng}}+'&hl=en&z=14&amp;output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>


         <br>
         </div>
         <hr style="border: none; border-bottom: 2px solid red;">
         <hr style="border: none; border-bottom: 2px solid red;">
      @endforeach
        </div>
    </div>
</div>

@endsection   
