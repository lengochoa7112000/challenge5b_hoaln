@extends('master')

@section('title','Member')

@section('content')

<p>Member</p>
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
        table tr:nth-child(1){
            background-color:#4CAF50;
        }
</style>
                    <table>
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Action for teacher</th>
                                <th>Action for student</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                            @foreach ($member as $member)
                            <tr>
                                <td>{{ $member->username }}</td>
                                <td>{{ $member->fullname }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->phone }}</td>
                                <td>{{ $member->role }}</td>
                                <td>
                                    <a href="teacher_edit.php/{{$member->id}}">Edit</a>
                                </td>
                                <td>
                                    <a href="profile.php/{{$member->id}}">View profile</a>
                                    <br>
                                    <a href="message_received.php/{{$member->id}}">View message</a>
                                </td>
                                <td>
                                    <a href="message.php/{{$member->id}}">Write</a>
                                    <br>
                                    <a href="edit_message.php/{{$member->id}}">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                    </table>

@endsection