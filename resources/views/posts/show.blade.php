
<x-layout>


    <x-slot:title>
        詳細記事
    </x-slot>


    <x-slot:url>
        "{{url("show.css")}}"
    </x-slot>

    <div class="blog-container">
        <h1>{{ $post->title }}</h1>
            <p>{!! nl2br(e($post->body)) !!}</p> 
        
          <a href={{ route("posts.index") }}>←戻る</a>
          <b>/</b>
          <a href={{ route("posts.edit", $post) }}>記事を更新する</a>    

          <form action={{ route("posts.destroy", $post) }} method="post">
            @method("DELETE")
            @csrf
            <button date-id="delete-post" onclick="deletePost(this)">削除する</button>
          </form>
        </div>   
          <div class="comment-section">
            <h2>コメント</h2>
            <ul id="comment-list"></ul>
            @forelse ($post->comments as $comment)
                <li>{{ $comment->comment }}</li>
            @empty
                <li>no comment</li>
            @endforelse

            <form action={{ route("posts.comments.store", $post) }} method="post">
                @csrf
                <textarea id="comment-input" placeholder="コメントを入力してください..." name="comment"></textarea>
                <button id="submit-comment">送信</button>    
            </form>
        </div>

    <script>
        function deletePost(e) {
            'use strict'
            if(confirm("本当に削除しますか？") === false) {
              return;
            }
            document.getElementById("delete-post").submit();
        }
    </script>
</x-layout>
