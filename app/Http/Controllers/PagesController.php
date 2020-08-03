<?php

namespace App\Http\Controllers;
use App\Events;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        
        $events =Events::orderBy('event_date','asc')->paginate(20);
        return view('pages.index')->with('events', $events);
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
           'Name' => 'required',
           'Data' => 'required'
       ]);

   
    $post = new Events;
    $post->event_name=$request->input('Name');
    $post->event_date=$request->input('Data');
    $post->annual=$request->input('checkbox');
    
    try {
        
    $post->save();
    
    } catch (Exception $e) {
        return redirect('/')->with('error', $e->getMessage());
    } 

    
    
    

    return redirect('/')->with('success','Event Created');
    }
}
