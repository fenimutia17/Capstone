<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendation & Feedback</title>
    <style>
        body {
            background-color: pink;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
        }
        input, textarea, select, button {
            width: 100%;
            margin-top: 5px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Skincare Recommendation</h1>

        <!-- Form Rekomendasi -->
        <form method="POST" action="{{ route('getRecommendation') }}">
            @csrf
            <div class="form-group">
                <label for="input_data">Masukkan Data untuk Rekomendasi:</label>
                <input type="text" id="input_data" name="input_data" required>
            </div>
            <button type="submit">Get Recommendation</button>
        </form>

       <!-- Hasil Rekomendasi -->
@if (session('recommendedProduct'))
    <div>
        <h3>Hasil Rekomendasi:</h3>
        <p>{{ session('recommendedProduct') }}</p>
    </div>


        <!-- Form Feedback -->
        <form method="POST" action="{{ route('feedback.submit') }}">
            @csrf
            <input type="hidden" name="recommendation" value="{{ $recommendation }}">
            <div class="form-group">
                <label for="rating">Rate the Recommendation:</label>
                <select name="rating" id="rating" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
            </div>
            <div class="form-group">
                <label for="review">Your Feedback:</label>
                <textarea name="review" id="review" rows="3" required></textarea>
            </div>
            <button type="submit">Submit Feedback</button>
        </form>
        @endif

        <!-- Daftar Feedback -->
        @if (isset($feedbackList) && count($feedbackList) > 0)
        <div class="form-group">
            <h2>Feedback List:</h2>
            @foreach ($feedbackList as $feedback)
            <div>
                <p><strong>Rating:</strong> {{ $feedback->rating }}</p>
                <p><strong>Review:</strong> {{ $feedback->review }}</p>
                <hr>
            </div>
            @endforeach
        </div>
        @else
        <p>No feedback available.</p>
        @endif
    </div>
</body>
</html>
