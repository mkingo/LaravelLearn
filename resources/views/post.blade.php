<!doctype html>

<title>Hello there</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<body>


    <article>
        <h1> {{$post->title}} </h1>

        {{-- <div>
           {{$post->id}}

        </div> --}}
        <p>
          By <a href="#">{{$post->user->name}}</a> in 
          <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>
        <div>
          {{$post->body}}
        </div>
        <div>
            {{$post->excerpt}}
          </div>
        {{-- <div>
           
        {{-- {{\Carbon\Carbon::parse($post->date)->toFormattedDateString() }}   --}}
        {{-- </div> --}}
    </article>
    

</body>
