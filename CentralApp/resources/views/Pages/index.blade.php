@extends('layouts.app')

    @section('content')
        <div class="jumbotron text-centre">
            <h1>WELCOME TO MY WEBSITE</h1>
            <p>This is a recruiting website</p>
            <p>
                <a class="btn btn-primary btn-lg" href="/login" role="button">login</a>
                <a class="btn btn-primary btn-lg" href="/register" role="button">register</a>
            </p>
        </div>
    @endsection

