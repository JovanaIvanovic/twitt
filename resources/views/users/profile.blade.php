@extends('layouts.app')

@section('content')
    <div class="container">
        <example name="{{$user->name}}" cover="{{$user->cover}}" profile="{{$user->profile}}"></example>
    </div>
@endsection