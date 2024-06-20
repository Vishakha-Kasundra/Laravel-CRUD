<table>
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Sub_Title</td>
        <td>Body_Content</td>
        <td>View</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>

        @foreach ($datum as $mydatum )
        <tr>
        <td>{{ $mydatum->id }}</td>
        <td>{{ $mydatum->Title }}</td>
        <td>{{ $mydatum->Sub_Title }}</td>
        <td>{{ $mydatum->Body_Content }}</td>

        <td>
        <a href="{{ route('user.show', $mydatum->id) }}">
            <button type="submit" style="margin-top:-15">View</button></a>
        </td>
        <td>
        <a href="{{ route('user.edit', $mydatum->id) }}" >
            <button type="submit" style="margin-top:-15">Edit</button>
        </a>
        </td>
        <td> <form action="{{ route('user.destroy', $mydatum->id) }}" method="post" >
            @csrf
            @method('delete')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
        </form></td>
    </tr>
        @endforeach

</table>

