
<x-layout>

<x-slot:title>
投稿の新規作成
</x-slot>

<x-slot:url>
    "{{url("form.css")}}"
</x-slot>

    <div class="form-container">
        <h2>新しい投稿</h2>
        <form action={{ route("posts.store") }} method="post">
            @csrf
            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" id="title" name="title" name="title" value="{{ old("title") }}">
                @error("title")
                    <div class="error">タイトルを入力してください</div>                    
                @enderror

            </div>
            <div class="form-group">
                <label for="content">内容</label>
                <textarea id="content"  rows="5" name="body">
                    {{ old("body") }}
                </textarea>
                @error("body")
                <div class="error">本文を入力してください</div>    
                @enderror
                
            </div>
            <div class="form-group">
                <label for="file">Select File</label>
                <input type="file" id="file" name="file">
                @error("file")
                <span class="error">{{ $message }}</span>
                @enderror
                
            </div>
            <button type="submit">投稿する</button>
        </form>
        <a href={{ route("posts.index") }} class="cp-link">← 戻る</a>
    </div>

</x-layout>


    