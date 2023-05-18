@extends('base')

@section('content')
 <div class="jumbotron">
  <h1 class="display-3 text-center">Articles</h1>
  <div class="articles row justify-content-center">
    @foreach ($articles as $article)
    <div class="col-md-6">
    <div class="card-body">


    </div>
  </div>
 </div>
@stop 