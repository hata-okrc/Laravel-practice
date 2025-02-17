
<x-layout>

<x-slot:title>
    ホームページ
</x-slot>


<x-slot:url>
    "{{url("index.css")}}"
</x-slot>
    <div class="container">
        <h1>みんなの投稿</h1>
        <a href={{ route("posts.create") }} class="back">+ 新しい投稿</a>
        @forelse ($posts as $post)
            
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <div class="post">
            <a href={{ route("posts.show", $post) }}>詳細ページへ</a>
        </div>
        </div>

        @empty
        <p>no post</p>
            
        @endforelse
    </div>

</x-layout>
