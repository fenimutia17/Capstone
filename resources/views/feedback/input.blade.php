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
