@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h1>{{$document->title}}</h1>
                <h2>{{$document->description}}</h2>
                <p>{{$document->url}}</p>
                <p>{{asset("/storage/".$document->url)}}</p>
                <iframe src="{{asset("/storage/".$document->url)}}" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection()
