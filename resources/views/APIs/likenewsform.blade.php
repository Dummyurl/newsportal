<html>
<head>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body>
<h1>
    URL::   {{url('/').'/api/like-news'}}

</h1>
<form  method="post"  action=" {{url('/api/like-news')}}" >

    <br>
    Token(token) ::*<input type="text"  name="token" >


    <br>
    <br>
    News(news_id) ::    *<select required name="news_id" >
        <option value="" >Please Select</option>
        @foreach($news as $d)
            <option value="{{$d['id']}}" >{{$d['news_title']}}</option>

        @endforeach
    </select>



    <br>
    <br>
    <button type="submit">Submit</button>




</form>

</body>
</html>