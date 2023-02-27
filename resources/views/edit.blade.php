<!DOCTYPE html>
<html>

    <body>
        <h1>Edit your article!</h1>
        <form action="{{ route('update', $news->id) }}" method="POST" autocomplete="off">
        @csrf
            <input type="text" name="title" value="{{$news->title}}" placeholder="What's the title?">
            <input type="text" name="text" value="{{$news->text}}" placeholder="Write down article">
            @foreach($authors as $author)
                <br>
                {{$author->name}}
                @if(isset($authorsChecked[$author->id]))
                    <input type="checkbox" name="authors[]" value="{{$author->id}}" checked="checked">
                @else
                    <input type="checkbox" name="authors[]" value="{{$author->id}}">
                @endif
            @endforeach
            <br><button type="submit"> <i>submit</i> </button>


        </form>
    </body>
</html>
