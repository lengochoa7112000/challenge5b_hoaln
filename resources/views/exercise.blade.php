@extends('master')

@section('title','Exercises')

@section('content')

<p>This is exercises page</p>

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
                                <th>Exercise</th>
                                <th>Action</th>
                                <th>Submite exercise</th>
                            </tr>
                        </thead>
@foreach ($exercise as $exercise)
                            <tr>
                                <td>{{ $exercise->exercise_location }}</td>
                                <td><a href="exercise.php/{{ $exercise->exercise_location }}">Download</a></td>
                                <td><a href="submit_exercise.php">Upload</a></td>
                            </tr>
@endforeach
                    </table>
@endsection