@extends('postsPages.layout')
@section('content')
<div class="container">
    <h1 style="padding-top: 30px;" class="text-primary">All Clients Page</h1>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>FirstName</th>
            <th>SecondName</th>
            <th>sex</th>
            <th>amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach($entries as $entry)
        <tr>
            <td>{{$entry->fname}}</td>
            <td>{{$entry->sname}}</td>
            <td>{{$entry->sex}}</td>
            <td>{{$entry->amount}}<td>
            </td><td><a href="{{ URL::route('posts.edit', $entry->id) }}">edit</a></td>
        </tr>
        @endforeach 
    </tbody>
    </table>
</div>

@stop

@section('footer')
@stop