<FORM method="POST" action="/customers/update"> 
    @csrf <input type="hidden" name="id" value="{{$customer->id}}"> 
    Enter your first name:<input type="text" name="firstname" value="{{$customer->firstname}}"><br> 
    Enter your surname:<input type="text" name="surname" value="{{$customer->surname}}"><br> <input type="submit"> 
    Enter your username: <input type="text" name="username" value="{{$customer->username}}"><br> <!-- Existing username field -->
    Enter your password: <input type="password" name="password"><br> <!-- New field for password -->
</FORM> 
