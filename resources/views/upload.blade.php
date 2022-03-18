@extends('master')

@section('title','Upload exercise teacher')

@section('content')

<p>This is upload exercises page for teacher</p>

<form action="" method="POST" enctype="multipart/form-data">
{{ csrf_field()}}
   <input type="file" name="file"><br> <br>
   <button type="submit" name="submit">Upload file</button>
</form>

@endsection