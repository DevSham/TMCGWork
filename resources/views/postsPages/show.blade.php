@extends('postsPages.layout')
@section('content')
<h1 style="padding-top: 30px;" class="text-primary">Welcome Page</h1>

<div class="jumbotron">
  <h1 class="display-4" >Hello, {{$specific->fname}} !</h1>
  <p class="lead">Thanks for banking with us.</p>
  <hr class="my-4">
  <p>You have deposited shs{{$specific->amount}}</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="{{route('posts.create')}}" role="button">Deposit</a>
  </p>
</div>

@stop
@section('footer')
@stop