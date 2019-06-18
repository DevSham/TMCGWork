@extends('postsPages.layout')
@section('content')
<h1 style="padding-top: 30px;" class="text-primary">Cash deposit Page</h1>
<form method="POST" action= "/posts">
<div class="form-group">
@csrf
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
<label for="FirstName">First Name:</label>
<input type ="text" name="fname" class="form-control" placeholder="enter your first name">
</div>
<div class="form-group">
<label for ="seconfName">Second Name:</label>
<input type ="text" name="sname" class="form-control" placeholder="enter your second name">
</div>
<div class="form-group">
<label>Gender:</label>
    <select name="sex" class="form-control" placeholder="enter your second name">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
</div>
<div class="form-group">
<label for ="deposit">Deposit:</label>
<input type ="text" name="amount" class="form-control" placeholder="enter amount to deposit">
</div>
<div class="form-group">
<input type ="submit" name="send" value="submit" class="btn btn-primary">
</div>
</form>
@stop
@section('footer')
@stop