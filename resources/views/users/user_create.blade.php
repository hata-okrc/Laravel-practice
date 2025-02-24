<x-layout>

<x-slot:title>
    ユーザー登
</x-slot>
<x-slot:url>
"{{url("form.css")}}"
</x-slot>

<div class="form-container">
    <h2>🎮 ユーザー登録 🎮</h2>
    <form>
        <div class="form-group">
            <label for="username">ユーザー名</label>
            <input type="text" id="username" placeholder="プレイヤー名を入力" required>
        </div>
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" id="email" placeholder="メールアドレスを入力" required>
        </div>
        
        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" id="password" placeholder="パスワードを入力" required>
        </div>

        <button type="submit" class="register-button">登録</button>
    </form>
</div>

</x-layout>