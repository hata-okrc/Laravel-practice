<x-layout>

    <x-slot:title>
        ログインページ
    </x-slot>
    <x-slot:url>
    "{{url("form.css")}}"
    </x-slot>
    
    <div class="form-container">
        <h2>🎮 ログイン 🎮</h2>
        <form action={{ route("login") }} method="post">
            @csrf
            <div class="form-group">
                <label for="username">ユーザー名</label>
                @error("name")
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="text" id="username" name="name" placeholder="ユーザー名を入力" required>
            </div>
    
            <div class="form-group">
                <label for="email">メールアドレス</label>
                @error("email")
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="email" id="email" name="email" placeholder="メールアドレスを入力" required>
            </div>
            
            <div class="form-group">
                <label for="password">パスワード</label>
                @error("password")
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="password" id="password" name="password" placeholder="パスワードを入力" required>
            </div>
    
            <button type="submit">ログイン</button>
        </form>
    
            <a href={{ route("posts.index") }} class="cp-link">←戻る</a>
        
        
    </div>
    
    </x-layout>