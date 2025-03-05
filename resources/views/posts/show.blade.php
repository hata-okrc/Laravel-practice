
<x-layout>


    <x-slot:title>
        詳細記事
    </x-slot>


    <x-slot:url>
        "{{url("show.css")}}"
    </x-slot>
<div class="container">
<header>
    <h1>
        {{ $post->title }}
    </h1>
    <nav>
        <ul>
            <li> <a href={{ route("posts.index") }} class="cp-link">←戻る</a></li>
            <li> <a href={{ route("posts.edit", $post) }} class="cp-link">記事を更新する</a></li>
            <form action={{ route("posts.destroy", $post) }} method="post">
                @method("DELETE")
                @csrf
                <button date-id="delete-b" onclick="deletePost(this)">投稿を削除する</button>
              </form>
        </ul>
    </nav>
</header>
<main>
    <article>
    
        <p>{!! nl2br(e($post->body)) !!}</p> 

    </article>
    <article>
    
        @foreach ($post->files as $file)
        <a href="{{ asset('storage/' . $file->file_path) }}" download>ファイルをダウンロード</a>
    @endforeach

    </article>
        <div class="comment">
            <h4>コメント</h4>
              @forelse ($post->comments as $comment)
              <ul>
                <li>{{ $comment->comment }}</li>
                <form action={{ route("posts.comments.destroy", [$post, $comment]) }} method="post">
                    @method("DELETE")
                    @csrf
                    <button date-id="delete-b" onclick="deletePost(this)">このコメントを削除する</button>
                  </form>    
            </ul>
            @empty
                <li>no comment</li>
            @endforelse
        </div>
    <div class="form-container">
        <form action={{ route("posts.comments.store", $post) }} method="post">
            @csrf
            <textarea id="comment-input" placeholder="コメントを入力してください..." name="comment"></textarea>
            @error("comment")
                <div class="error">
                    <p>コメントを入力してください</p>
                </div>    
            @enderror
            <button id="submit-comment">送信</button>    
        </form>
    </div>

</main>
<footer>
    <p>&copy;2025 ブログ</p>
</footer>
</div>

    <script>
        function deletePost(e) {
            'use strict'
            if(confirm("本当に削除しますか？") === false) {
              return;
            }
            document.getElementById("delete-b").submit();
        }
    </script>
</x-layout>
