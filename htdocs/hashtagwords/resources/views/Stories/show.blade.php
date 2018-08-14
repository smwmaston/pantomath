@extends('layouts.master')


@section('title')
    #words
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    <link href="" type='text/css' rel='stylesheet'>
@stop


@section('content')
<h3> here will be the writing box </h3>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src=""></script>
@stop