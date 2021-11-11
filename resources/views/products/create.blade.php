@extends('layout.base')

@section('pageContent')
<h1>Inserisci un nuovo prodotto</h1>

<form action="{{route("products.store")}}" method="POST">
	@csrf

	<div class="form-group">
		<label for="title">Titolo</label>
		<input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Insersci titolo" value="{{ old('title') }}">

		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="type">Tipo pasta</label>
		<input type="text" class="form-control" id="type" name="type" placeholder="Insersci tipo pasta" value="{{ old('type') }}">

		@error('type')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="cooking_time">tempo cottura</label>
		<input type="number" class="form-control" id="cooking_time" name="cooking_time" placeholder="Insersci tempo cottura" value="{{ old('cooking_time') }}">

		@error('cooking_time')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="weight">Peso</label>
		<input type="number" class="form-control" id="weight" name="weight" placeholder="Insersci il peso" value="{{ old('weight') }}">

		@error('cooking_time')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="description">Descrizione prodotto</label>
		<textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Insersci la descrizione">{{old('description')}}</textarea>

		@error('description')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="image">Immagine</label>
		<input type="text" class="form-control" id="image" name="image" placeholder="Insersci l'url dell'immagine" value="{{ old('image') }}">

		@error('image')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<button type="submit" class="btn btn-primary">Crea</button>
  </form>

@endsection