<form method="POST" action="{{ route('password.update') }}">
    @csrf
    @method('PUT')

    <!-- Current Password -->
    <div>
        <label for="current_password">Password Saat Ini</label>
        <input id="current_password" type="password" name="current_password" required>
    </div>

    <!-- New Password -->
    <div>
        <label for="password">Password Baru</label>
        <input id="password" type="password" name="password" required>
    </div>

    <!-- Confirm New Password -->
    <div>
        <label for="password_confirmation">Konfirmasi Password Baru</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <button type="submit">Update Password</button>
</form>
