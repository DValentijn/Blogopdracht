@props(['post'])

<article class="shadow-md rounded-md p-10 m-10">
    <head class="postimage" style="max-width: 20px;
    max-height: 20px;">
        @foreach ($post->attachments as $attachment)
        <img src="{{asset($attachment->path . $attachment->filename)}}" alt="">
        @endforeach
    </head>
    
    <header class="flex justify-center font-bold text-2xl  ">
        <h2>{{ $post->title }}</h2>
    </header>
    <main class="m-5 truncate">
        <p>{{ $post->content }}</p>
    </main>
    <footer>
        <a class=" bg-blue-400 text-white rounded-lg p-2 hover:bg-blue-500"
            href="{{ route('showPost', [$post->id]) }}">Lees
            Meer....</a>
    </footer>
</article>
