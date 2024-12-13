<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Recommendation Result</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Recommendation Result</h1>

    <p><strong>Product:</strong> {{ $product }}</p>
    <p><strong>Skin Type:</strong> {{ $skinType }}</p>
    <p><strong>Skin Conditions:</strong> {{ $skinconditions }}</p>
    <p><strong>Recommended Product:</strong> {{ $recommendedProduct }}</p>

    <a href="{{ route('recommendations.form') }}">Back to Form</a>

    <form method="POST" action="{{ route('feedback.submit') }}">
    @csrf
    <textarea name="recommendation" placeholder="Recommendation" readonly>{{ session('recommendation') }}</textarea>
    <select name="rating" required>
        <option value="1">1 - Poor</option>
        <option value="2">2 - Fair</option>
        <option value="3">3 - Good</option>
        <option value="4">4 - Very Good</option>
        <option value="5">5 - Excellent</option>
    </select>
    <textarea name="review" placeholder="Your Feedback" required></textarea>
    <button type="submit">Submit Feedback</button>
</form>

</body>
</html>
