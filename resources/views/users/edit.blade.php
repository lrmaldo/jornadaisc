<h2>Edit User</h2>
<form action="{{ route('users.update',$user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" placeholder="Name" id="name" name="name" value="{{ $user->name }}" required>
    <input type="email" placeholder="Email" id="email" name="email"  value="{{ $user->email }}" required>
    <input type="password" placeholder="Password" id="password" name="password"  >
    <button type="submit">Actualizar User</button>
</form>
