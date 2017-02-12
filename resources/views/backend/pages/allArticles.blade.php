@section('content')
    @foreach ($articles as $article)
        <h3>{{ $article->title }}</h3>
        <p>
            <a href="/{{$article->id}}">Читать далее...</a>
        </p>
    @endforeach
@endsection