@extends('layouts.app')
@section('title')
Bookstore Home
@endsection

@section('content')



<div id="templatemo_content_right">

    @foreach ($books as $item)

    <div class="templatemo_product_box">
        <h1>{{$item->title}}</h1>
        <img src="{{asset($item->img)}}" alt="image" />
        <div class="product_info">
            <p>{{Str::limit($item->details, 100, '')}}..</p>
            <h3>${{$item->cost}}</h3>
            <div class="buy_now_button"><a href="">Buy Now</a></div>
            <div class="detail_button"><a href="{{url("details/{$item->id}" )}}">Detail</a></div>
        </div>
        <div class="cleaner">&nbsp;</div>
    </div>

    @if ($loop->even)
    <div class="cleaner_with_height">&nbsp;</div>
    @elseif ($loop->odd)
    <div class="cleaner_with_width">&nbsp;</div>
    @endif

    @endforeach

    <a href="subpage.html"><img src="{{asset("img/templatemo_ads.jpg")}}" alt="ads" /></a>
</div> <!-- end of content right -->

@endsection