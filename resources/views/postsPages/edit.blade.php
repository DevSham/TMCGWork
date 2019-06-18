@extends('postsPages.layout')
@section('content')
<h1 style="padding-top: 30px;" class="text-primary">Update Page</h1>
<!-- when you add the id in the action laravel understands tht you are using the put method -->
<form method="POST" action= "/posts/{{$edit->id}}">
<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
<div class="form-group">
<label for="FirstName">First Name:</label>
<input type ="text" name="fname" class="form-control" placeholder="enter your first name" value="{{$edit->fname}}">
</div>
<div class="form-group">
<label for ="seconfName">Second Name:</label>
<input type ="text" name="sname" class="form-control" placeholder="enter your second name" value="{{$edit->sname}}">
</div>
<div class="form-group">
<label>Sex:</label>
<input type ="text" name="sex" class="form-control" placeholder="enter your sex" value="{{$edit->sex}}">
</div>
<div class="form-group">
<label for ="deposit">Deposit:</label>
<input type ="text" name="amount" class="form-control" placeholder="enter amount to deposit" value="{{$edit->amount}}">
</div>
<input type ="submit" name="send" value="submit" class="btn btn-primary">
</form>
@stop
@section('footer')
@stop