{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    @if (session('succes'))
        <p>{{ session('succes') }}</p>
    @endif

<h1>List of my blogs!!</h1>

<ul>
    @foreach ($blogs as $blog)
        <li><a href="{{route('blogs.show', $blog->id)}}">{{$blog->title}}</li></a>
    @endforeach
</ul>
{{-- 
</x-app-layout> --}}
