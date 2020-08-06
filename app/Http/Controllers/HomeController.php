<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('home');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function search(Request $request)
    {  
        $client = new \GuzzleHttp\Client();
        $link = "https://hr.hava.bz/trips/recent.json";
        $response = $client->get($link);
        $data = $response->getBody()->getContents();
        $decoded_data = json_decode($data);
        // dd($decoded_data);

    // $data= $request->all();
    // dd($data);

    $searchItem = $request->get('entersearch_item');
    // dd($searchItem);
    $tripsCancelled = $request->get('trips');
    // dd( $tripsCancelled);
    $distance = $request->get('distance');
    $time = $request->get('time');

    if( !empty($searchItem)) {

        if(isset($searchItem)){
            return view('searchItems' , compact('decoded_data', 'searchItem'));

        }

   }
   elseif( $searchItem == null && $tripsCancelled == 'cancelled_trips'&& $distance == 'distanceabove_15km' 
       && $time == 'timeabove_20min') {
        return view('distanceabove15kmall' , compact('decoded_data'));
     
   }elseif( $searchItem == null && $distance == 'distanceabove_15km' && $time == 'timeabove_20min') {
    return view('distanceabove15kmcomplete' , compact('decoded_data'));
     
   }
    elseif($searchItem == null  && $tripsCancelled == 'cancelled_trips'  && $distance == 'distancebtw_8_15km' 
      && $time == 'timebtw_10_20min') {
        return view('distanceunder15kmall' , compact('decoded_data'));
   } 
   elseif($searchItem == null && $distance == 'distancebtw_8_15km' && $time == 'timebtw_10_20min') {
    return view('distanceunder15kmcomplete' , compact('decoded_data'));

  }
   elseif( $searchItem == null && $tripsCancelled == 'cancelled_trips' && $distance == 'distancebtw_3_8km' && $time == 'timebtw_5_10min') {
      return view('distanceunder8kmall' , compact('decoded_data'));    
 
    }
    elseif($searchItem == null && $distance == 'distancebtw_3_8km' && $time == 'timebtw_5_10min') {
         return view('distanceunder8kmcomplete' , compact('decoded_data')); 
     
   }
    elseif( $searchItem == null && $tripsCancelled == 'cancelled_trips' 
     && $distance == 'distanceunder3km' && $time == 'timeunder5min') {
    
      return view('distanceunder3kmall' , compact('decoded_data'));    
     
   }
     elseif( $searchItem == null && $distance == 'distanceunder3km' && $time == 'timeunder5min') {

        return view('distanceunder3kmcomplete' , compact('decoded_data'));
 
   }
    elseif( $searchItem == null && $tripsCancelled == 'cancelled_trips' 
     && $distance == 'distanceany' && $time == 'timeany') {
     
        return view('anydistanceresultsall' , compact('decoded_data'));
        
    }  elseif( $searchItem == null && $distance == 'distanceany' && $time == 'timeany') {
     
        return view('anydistanceresultscomplete' , compact('decoded_data'));
        
    }
     elseif( $searchItem == null && $tripsCancelled == 'cancelled_trips') {

        return view('completeandcancelledresults' , compact('decoded_data'));
    } 
    elseif($searchItem == null){
        return view('completeresults' , compact('decoded_data'));
    }
    elseif($searchItem == null && $distance == 'distanceany' ){
        return 'time';
    }

   

   
    // return view('tripsearchresults' , compact('decoded_data'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showtrips(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $link = "https://hr.hava.bz/trips/recent.json";
        $response = $client->get($link);
        $data = $response->getBody()->getContents();
        $decoded_data = json_decode($data);
        
        return view('tripdetails', compact('decoded_data'));
    }
    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
