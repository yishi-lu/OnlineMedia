@extends('layouts.app')

@section('content')
<div class="container">
    <div class='row pb-5'>
        <div class='col-4 pt-3'><img src="/img/nail/user1.jpg" style='width:100%;'></div>
        <div class='col-8 pt-3 pl-5'>
            <div class='pb-3'><h1>{{$user->name}}</h1></div>
            <div class='pb-3'>description</div>
            <div>post, favorit</div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">Post1</div>
        <div class="col-4">Post2</div>
        <div class="col-4">Post3</div>
    </div>
</div>
@endsection
