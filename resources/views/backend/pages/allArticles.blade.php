@section('content')
    @foreach ($articles as $article)
        <h3>{{ $article->title }}</h3>
        <p>
            <a href="/{{$article->id}}">Перейти к статье</a> |
            <a href="article/edit/{{$article->id}}">Изменить</a> |
            <a href="article/delete/{{$article->id}}">Удалить</a>
        </p>
        <hr>
    @endforeach
@endsection