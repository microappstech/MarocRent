@extends('layout')
@section("title","Contact")
@section("content")
<div class="body">
<div class="contact-form">
    <h2>Contact Us</h2>
    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Submit</button>
    </form>
</div>
</div>
@endsection