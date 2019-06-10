@extends('postsPages.layout')
@section('content')
<h1>Welcome Page</h1>

<p>hi {{$specific->fname}} thanks for banking with us.</p>
<p>You have deposited shs{{$specific->amount}}</p>



@stop
@section('footer')
@stop