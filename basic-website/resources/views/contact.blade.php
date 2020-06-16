@extends('layout.app')

@section('content')
<h1>Contact Us</h1>

<form method="post" action="{{ route('contact-form-submit') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"
            aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Subject">
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="message" rows="2" class="form-control">
       </textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
