@extends('master')

@section('title','Message')

@section('content')

<p>This is message page</p>
@foreach ($member as $member)
<form action="{{$member->id}}/send" method="post">
{{ csrf_field()}}
<input type="hidden" name="id" value="{{$member->id}}">
        Message to {{$member->fullname}}
        <br>
        Write your message here:<br>
        <textarea type="text" name="message" rows="9" cols="70"></textarea>
        <br>
        <input type="submit" name="submit" value="Send">
</form>
@endforeach

@endsection