@extends('master')

@section('title','Index')

@section('content')

<p>This is index page</p>
<a href="member.php">Member</a>
<br>
<a href="upload.php">Upload exercise (For teacher only)</a>
<br>
<a href="view_submit_exercise.php">View submit exercise (For teacher only)</a>
<br>
<a href="upload_challenge.php">Upload challenge (For teacher only)</a>
<br>
<a href="exercise.php">Exercises (For student)</a>
<br>
<a href="student_challenge.php">Challenges (For student)</a>
<br>

@endsection