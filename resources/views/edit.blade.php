<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5 Ckeditor Image Upload Example - ItSolutionStuff.com</title>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
</head>
<body>
  
<h1>Edit</h1>
<form action="{{route('blogs.update', $blog->id)}}" method="POST">
    @csrf
    {{method_field('PATCH')}}
    <textarea name="editor1">{{$blog->body}}</textarea>
    <input type="submit">
</form>

   
<script type="text/javascript">
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
   
</body>
</html>