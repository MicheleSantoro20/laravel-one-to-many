@extends('layouts.admin')

@section('content')

<h1>{{$project->title}}</h1>
<small>Slug: {{$project->slug}}</small>
<hr/>
<p>{{$project->description}}</p>
<a href="{{route('admin.projects.index')}}" class="btn btn-secondary">Torna alla lista</a>


@endsection