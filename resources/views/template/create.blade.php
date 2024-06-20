
<form action="{{route('user.store')  }}" method="POST">
    @csrf
    <label for="">Title</label>
    <input type="text" name="Title"><br><br>
    <label for="">Sub_Title</label>
    <input type="text" name="Sub_Title"><br><br>
    <label for="">Body_Content</label>
    <input type="text" name="Body_Content"><br><br>
    <button type="submit">Submit</button>
</form>
