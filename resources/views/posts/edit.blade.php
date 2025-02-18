
<x-layout>

    <x-slot:title>
    投稿の更新
    </x-slot>
    
    <x-slot:url>
        "{{url("form.css")}}"
    </x-slot>
    
        <div class="form-container">
            <h1>ブログの更新</h1>
            <form action={{ route("posts.update", $post) }} method="post">
                @method("PATCH")
                @csrf
    
                <div class="form-group">
                    <label for="title">タイトル</label>
                    <input type="text" id="title" name="title" name="title" value="{{ $post->title }}">
                    @error("title")
                        <div class="error">タイトルを入力してください</div>                    
                    @enderror
    
                </div>
                <div class="form-group">
                    <label for="content">内容</label>
                    <textarea id="content"  rows="5" name="body">
                        {{ $post->body }}
                    </textarea>
                    @error("body")
                    <div class="error">本文を入力してください</div>    
                    @enderror
                    
                </div>
                <button type="submit">投稿する</button>
            </form>
            <a href={{ route("posts.show", $post) }} class="back">← 戻る</a>
        </div>
    
    </x-layout>
    