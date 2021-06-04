<h1>About page!</h1>

@auth
    {{-- Welkom {{\Auth::user()->name}} ! --}}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{route('blogs.store')}}">
        @csrf
        <input type="text" name="title">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Opslaan">
    </form>
@endauth

@guest
Je bent nog niet ingelogd.    
@endguest