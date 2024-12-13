<form method="POST" action="{{ route('feedback.submit') }}">
    @csrf
    <div>
        <label for="product">Product</label>
        <input type="text" id="product" name="product" required>
    </div>
    <div>
        <label for="user">User</label>
        <input type="text" id="user" name="user" required>
    </div>
    <div>
        <label for="feedback">Feedback</label>
        <textarea id="feedback" name="feedback" required></textarea>
    </div>
    <button type="submit">Submit Feedback</button>
</form>
<a href="{{ route('recommendations.form') }}">Back to Recommendations Form</a>
</body>
</html>