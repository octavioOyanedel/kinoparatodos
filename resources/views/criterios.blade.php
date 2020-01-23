@extends('layouts.app')

@section('content')
	<div class="contenido-criterio">
		<div>
			<div class="table-responsive">
				<table class="table table-sm centrar-texto-tabla">
					<thead>
						<tr>
							<th scope="col"></th>
							<th scope="col"><b>N1</b></th>
							<th scope="col"><b>N2</b></th>
							<th scope="col"><b>N3</b></th>
							<th scope="col"><b>N4</b></th>
							<th scope="col"><b>N5</b></th>
							<th scope="col"><b>N6</b></th>
							<th scope="col"><b>N7</b></th>
							<th scope="col"><b>N8</b></th>
							<th scope="col"><b>N9</b></th>
							<th scope="col"><b>N10</b></th>
							<th scope="col"><b>N11</b></th>
							<th scope="col"><b>N12</b></th>
							<th scope="col"><b>N13</b></th>
							<th scope="col"><b>N14</b></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Último Sorteo</td>
							<td>{{ $ultimo->n1 }}</td>
							<td>{{ $ultimo->n2 }}</td>
							<td>{{ $ultimo->n3 }}</td>
							<td>{{ $ultimo->n4 }}</td>
							<td>{{ $ultimo->n5 }}</td>
							<td>{{ $ultimo->n6 }}</td>
							<td>{{ $ultimo->n7 }}</td>
							<td>{{ $ultimo->n8 }}</td>
							<td>{{ $ultimo->n9 }}</td>
							<td>{{ $ultimo->n10 }}</td>
							<td>{{ $ultimo->n11 }}</td>
							<td>{{ $ultimo->n12 }}</td>
							<td>{{ $ultimo->n13 }}</td>
							<td>{{ $ultimo->n14 }}</td>
						</tr>					
						<tr>
							<td>Proyección</td>
							<td><a href="" class="" data-toggle="modal" data-target="#n1"><i class="fas fa-chart-line"></i></a></td>
							<td>{{ $ultimo->n2 }}</td>
							<td>{{ $ultimo->n3 }}</td>
							<td>{{ $ultimo->n4 }}</td>
							<td>{{ $ultimo->n5 }}</td>
							<td>{{ $ultimo->n6 }}</td>
							<td>{{ $ultimo->n7 }}</td>
							<td>{{ $ultimo->n8 }}</td>
							<td>{{ $ultimo->n9 }}</td>
							<td>{{ $ultimo->n10 }}</td>
							<td>{{ $ultimo->n11 }}</td>
							<td>{{ $ultimo->n12 }}</td>
							<td>{{ $ultimo->n13 }}</td>
							<td>{{ $ultimo->n14 }}</td>					
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div>2</div>
		<div>3</div>
		<div>4</div>
		<div>5</div>
	</div>
@endsection

@include('modals.modal_n1')