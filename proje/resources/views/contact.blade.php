@extends('layout')

@section('main')
    <h2>Get in Touch</h2>
    <p>If you have any questions, feel free to reach out to us by filling out the form below.</p>

    <form action="#" method="POST">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Your Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
    </form>
@endsection


