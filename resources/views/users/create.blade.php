
    <h2>Create User</h2>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <input type="text" placeholder="Name" id="name" name="name" required>
        <input type="email" placeholder="Email" id="email" name="email" required>
        <input type="password" placeholder="Password" id="password" name="password"  required>
        <button type="submit">Create User</button>
    </form>
