@extends('layouts.app')

@section('content')
<div>
    <h1>Feedbacks</h1>
    <ul>
        @foreach ($feedbacks as $feedback)
            <li><strong>{{ $feedback->user }}</strong> ({{ $feedback->product }}): {{ $feedback->feedback }}</li>
        @endforeach
    </ul>
</div>
@endsection
