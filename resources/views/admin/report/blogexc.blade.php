<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Created At</th>
        <th>Comments</th>
        <th>Countries</th>
    </tr>
    </thead>
    <tbody>
    @foreach($blog as $b)
        <tr>
            <td>{{ $b->id }}</td>
            <td>{{ $b->title }}</td>
            <td>{{ $b->user->name }}</td>
            <td>{{ $b->created_at }}</td>
            <td>{{ $b->comments->count() }}</td>
            <td>{{ $b->countries }}</td>
        </tr>
    @endforeach
    </tbody>
</table>