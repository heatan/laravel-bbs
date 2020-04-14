@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                投稿の編集
            </h1>

            <form action="{{ route('posts.update', ['post' => $post]) }}" method="POST">
                @csrf 
                @method('PUT')

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="title">
                            タイトル
                        </label>
                        <input type="text" id="title" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') ?: $post->title }}">
                        @if($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="body">
                            本文
                        </label>

                        <textarea name="body" id="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="4">
                            {{ old('body') ?: $post->body }}
                        </textarea>

                        @if($errors->has('body'))
                            <div class="invalid-feedback">
                                {{ $erroes->first('body') }}
                            </div>
                        @endif
                    </div>

                    <div class="mt-5">
                        <a href="{{ route('posts.show', ['post' => $post]) }}" class="btn btn-secondary">
                            キャンセル
                        </a>

                        <button type="submit" class="btn btn-primary">
                            更新する
                        </button>
                    </div>
                </fieldset>
            </form>
            <form action="{{ route('posts.destroy', ['post' => $post]) }}" style="display: inline-block;" method="POST">
                @csrf 
                @method('DELETE')

                <button class="btn btn-dander">削除する</button>
            </form>
        </div>
    </div>
@endsection