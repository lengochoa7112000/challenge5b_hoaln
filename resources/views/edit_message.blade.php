@extends('master')

@section('title','Edit Message')

@section('content')

<p>This is edit message page</p>
@foreach ($member as $member)
<form action="{{$member->id}}/edit" method="post">
{{ csrf_field()}}
<input type="hidden" name="id" value="{{$member->id}}">
        Message to {{$member->fullname}}
        <br>
        Edit your message here:<br>
        <textarea type="text" name="message" rows="9" cols="70">{{$member->message_to}}</textarea>
        <br>
        <input type="submit" name="submit" value="Send">
</form>
@endforeach

@endsection