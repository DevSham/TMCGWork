@extends('postsPages.layout')
@section('content')
<h1>Cash deposit Page</h1>
<form method="POST" action= "/posts">
@csrf
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
<label>First Name</label>
<input type ="text" name="fname" ><br/>
<label>Second Name</label>
<input type ="text" name="sname"><br/>
<label>Sex</label>
<input type ="text" name="sex"><br/>
<label>Deposit</label>
<input type ="text" name="amount"><br/>
<input type ="submit" name="send" value="submit">
</form>
@stop
@section('footer')
@stop