@extends('layouts.app')

@section('content')

 <div>
    <div class="max-w-4xl mx-auto py-20 prose lg:prose-xl">
        <h1>{{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>
    </div>
</div>
<div class="container">
    <div id="social-links">
        <p class="h3">Social Share</p>
            <a href="https://www.facebook.com/sharer/sharer.php?u=http://pringgaseladedeng.com" class="social-btn-sp " id=""><span class="fa fa-facebook-official"></span></a>
            <a href="https://twitter.com/intent/tweet?text=my share text&amp;url=http://pringgaseladedeng.com" class="social-btn-sp" id=""><span class="fa fa-twitter"></span></a>
    </div>
</div>

@endsection