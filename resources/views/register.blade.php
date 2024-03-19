<x-layout>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->

    <form action="/register" method="post">
        @csrf
        <h1>Register</h1>

<div>

<label for="">Name</label>
<input type="text">
@error('name')
   <p>{{ $message }} </p>
@enderror

</div>


 <div>

<label for="">Email</label>
<input type="text" name="email">
    @error('email')
   <p>{{ $message }} </p>
    @enderror

 </div>

<div>

    <label for="">password</label>
    <input type="password" name="password">
    @error('password')
   <p>{{ $message }} </p>
    @enderror

</div>

<div>

    <label for="">Birthday</label>
    <input type="date" name="birthday">
    @error('birthday')
   <p>{{ $message }} </p>
    @enderror


</div>

 <button type="submit">Send</button>
    </form>

</x-layout>
