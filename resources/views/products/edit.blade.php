@extends('layout.base')

@section('pageContent')
<h1>Modifica prodotto: {{$product["title"]}}</h1>

<form action="{{route("products.update", $product["id"])}}" method="POST">
	@csrf
	@method('PUT')

	<div class="form-group">
		<label for="title">Titolo</label>
		<input type="text" class="form-control" id="title" name="title" placeholder="Insersci titolo" value="{{old('title') ? old('title') : $product['title']}}">
		
		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="type">Tipo pasta</label>
		<input type="text" class="form-control" id="type" name="type" placeholder="Insersci tipo pasta" value="{{old('type') ? old('type') : $product['type']}}">
		
		@error('type')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="cooking_time">tempo cottura</label>
		<input type="number" class="form-control" id="cooking_time" name="cooking_time" placeholder="Insersci tempo cottura" value="{{old('cooking_time') ? old('cooking_time') : $product['cooking_time']}}">
	
		@error('cooking_time')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="weight">Peso</label>
		<input type="number" class="form-control" id="weight" name="weight" placeholder="Insersci il peso" value="{{old('weight') ? old('weight') : $product['weight']}}">
	
		@error('weight')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="description">Descrizione prodotto</label>
		<textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Insersci la descrizione">{{old('description') ? old('description') : $product['description']}}</textarea>
	
		@error('description')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="image">Immagine</label>
		<input type="text" class="form-control" id="image" name="image" placeholder="Insersci l'url dell'immagine" value="{{old('image') ? old('image') : $product['image']}}">
	
		@error('image')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<button type="submit" class="btn btn-primary">Modifica</button>
  </form>

@endsection