@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
          <h3>Messages</h3>
            @if(count($messages)>0)
            @foreach($messages as $message)
            <ul class="list-group">
              <li class="list-group-item">Name: {{$message->name}}</li>
              <li class="list-group-item">Email: {{$message->email}}</li>
              <li class="list-group-item">Message: {{$message->message}}</li>
            </ul>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
