<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Api-Panel</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>
</head>
<body>

<div id="accordion">
    <h3>User</h3>
    <div>
        <p><a href="{{url('/api/Allapi/register-user-form')}}">Register-user</a></p>
        <p><a href="{{url('/api/Allapi/login-user-form')}}">Login-user</a></p>
        <p><a href="{{url('/api/all-languages')}}">All Languages</a></p>
        <p><a href="{{url('/api/Allapi/category-form')}}">Categories</a></p>

        {{--<p><a href="{{url('/api/Allapi/categories')}}">categories</a></p>--}}
        {{--<p><a href="{{url('/api/Allapi/subcategories')}}">Subcategories</a></p>--}}
        {{--<p><a href="{{url('/api/Allapi/news')}}">news</a></p>--}}


        <p><a href=""></a></p>


    </div>

</div>


</body>
</html>