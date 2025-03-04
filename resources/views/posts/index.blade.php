
<x-layout>

<x-slot:title>
    ホームページ
</x-slot>


<x-slot:url>
    "{{url("index.css")}}"
</x-slot>
    <div class="container">
        <header>
            <h1>みんなの投稿</h1>
            <nav>
                <ul>
                    @auth
                    <li><a href={{ route("posts.create") }}>+ 新しい投稿</a></li> 
                    <li>/</li>
                    <form action={{route("logout")}} method="post">
                        @csrf
                        <button>ログアウト</button>
                    </form>
                    
                    @endauth
                   @guest
                   <li><a href={{ route("showRegisterForm") }}>ユーザー登録</a></li>  
                   <li>/</li>
                   <li><a href={{ route("showLoginForm") }}>ログイン</a></li>      
                   @endguest
                </ul>
            </nav>
        </header>
        <main>
            
         @forelse ($posts as $post)
             <article>
                    <h2>{{ $post->title }}</h2>
                    <div class="status">
                     <a href={{ route("posts.show", $post) }} class="cp-link">詳細ページへ</a>
                    </div>
            </article> 
        @empty
        <p>no post</p> 
        @endforelse
        </main>
    </div>

</x-layout>
