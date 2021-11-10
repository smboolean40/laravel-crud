@extends('layout.base')

@section('pageContent')
<h1>Inserisci un nuovo prodotto</h1>

<form action="{{route("products.store")}}" method="POST">
	@csrf

	<div class="form-group">
		<label for="title">Titolo</label>
		<input type="text" class="form-control" id="title" name="title" placeholder="Insersci titolo">
	</div>

	<div class="form-group">
		<label for="type">Tipo pasta</label>
		<input type="text" class="form-control" id="type" name="type" placeholder="Insersci tipo pasta">
	</div>

	<div class="form-group">
		<label for="cooking_time">tempo cottura</label>
		<input type="number" class="form-control" id="cooking_time" name="cooking_time" placeholder="Insersci tempo cottura">
	</div>

	<div class="form-group">
		<label for="weight">Peso</label>
		<input type="number" class="form-control" id="weight" name="weight" placeholder="Insersci il peso">
	</div>

	<div class="form-group">
		<label for="description">Descrizione prodotto</label>
		<textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Insersci la descrizione"></textarea>
	</div>

	<div class="form-group">
		<label for="image">Immagine</label>
		<input type="text" class="form-control" id="image" name="image" placeholder="Insersci l'url dell'immagine">
	</div>

	<button type="submit" class="btn btn-primary">Crea</button>
  </form>

@endsection