<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
        <th>Blogs</th>
    </tr>
    </thead>
    <tbody>
    @foreach($user as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->created_at }}</td>
            <td>{{ $u->blogs->count() }}</td>
        </tr>
    @endforeach
    </tbody>
</table>