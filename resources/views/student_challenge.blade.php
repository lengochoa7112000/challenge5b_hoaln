@extends('master')

@section('title','Challenge')

@section('content')

<p>This is challenge page</p>

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
<form action="student_challenge.php" method="post">
{{ csrf_field()}}
                    <table>
                        <thead>
                            <tr>
                                <th>Challenge Description</th>
                                <th>Submit your answer</th>
                            </tr>
                        </thead>
@foreach ($challenge as $challenge)
                            <tr>
                                <td>{{ $challenge->challenge_description }}</td>
                                <td>
                                    <input type="text" name="answer" size="20">
                                    <input type="submit" name="submit" value="Submit">
                                </td>
                            </tr>
@endforeach
                    </table>
</form>
@endsection