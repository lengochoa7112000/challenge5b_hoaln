@extends('master')

@section('title','Upload challenge teacher')

@section('content')

<p>This is upload challenges page for teacher</p>

<form action="" method="POST" enctype="multipart/form-data">
{{ csrf_field()}}
Description of challenge:<br>
<textarea type="text" name="challenge_description" rows="9" cols="70"></textarea><br>
   <input type="file" name="file"><br> <br>
   <button type="submit" name="submit">Upload file</button>
</form>

@endsection