<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
    <h1>Feedback Form</h1>
    <form action="{{ route('feedback.submit') }}" method="POST">
        @csrf
        <label for="product">Product:</label>
        <input type="text" id="product" name="product" required><br>

        <label for="skin_type">Skin Type:</label>
        <input type="text" id="skin_type" name="skin_type" required><br>

        <label for="conditions">Conditions:</label>
        <input type="text" id="conditions" name="conditions"><br>

        <label for="rating">Rating:</label>
        <input type="number" id="rating" name="rating" min="1" max="5" required><br>

        <label for="review">Review:</label>
        <textarea id="review" name="review"></textarea><br>

        <button type="submit">Submit Feedback</button>
    </form>
</body>
</html>
