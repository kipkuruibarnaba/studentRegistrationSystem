
@extends('layouts.app')

@section('title')

Trips App
    
@endsection

@section('content')

<div class="container border my-4" >
    <h1 class="text-center my-5">Trip Search</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <hr style="border: none; border-bottom: 2px solid black;">
            <br>
                  Keyword
         <div class="col text-center">
    
         <form action="{{url('search')}}" method="POST">
             @csrf
                <!-- Search form -->
            <div class="">
                <input class="form-control" type="text" name="entersearch_item"  placeholder="Search" aria-label="Search">
            </div>
             <br>
             <div class="form-check float-left">
              <input class="form-check-input" type="checkbox" name="trips" value="cancelled_trips">
              <label class="form-check-label" for="defaultCheck1">
                Include cancelled trips
              </label>
             </div>
             <br>
             <div class="row">
              <div class="col-md-6">
                <div class="">
                   <strong>  Distance</strong>
                </div>
              </div>
              <div class="col-md-6">
                <div class="">
                  <strong>Time</strong>
                  </div>
              </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="distance" id="distance" value="distanceany" aria-label="...">
                        <label class="form-check-label" for="exampleRadios2">
                            Any
                          </label>
                    </div>
                </div>
                <div class="col-md-6">                 
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="time" id="time" value="timeany">
                      <label class="form-check-label" for="exampleRadios2">
                        Any
                      </label>
                    </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="distance" id="distance" value="distanceunder3km" aria-label="...">
                        <label class="form-check-label" for="exampleRadios2">
                            Under 3 km
                          </label>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="time" id="time" value="timeunder5min">
                      <label class="form-check-label" for="exampleRadios2">
                         Under 5 min
                      </label>
                    </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="distance" id="distance" value="distancebtw_3_8km" aria-label="...">
                        <label class="form-check-label" for="exampleRadios2">
                            3 to 8 km
                          </label>
                    </div>
                </div>
                <div class="col-md-6">                 
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="time" id="time" value="timebtw_5_10min">
                      <label class="form-check-label" for="exampleRadios2">
                        5 to 10 min
                      </label>
                    </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="distance" id="distance" value="distancebtw_8_15km" aria-label="...">
                        <label class="form-check-label" for="exampleRadios2">
                        8 to 15 km
                          </label>
                    </div>
                </div>
                <div class="col-md-6">                 
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="time" id="time" value="timebtw_10_20min">
                      <label class="form-check-label" for="exampleRadios2">
                        10 to 20 min
                      </label>
                    </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="distance" id="distance" value="distanceabove_15km" aria-label="...">
                        <label class="form-check-label" for="exampleRadios2">
                      More than 15 km
                          </label>
                    </div>
                </div>
                <div class="col-md-6">                 
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="time" id="time" value="timeabove_20min">
                      <label class="form-check-label" for="exampleRadios2">
                        More than 20 min
                      </label>
                    </div>
                </div>
              </div>

              <hr style="border: none; border-bottom: 2px solid black;">

              <div class="">
                  <button class="btn btn-success " type="submit">Search</button>
             </div> 
    
            </form>
         </div>
    
        </div>
    </div>

</div>

@endsection   

       