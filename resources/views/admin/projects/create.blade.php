@extends('layouts.admin')

@section('content')

<form action="{{route('admin.projects.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="url" class="form-label">url</label>
        <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url"  value="{{old('url')}}">
        @error('url')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">descrizione</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"  value="{{old('description')}}">
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label">descrizione</label>
        <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
            <option @selected(old('category_id')=='') value="">Nessuna categoria</option>
            @foreach ($categories as $category)
                <option @selected(old('category_id')==$category->id) value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    
    
    <button type="submit" class="btn btn-secondary">Salva</button>



</form>

@endsection