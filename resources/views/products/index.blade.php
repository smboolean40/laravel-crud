@extends('layout.base')

@section('pageContent')
<h1>Lista di tutti i prodotti</h1>
<table class="table mt-3">
	<thead>
	  <tr>
		<th scope="col">#</th>
		<th scope="col">Titolo</th>
		<th scope="col">Tipo</th>
		<th scope="col">Tempo Cottura</th>
		<th scope="col">Peso</th>
		<th scope="col">Azioni</th>
	  </tr>
	</thead>
	<tbody>
	  @foreach ($products as $product)
	  <tr>
		<th scope="row">{{$product["id"]}}</th>
		<td>{{$product["title"]}}</td>
		<td>{{$product["type"]}}</td>
		<td>{{$product["cooking_time"]}} min</td>
		<td>{{$product["weight"]}} gr</td>
		<td>
			<a href="{{route("products.show", $product["id"])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
			<a href="{{route("products.edit", $product["id"])}}"><button type="button" class="btn btn-warning">Modifica</button></a>
			<form action="{{route("products.destroy", $product["id"])}}" method="POST">
				@csrf
				@method("DELETE")
				<button type="submit" class="btn btn-danger">Elimina</button>
			</form>
		</td>
	  </tr>
	  @endforeach
	</tbody>
</table>
@endsection