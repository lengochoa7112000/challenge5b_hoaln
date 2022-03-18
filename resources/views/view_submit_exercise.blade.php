@extends('master')

@section('title','View SubmitExercises')

@section('content')

<p>This is view submit exercises page for teacher</p>

<style type="text/css">
        table, th, td{
            border:1px solid #868585;
        }
        table{
            border-collapse:collapse;
            width:100%;
        }
        th, td{
            text-align:left;
            padding:10px;
        }
        table tr:nth-child(odd){
            background-color:#eee;
        }
        table tr:nth-child(even){
            background-color:white;
        }
</style>
                    <table>
                        <thead>
                            <tr>
                                <th>Submit Exercise</th>
                                <th>Action</th>
                            </tr>
                        </thead>
@foreach ($submit_exercise as $submit_exercise)
                            <tr>
                                <td>{{ $submit_exercise->submit_exercise_location }}</td>
                                <td><a href="view_submit_exercise.php/{{ $submit_exercise->submit_exercise_location }}">Download</a></td>
                            </tr>
@endforeach
                    </table>
@endsection