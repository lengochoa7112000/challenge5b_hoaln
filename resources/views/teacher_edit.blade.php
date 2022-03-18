@extends('master')

@section('title','Teacher edit')

@section('content')

<p>This is teacher edit profile page</p>

@foreach ($member as $member)
<form action="{{ url('teacher_edit.php/edited') }}" method="POST" role="form">
{{ csrf_field()}}
<input type="hidden" name="id" value="{{ $member->id }}">
<table>
			<tr>
				<td>
					<h3>Edit information of students</h3>
				</td>
			</tr>
			<tr>
				<td>Username:</td>
                <td><input type="text" name="username" value="{{ $member->username }}"></td>
			</tr>
			<tr>
				<td>Password:</td>
                <td><input type="text" name="password" value="{{ $member->password }}"></td>
			</tr>
				<td>Full name:</td>
                <td><input type="text" name="fullname" value="{{ $member->fullname }}"></td>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" value="{{ $member->email }}"></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input type="text" name="phone" value="{{ $member->phone }}"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>

		</table>
</form>
@endforeach

@endsection