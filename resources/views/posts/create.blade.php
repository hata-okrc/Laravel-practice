
<x-layout>

<x-slot:title>
投稿の新規作成
</x-slot>

<x-slot:url>
    "{{url("create.css")}}"
</x-slot>

    <div class="form-container">
        <h1>新しい投稿</h1>
        <form action={{ route("posts.store") }} method="post">
            @csrf

            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" id="title" name="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">本文</label>
                <textarea id="content"  rows="5" name="body"></textarea>
            </div>
            <button type="submit">投稿する</button>
        </form>
        <a href={{ route("posts.index") }} class="back">← 戻る</a>
    </div>

</x-layout>


    