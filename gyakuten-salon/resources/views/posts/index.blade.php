{{-- web.php → PostsController.php → index.blade.php --}}

@extends('layouts')  {{--  親ファイルとの紐付け --}}

@section('content')  {{--  親ファイルの展開開始位置 --}}

    <div class="container mt-4">
        <div>
            <a href="{{route('posts.create')}}" class="btn btn-primary">
                投稿を新規作成する
            </a>
        </div>
        
        @foreach($posts as $post)
        <div class ="card mt-4">
            <div class ="card-header mb-2">
                {{ $post->title }}
            </div>
            <div class ="card-body">
                <p class="card-text">
                {{ $post->body }}
                </p>
                <a class="card-link" href="{{route('posts.show',['post' => $post])}}">
                    詳細を見る
                </a>
            </div>
            <div class ="card-footer">
                <span class="mr-2">
                    投稿日時 {{ $post->created_at}}
                </span>
            </div>
        </div>
        @endforeach
    </div>

@endsection('content')  {{-- 親ファイルの展開終了位置 --}}