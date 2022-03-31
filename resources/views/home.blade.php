@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped">
                
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>
                        <p>{{ $post->title }}</p>
                        <p>{{ substr($post->body, 0, 100); }}</p>
                        <p><a href="{{ route('article.show', $post->id) }}" class="btn btn-primary">Show Post</a></p>
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
