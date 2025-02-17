
<x-layout>


    <x-slot:title>
        詳細記事
    </x-slot>


    <x-slot:url>
        "{{url("show.css")}}"
    </x-slot>

    <div class="container">
        <h1>記事詳細</h1>
        <div class="detail">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
        </div> 
        <a href={{ route("posts.index") }}>←戻る</a>
    </div>

</x-layout>
   