<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User CRUD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }

        h1,
        h2 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        input,
        button {
            margin: 5px 0;
            padding: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>User CRUD</h1>

    <section id="create-user">
        <h2>Create User</h2>
        <form>
            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Create User</button>
        </form>
        {{-- bton de recuperar  --}}
        <form action="{{ route('users.restore') }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit">Restore User</button>
        </form>
    </section>

    <section id="read-users">
        <h2>User List</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                             <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                             <form action="{{ route('users.destroy', $user->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <section id="update-user">
        <h2>Update User</h2>
        <form>
            <input type="hidden" value="1">
            <input type="text" placeholder="Name" value="John Doe" required>
            <input type="email" placeholder="Email" value="john@example.com" required>
            <input type="password" placeholder="New Password">
            <button type="submit">Update User</button>
        </form>
    </section>

    <section id="delete-user">
        <h2>Delete User</h2>
        <p>Are you sure you want to delete the user "John Doe"?</p>
        <button onclick="alert('User deleted')">Confirm Delete</button>
        <button onclick="alert('Deletion cancelled')">Cancel</button>
    </section>
</body>

</html>
