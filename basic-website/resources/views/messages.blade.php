@extends('layout.app')

@section('content')
<table class="table table-bordered m-2">
    <thead>
        <th>Sr No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
    </thead>
    <tbody>
        @foreach($messages as $msg)
            <tr>
                <td>{{ $msg->id }}</td>
                <td>{{ $msg->name }}</td>
                <td>{{ $msg->email }}</td>
                <td>{{ $msg->subject }}</td>
                <td>{{ $msg->message }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
