<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('submit_form') }}" method="post">
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        @csrf
        <label for="">Name</label> <br>
        <input type="text" name="name" id=""> <br>
        <label for="">Email</label> <br>
        <input type="text" name="email" id=""> <br>
        <label for="">Phone</label> <br>
        <input type="text" name="phone" id=""> <br>
        <label for="">Message</label> <br>
        <input type="text" name="msg" id=""> <br>
        <button>Submit</button>
    </form>
    
</body>
</html>