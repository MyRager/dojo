@if(count($events)>1)

<ul class="list-group">
@foreach($events as $event)
    
<li class="list-group-item d-flex justify-content-between align-items-center">
    {{$event->event_name}}
   @if($event->annual==1) 
   <span class="badge badge-primary badge-pill">annual</span>
   @endif
  </li>


@endforeach

@else
<p> No Event Found </p>
@endif