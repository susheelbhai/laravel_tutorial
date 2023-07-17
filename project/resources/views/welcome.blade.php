<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
</head>

<body>
    {{-- <form action="{{ route('submit_form') }}" method="post">
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
    </form> --}}
    <div class="container my-5">
        <div class="row">
            @foreach ($data as $item)
                <div class="col col-3">
                    <div class="card" style="">
                        <img src="{{ url($item->photo) }}" class="card-img-top" alt="..." width="120" height="120" >
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</body>

</html>
