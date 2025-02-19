
<x-layout>


    <x-slot:title>
        詳細記事
    </x-slot>


    <x-slot:url>
        "{{url("show.css")}}"
    </x-slot>

    <div class="container">
        <h1>{{ $post->title }}</h1>
        <div class="detail">
            <p>{!! nl2br(e($post->body)) !!}</p>
        </div> 
        <div class="back"> 
          <a href={{ route("posts.index") }}>←戻る</a>
          <b>/</b>
          <a href={{ route("posts.edit", $post) }}>記事を更新する</a>    

          <form action={{ route("posts.destroy", $post) }} method="post">
            @method("DELETE")
            @csrf
            <button>削除する</button>
          </form>
        </div>
    </div>

</x-layout>
