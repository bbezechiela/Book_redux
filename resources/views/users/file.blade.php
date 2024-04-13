<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $request->title }}</title>
</head>
<body style="padding: 0px;">
    {{-- <iframe src="{{ asset('/files/books/' . $request->book_filename) }}" style="width: 100%; height: 100vh;" frameborder="0"></iframe> --}}
    <object data="{{ asset('/files/books/' . $request->book_filename) }}" type="application/pdf" style="width: 100%; height: 100vh; margin: 0px;" ></object>
</body>
</html>