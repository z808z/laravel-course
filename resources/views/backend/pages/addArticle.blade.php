@section('content')
    <h1>Добавление новой статьи</h1>
    <form action="" method="POST">
        <h3><label for="title">Заголовок статьи</label></h3>
        @foreach ($errors->get('title') as $message)
            <div class="box box-solid box-danger">
                <ul>
                    <li class = "error">{{ $message }}</li>
                </ul>
            </div>
        @endforeach
        <p><input type="text" name="title" value="{{old('title')}}"></p>
        <h3><label for="description">Короткое описание статьи (максимум 255 символов)</label></h3>
        @foreach ($errors->get('description') as $message)
            <div class="box box-solid box-danger">
                <ul>
                    <li class = "error">{{ $message }}</li>
                </ul>
            </div>
        @endforeach
        <p><textarea name="description" id="" cols="30" rows="5">{{old('description')}}</textarea></p>
        <h3><label for="content">Контент</label></h3>
        @foreach ($errors->get('content') as $message)
            <div class="box box-solid box-danger">
                <ul>
                    <li class = "error">{{ $message }}</li>
                </ul>
            </div>
        @endforeach
        <p><textarea name="content" id="" cols="30" rows="10">{{old('content')}}</textarea></p>
        {{ csrf_field() }}
        <input type="submit">
    </form>
@endsection