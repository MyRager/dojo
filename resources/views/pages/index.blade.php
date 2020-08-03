@extends('layouts.app')

@section('content')


    
    <nav class="navbar navbar-light bg-light">
        {!! Form::open(['action' => 'PagesController@store','method'=>'POST']) !!}
        <div class="form-inline">
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text" id="Data">Data</span>
            </div>
            {{Form::text('Data','',['class'=>'form-control','placeholder'=>'gg/mm/aaaa','aria-label'=>'Data','aria-describedby'=>'Data'])}}
            <div class="input-group-prepend">
                <span class="input-group-text" id="Name">Event</span>
            </div>
            {{Form::text('Name','',['class'=>'form-control','placeholder'=>'Event Name...','aria-label'=>'Name','aria-describedby'=>'Name'])}}
            <div class="form-check form-check-inline">
                <label for="checkbox" class="form-check-input">-  every year?  </label>
                {{Form::checkbox('checkbox','',['class'=>'form-check-input'])}}
            </div>
            {{Form::submit('Submit',['class'=>'btn btn-outline-success my-2 my-sm-0'])}}
           
        </div>
        
    </div>
        {!! Form::close() !!}
    </nav>
    @if(count($events)>0)

<ul class="list-group">
@foreach($events as $event)
    
<li class="list-group-item">
    <h6>{{date("F j, Y", strtotime($event->event_date))}} :</h6>
    <h5>{{$event->event_name}} 
        @if($event->annual==1) <span class="badge badge-secondary">every year</span> @endif 
    </h5>
</li>
@endforeach
{{$events->links()}}
@else
<p> No Event Found </p>
@endif
  








@endsection