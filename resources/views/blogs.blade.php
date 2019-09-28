@foreach ($blogs as $blog)
    <p>{!!$blog->body!!}</p>
    <a href="{{route('blogs.edit', $blog->id)}}">Edit</a>
    <hr>
@endforeach