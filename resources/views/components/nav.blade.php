<nav class="w-screen flex justify-evenly p-3 shadow-md h-14" style="background-color:white">
    <div></div>
    <div>

    </div>
    <div class=" inline-flex justify-evenly items-center w-full">
        @if (Auth::check())
            <div>
                <img src="https://soccerpointeclaire.com/wp-content/uploads/2021/06/default-profile-pic-e1513291410505.jpg" alt="" style="border-radius: 50%; width: 30px; height: auto;">
                Hallo {{ Auth::user()->name}}
            </div>
            <a class="text-white bg-blue-400 rounded-md p-2 text-lg font-semibold" href="{{ route('logout') }}">Logout</a>
        @else
            <a class="text-white bg-blue-400 rounded-md p-2 text-lg font-semibold" href="{{ route('login') }}">Login</a>
            <a class="text-white bg-blue-400 rounded-md p-2 text-lg font-semibold"
                href="{{ route('signUp') }}">Sign-up</a>

        @endif
    </div>
</nav>