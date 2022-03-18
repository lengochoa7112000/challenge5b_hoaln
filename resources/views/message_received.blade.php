@extends('master')

@section('title','Message Received')

@section('content')

<p>This is message received page</p>
Secret Message from a secret person:<br>
@foreach ($member as $member)
<br>
<textarea type="text" name="message" rows="9" cols="70" disabled="">{{$member->message_to}}</textarea>
@endforeach

@endsection