@extends('layouts.app')

@section('content')
<div class="container">
    <home :posts="{{$posts}}" :users="{{$users}}"></home>
</div>
@endsection