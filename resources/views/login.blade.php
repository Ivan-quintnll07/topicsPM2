<x-layout>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <h1>Log in</h1>





    <form action="\login" method="POST">
        @csrf


    <div>
        <x-input title="Email" type="text" nombre="email"/>
        @error('email')
        <p>{{ $message }} </p>
         @enderror

    </div>
    <x-input title="Password" type="password" nombre="password"/>
        @error('password')
       <p>{{ $message }} </p>
     @enderror

    </div>
<button type="submit" class="text-xl border p-6">Log in</button>

</form>

</x-layout>
