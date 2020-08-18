@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">JSON RESTful API Placeholer</div>

                <div class="card-body">
                    <p>
                        Fake REST API zum Lernen von Laravel, Vue JS, Angluar JS usw.
                        Zum testen von eigenen Anwendungen, UI und zum Prototyping.
                    </p>

                    <code>
                        fetch('https://fakeapi.andreaspabst.com/todos/12')<br>
                        .then(response => response.json())<br>
                        .then(json => console.log(json))<br>
                    </code>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
