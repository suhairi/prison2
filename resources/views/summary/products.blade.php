@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col col-mb-10">
			<div class="card">
				<div class="card-header text-white bg-primary">Product Summary</div>
				<div class="card-body">

					<table class="table table-bordered table-hover table-striped data-table">
						<thead class="thead-dark">
							<tr>
								<th>#</th>							
								<th>Product Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total (RM)</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
		</div>
		
	</div>

</div>

@endsection

@push('scripts')
	
	<script type="text/javascript">

    $(function () {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('orders.summary') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'price', name: 'price'},
                {data: 'quantity', name: 'quantity'},
                {data: 'total', name: 'total'},
            ],
        });
    });

</script>
@endpush