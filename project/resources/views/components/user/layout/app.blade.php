<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	
	<!-- Responsive Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- main stylesheet -->
	<link rel="stylesheet" href="{{ asset('themes/user/css/style.css') }}">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="http://localhost/laravel_tutorial/public_html/themes/user/css/responsive.css">
    <title>{{ $title ?? 'default'}}</title>
    {!! $head_tag ?? '' !!}
</head>
<body>
	

    @include('components.user.layout.header')


	{{ $slot }}
	


    @include('components.user.layout.footer')
    @include('components.user.layout.js')



</body>
</html>