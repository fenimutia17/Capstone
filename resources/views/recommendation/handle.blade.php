<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendations</title>
</head>
<body>
    <h1>Get Skincare Recommendations</h1>
    <form action="{{ route('recommendations.handle') }}" method="POST">
        @csrf
        <label for="product">Product:</label>
        <input type="text" name="product" id="product" required><br>

        <label for="skinType">Skin Type:</label>
        <select name="skinType" id="skinType" required>
            <option value="Oily">Oily</option>
            <option value="Dry">Dry</option>
            <option value="Sensitive">Sensitive</option>
            <option value="Combination">Combination</option>
        </select><br>

        <label for="skinConditions">Skin Conditions:</label>
        <input type="text" name="skinConditions" id="skinConditions" required><br>

        <button type="submit">Get Recommendations</button>
    </form>

    @if ($data)
        <h2>Recommendation Result</h2>
        <p><strong>Product:</strong> {{ $data['product'] }}</p>
        <p><strong>Skin Type:</strong> {{ $data['skinType'] }}</p>
        <p><strong>Skin Conditions:</strong> {{ $data['skinConditions'] }}</p>
        <p><strong>Result:</strong> {{ $data['result'] }}</p>
    @endif
</body>
</html>
