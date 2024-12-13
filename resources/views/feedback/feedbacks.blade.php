<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback and Reviews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .feedback-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .feedback-card p {
            margin: 5px 0;
        }
        .feedback-card strong {
            color: #333;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Feedback and Reviews</h1>

    @if ($feedbacks && $feedbacks->isNotEmpty())
        @foreach ($feedbacks as $feedback)
            <div class="feedback-card">
                <p><strong>Product Category:</strong> {{ $feedback->product }}</p>
                <p><strong>Skin Type:</strong> {{ $feedback->skin_type }}</p>
                <p><strong>Condition:</strong> {{ $feedback->conditions }}</p>
                <p><strong>Rating:</strong> {{ $feedback->rating }} / 5</p>
                <p><strong>Review:</strong> {{ $feedback->review }}</p>
            </div>
        @endforeach
    @else
        <p>No feedbacks available yet.</p>
    @endif

    <br>
    <a href="{{ route('recommendation.form') }}">Back to Recommendation Form</a>
</body>
</html>
