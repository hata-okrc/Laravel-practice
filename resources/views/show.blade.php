<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>シンプルブログ</title>
    <link rel="stylesheet" href="{{ url('style.css') }}">
</head>
<body>
    <div class="container">
        <h1>{{ $post }}</h1>
        @forelse ($posts as $post)
            
        <div class="post">
            <h2>{{ $post }}</h2>
            <div class="post">
            <a href="/{$post}">このブログの詳細ページへ</a>
        </div>
        </div>

        @empty
        <p>no post</p>
            
        @endforelse
    </div>
</body>
</html>
