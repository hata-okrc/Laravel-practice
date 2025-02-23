<x-layout>

<x-slot:title>
    ユーザー登
</x-slot>
<x-slot:url>
"{{url("user_index.css")}}"
</x-slot>

<div class="container">
    <h1 class="title">🎮 ユーザー登録 🎮</h1>
    <form class="register-form">
        <label for="username">ユーザー名</label>
        <input type="text" id="username" placeholder="プレイヤー名を入力" required>

        <label for="email">メールアドレス</label>
        <input type="email" id="email" placeholder="メールアドレスを入力" required>

        <label for="password">パスワード</label>
        <input type="password" id="password" placeholder="パスワードを入力" required>

        <button type="submit" class="register-button">登録</button>
    </form>
</div>

</x-layout>