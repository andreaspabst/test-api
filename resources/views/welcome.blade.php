@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">JSON RESTful API Placeholer</div>

                <div class="card-body">
                    Fake REST API zum Lernen von Laravel, Vue JS, Angluar JS usw.
                    Zum testen von eigenen Anwendungen, UI und zum Prototyping.

                    <code>
                        fetch('https://jsonplaceholder.typicode.com/todos/1')
                        .then(response => response.json())
                        .then(json => console.log(json))
                    </code>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
