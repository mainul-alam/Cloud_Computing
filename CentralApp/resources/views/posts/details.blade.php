@extends('layouts.app')

    @section('content')
        <a href = '/posts' class= "btn btn-default">Go back</a>
      <h1> {{$details->title}} </h1>
      <small>Createrd on : {{$details->created_at}}</small>
      <div>
        <h3> {{$details->body}} </h3>
      </div>
      

    @endsection