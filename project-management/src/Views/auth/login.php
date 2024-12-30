<form action="/login" method="POST">
    <h2>Login</h2>
    <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <button type="submit">Login</button>
    </div>
    <div>
        <p>Don't have an account? <a href="/register">Register here</a></p>
    </div>
</form>