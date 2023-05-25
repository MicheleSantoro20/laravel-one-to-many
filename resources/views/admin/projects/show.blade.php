@extends('layouts.admin')

@section('content')

<h1>{{$project->title}}</h1>
<small>Slug: {{$project->slug}}</small>
<hr/>
<h2> Type: {{$project->category?$project->category->name : "Nessuna Tipologia Assegnata a questa istanza"}}</h2>
<p>{{$project->description}}</p>
<a href="{{route('admin.projects.index')}}" class="btn btn-secondary">Torna alla lista</a>


@endsection