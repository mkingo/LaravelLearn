{{-- @extends('components.layout')
@section('name')
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>

            <div>
                {!! $post->body !!}
            </div>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
@endsection --}}

<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <p>
                <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
            </p>
            
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>
