@extends('layouts.app')

@section('content')
<h1>{{ $skincareProduct->name }}</h1>
<p>{{ $skincareProduct->description }}</p>
<p>Price: ${{ $skincareProduct->price }}</p>

<h2>Feedback</h2>
@foreach ($skincareProduct->feedback as $feedback)
    <div>
        <p>{{ $feedback->comment }} - Rating: {{ $feedback->rating }}</p>
        <p>By User ID: {{ $feedback->user_id }}</p>
    </div>
@endforeach

@if (auth()->check())
    <form method="POST" action="/product/{{ $skincareProduct->id }}/feedback">
        @csrf
        <textarea name="comment" placeholder="Write your feedback"></textarea>
        <input type="number" name="rating" min="1" max="5" placeholder="Rating">
        <button type="submit">Submit Feedback</button>
    </form>
@endif
@endsection
