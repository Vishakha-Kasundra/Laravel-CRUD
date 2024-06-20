{{--  <form action="{{route('user.store')  }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="Name"><br><br>
    <label for="">City</label>
    <input type="text" name="City"><br><br>

    <button type="submit">Submit</button>
    </form>
 --}}

    <h4>Title</h4>
<h6>{{$user->Title}}</h6>
<h4>Sub_Title</h4>
<h6>{{$user->Sub_Title}}</h6>
<h4>Body_Content</h4>
<h6>{{$user->Body_Content}}</h6>
