@section('content')
    <h1>Добавление новой статьи</h1>
    <form action="" method="POST">
        <h3><label for="title">Заголовок статьи</label></h3>
        <p><input type="text" name="title" value="{{ $article->title }}"></p>
        <h3><label for="description">Короткое описание статьи (максимум 255 символов)</label></h3>
        <p><textarea name="description" id="" cols="30" rows="5">{{ $article->description }}</textarea></p>
        <h3><label for="content">Текст статьи</label></h3>
        <p><textarea name="content" id="" cols="30" rows="10">{{ $article->content }}</textarea></p>
        {{ csrf_field() }}
        <input type="submit">
    </form>
@endsection