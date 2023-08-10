<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .d-none{
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="email">Title</label>
                        <input type="text" name="title" class="form-control" id="email">
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />

                    </div>
                    <div class="form-group">
                        <label for="file_type">file type</label>
                        <select class="form-control" name="file_type" id="file_type">
                            <option value=""> Select </option>
                            <option value="image"> Image </option>
                            <option value="pdf"> PDF </option>
                            <option value="color"> Color </option>
                        </select>
                    </div>
                    <div class="form-group d-none" id="image_div">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                    <div class="form-group d-none" id="pdf_div">
                        <label for="pdf">PDF</label>
                        <input type="file" name="pdf" class="form-control" id="pdf">
                    </div>
                    <div class="form-group d-none" id="color_div">
                        <label for="color" class="form-label">Color picker</label>
                        <input name="color" type="color" class="form-control form-control-color"
                            id="color" value="#bbb" title="Choose your color">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $("#file_type").change(function() {
            var file_type = $("#file_type").val();
            if (file_type == 'image') {
                $("#image_div").removeClass("d-none");
                $("#color_div").addClass("d-none");
                $("#pdf_div").addClass("d-none");
            }
            else if(file_type == 'pdf') {
                $("#image_div").addClass("d-none");
                $("#color_div").addClass("d-none");
                $("#pdf_div").removeClass("d-none");

            }
            else if(file_type == 'color') {
                $("#image_div").addClass("d-none");
                $("#color_div").removeClass("d-none");
                $("#pdf_div").addClass("d-none");

            }
            else  {
                $("#image_div").addClass("d-none");
                $("#color_div").addClass("d-none");
                $("#pdf_div").addClass("d-none");

            }
        });
    </script>

</body>

</html>
