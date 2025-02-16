
<x-layout>

<x-slot:title>
    ホームページ
</x-slot>


<x-slot:url>
    "{{url("index.css")}}"
</x-slot>
    <div class="container">
        <h1>ブログ</h1>
        @forelse ($posts as $post)
            
        <div class="post">
            <h2>{{ $post }}</h2>
            <div class="post">
            <a href={{ route("posts.show", $post) }}>詳細ページへ</a>
        </div>
        </div>

        @empty
        <p>no post</p>
            
        @endforelse
    </div>

</x-layout>
