<h2>PHP Word</h2>

<form method="post" action="{{route('word.index') }}">
    @csrf
    <input type="text" name="nama">

    <input type="submit" value="Submit" />
</form>
