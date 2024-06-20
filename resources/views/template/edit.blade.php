<form action="{{route('user.edit',$user->id)  }}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Title</label>
    <input type="text" name="Title" value="{{ $user->Title }}"><br><br>
    <label for="">Sub_Title</label>
    <input type="text" name="Sub_Title" value="{{ $user->Sub_Title }}"><br><br>
    <label for="">Body_Content</label>
    <input type="text" name="Body_Content" value="{{ $user->Body_Content }}"><br><br>

    <button type="submit">Submit</button>
</form>

