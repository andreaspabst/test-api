@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">JSON RESTful API Placeholer</div>

                <div class="card-body">
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <h1>Online RESTful JSON Fake API</h1>
                                <p>
                                    Fake REST API zum Lernen von Laravel, Vue JS, React, Angluar JS usw.
                                    Zum testen von eigenen Anwendungen, UI und zum Prototyping.
                                </p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <p>Beispielcode:</p>
                                <code>
                                    get('{{env('APP_URL')}}/api/todos')<br>
                                    &nbsp;&nbsp;&nbsp;.then(response => response.json())<br>
                                    &nbsp;&nbsp;&nbsp;.then(json => console.log(json))<br>
                                </code>
                                <hr>
                                <examples-get></examples-get>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <h2>Wichtige Resourcen</h2>
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-action d-flex justify-content-between">
                                        <code class="">\App\User::class</code>
                                        <span class="badge py-2 badge-secondary">{{\App\User::count()}}</span>
                                    </li>
                                    <li class="list-group-item list-group-item-action d-flex justify-content-between">
                                        <code class="">\App\Post::class</code>
                                        <span class="badge py-2 badge-secondary">{{\App\Post::count()}}</span>
                                    </li>
                                    <li class="list-group-item list-group-item-action d-flex justify-content-between">
                                        <code class="">\App\Comment::class</code>
                                        <span class="badge py-2 badge-secondary">{{\App\Comment::count()}}</span>
                                    </li>
                                    <li class="list-group-item list-group-item-action d-flex justify-content-between">
                                        <code class="">\App\Todo::class</code>
                                        <span class="badge py-2 badge-secondary">{{\App\Todo::count()}}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <h2>Erklärung der Klassen</h2>
                                <p>
                                    Unsere Beispiel API hat einige Resourcen (also Beispielmodels), welche zum erstellen eines Prototypen oder dem Mocken einer Anwendung,<br>
                                    <a href="https://academy.andreaspabst.com/courses/vue-js-online-kurs?ref=fapi" title="Vue JS Onlinekurs" target="_blank">Erlernen von Vue JS</a>
                                    oder dem <a href="https://academy.andreaspabst.com/courses/laravel-powerkurs?ref=fapi" title="Laravel Onlinekurs" target="_blank">Lernen von Laravel</a> benötigt werden.
                                </p>
                                <p>
                                    Die Daten werden täglich um <code>00:00 Uhr (Europe/Berlin)</code> zurückgesetzt. Die API hat Increnment ID's anstatt von UUIDs, damit der Prototype<br>
                                    auch am nächsten Tag noch funktioniert und wir uns nur IDs von 1, 2, 3,... merken müssen.
                                </p>
                                <p>
                                    Neben der Resource Klasse befindet sich ein Badge mit einer Anzahl. Dies repräsentiert die aktuelle Anzahl an Dummy-Content der Fake API für Entwickler.
                                </p>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="container mb-3">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <h3>User::class</h3>
                                <p>Ein User enthält neben einem Namen, eine E-Mail</p>
                                <code><pre>@json(\App\User::first(),JSON_PRETTY_PRINT)</pre></code>
                                <h3>Post::class</h3>
                                <code><pre>@json(\App\Post::first(),JSON_PRETTY_PRINT)</pre></code>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <h3>Todo::class</h3>
                                <code><pre>@json(\App\Todo::first(),JSON_PRETTY_PRINT)</pre></code>
                                <h3>Comment::class</h3>
                                <code><pre>@json(\App\Comment::first(),JSON_PRETTY_PRINT)</pre></code>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <h2>Alle Routes</h2>
                                <div class="list-group">
                                    @foreach($routes as $route)
                                    <div class="list-group-item list-group-item-action">
                                        @if($route->methods[0] == "GET")
                                        <span style="width:80px" class="py-2 badge badge-primary mr-1">{{implode(", ",$route->methods)}}</span>
                                        @elseif($route->methods[0] == "POST")
                                        <span style="width:80px" class="py-2 badge badge-secondary mr-1">{{implode(", ",$route->methods)}}</span>
                                        @elseif($route->methods[0] == "PUT" || $route->methods[0] == "PATCH")
                                        <span style="width:80px" class="py-2 badge badge-danger mr-1">{{implode(", ",$route->methods)}}</span>
                                        @elseif($route->methods[0] == "DELETE")
                                        <span style="width:80px" class="py-2 badge badge-warning mr-1">{{implode(", ",$route->methods)}}</span>
                                        @else
                                        @endif
                                        <span>{{substr($route->uri,4)}}</span>
                                        @if(strpos($route->getName(),".index") !== false)
                                        <span class="float-right">[<a href="{{route($route->getName())}}" target="_blank" rel="nofollow">Beispiel</a>]</span>
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <h2>HTTP-Methoden erklärt</h2>
                                <p>
                                    Nebenstehend befinden sich alle Routes der Beispiel API mit jeweiligen Parametern wie etwa <code>{beispiel}</code>.
                                </p>
                                <p>
                                    Vor jeder Route finden wir die Route Methode (wie etwa <span style="width:50px" class="py-2 badge badge-warning mr-1">DELETE</span>)
                                </p>

                                <p>
                                    <span style="width:80px" class="py-2 badge badge-primary mr-1">GET, HEAD</span>
                                    Mit der GET-Methode können wir eine Ressource (zum Beispiel einen oder alle User) von unserer API (allg. Server) anfordern. <br>
                                    Dabei werden Parameter (z. B. Filter), getrennt durch ein Fragezeichen, zur URL hinzugefügt (<code>/users?filter[email]=foo@bar.de</code>).<br><br>
                                    Die HEAD-Methode weist unseren Server an, die gleichen HTTP-Header wie bei GET (Beispiel: 123kb, zuletzt aktualisiert gestern um 14:32 Uhr), nicht jedoch den Inhalt (also <em>die User selbst</em>) zu senden.<br>
                                    Sinnvoll ist dies immer, wenn zB. der Browser Cache abfragen soll, ob sich etwas geändert hat oder nicht.
                                </p>
                                <p>
                                    <span style="width:80px" class="py-2 badge badge-secondary mr-1">POST</span>
                                    Mit der POST-Methode können (große) Datenmengen (auch Bilder oder große Formular-Daten) zum Server gesendet werden.<br>
                                    In RESTful APIs steht POST <em>immer</em> für das Anlegen eines neuen Datensatzes.
                                </p>
                                <p>
                                    <span style="width:80px" class="py-2 badge badge-danger mr-1">PUT, PATCH</span>
                                    Mit der PUT-Methode wird für gewöhnlich eine <strong>komplette</strong> Ressource mit der Represäntation (den Daten) im Request überschrieben bzw. man kann auch von "aktualisiert" sprechen.<br>
                                    Mit der PATCH-Methode wird <strong>eine oder mehrere</strong> Eigenschaften einer Resource überschrieben. Somit muss niemals die ganze Resource übermittelt werden.
                                </p>
                                <p>
                                    <span style="width:80px" class="py-2 badge badge-warning mr-1">DELETE</span>
                                    Mit der DELETE Methode können Ressourcen logischerweise wieder gelöscht werden.<br>
                                    Das erfolgreiche Löschen teilt der Server mit einem Status Code 200 OK an den Client mit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
