<form method="post">
    Вы уверены, что хотите удалить статью "{{$article->title}}"? <br>
    <input type="submit" name ="confirm" value="Да">
    <input type="submit" name ="cancel" value="Нет">
    {{ csrf_field() }}
</form>