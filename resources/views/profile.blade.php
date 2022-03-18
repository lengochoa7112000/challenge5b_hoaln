@extends('master')

@section('title','Profile')

@section('content')

<p>This is profile page</p>
<style type="text/css">
        table, th, td{
            border:1px solid #868585;
        }
        table{
            border-collapse:collapse;
            width:100%;
        }
        th, td{
            text-align:center;
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
@foreach ($member as $member)
<table>
			<tr>
				<td>
					<h3>Profile</h3>
				</td>
			</tr>
			<tr>
				<td>Username:</td>
                <td>{{ $member->username }}</td>
			</tr>
			<tr>
				<td>Password:</td>
                <td>{{ $member->password }}</td>
			</tr>
				<td>Full name:</td>
                <td>{{ $member->fullname }}</td>
			<tr>
				<td>Email:</td>
				<td>{{ $member->email }}</td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td>{{ $member->phone }}</td>
			</tr>
		</table>
		<a href="../edit_profile.php/{{$member->id}}">Edit</a>
@endforeach

@endsection