@extends('layouts.app')
@section('title')
{{$book['title']}}
@endsection

@section('content')
<div id="templatemo_content_right">

    <h1>{{$book['title']}}</h1>
    <div class="image_panel">
        <img src="{{asset($book['img'])}}" alt="CSS Template" width="100" height="150" />
    </div>
    <ul>
        <li>{{$book['author']}}</li>
        <li>{{$book['release']}}</li>
        <li>Pages: {{$book['pages']}}</li>
        <li>ISBN 10: 0-496-91612-0 | ISBN 13: 9780492518154</li>
    </ul>

    <p>{{$book["details"]}}</p>

    <div class="cleaner_with_height">&nbsp;</div>

    <a href="subpage.html"><img src="{{asset("img/templatemo_ads.jpg")}}" alt="ads" /></a>

</div> <!-- end of content right -->

<div class="cleaner_with_height">&nbsp;</div>
@endsection