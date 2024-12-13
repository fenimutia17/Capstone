<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlowGenius Form</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>GlowGenius Recommendation Form</h1>

    <form method="POST" action="{{ route('recommendations.process') }}">
        @csrf
        <label for="Products">Products:</label>
        <select name="Product" id="Product">
            <option value="Face Wash">Face Wash</option>
            <option value="Toner">Toner</option>
            <option value="Moisturizer">Moisturizer</option>
            <option value="Sunscreen">Sunscreen</option>
        </select>
        <br><br>
        <label for="skin_type">Skin Type:</label>
        <select name="skin_type" id="skin_type">
            <option value="Oily">Oily</option>
            <option value="Dry">Dry</option>
            <option value="Combination">Combination</option>
            <option value="Sensitive">Sensitive</option>
        </select>
        <br><br>
        <label for="skin_conditions">Skin Conditions:</label>
        <select name="sin_conditions" id="skin_conditions">
            <option value="acne">acne</option>
            <option value="kusam">kusam</option>
            <option value="komedo">komedo</option>
            <option value="flek hitam">flek hitam</option>
        </select>
        <br><br>
        <button type="submit">Get Recommendations</button>
    </form>
</body>
</html>
