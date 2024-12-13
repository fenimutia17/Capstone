<form method="POST" action="{{ route('skincare.recommend') }}">
    @csrf
    <input type="text" name="skin_type" placeholder="Skin Type" required>
    <input type="text" name="skin_condition" placeholder="Skin Condition" required>
    <button type="submit">Get Recommendation</button>
</form>
