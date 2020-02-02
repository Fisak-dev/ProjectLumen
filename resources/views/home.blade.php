<!-- resources/views/home.blade.php -->

<html>
<head>
    <title>Motivaitonal — Your daily source of motivation!</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Alegreya:400,700|Roboto+Condensed' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
    @foreach($quote as $qts)
    <div class="quote-container">
        <p class="text">{{$qts->text}}</p>
        <p class="author">— {{$qts->author}}</p>
    </div>
    @endforeach
</div>
</body>
</html>
