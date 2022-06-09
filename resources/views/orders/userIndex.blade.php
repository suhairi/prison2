@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col col-mb-10">
			<div class="card">
				<div class="card-header text-white bg-primary">Orders</div>
				<div class="card-body">

					<table class="table table-bordered table-hover table-striped data-table">
						<thead>
							<th>#</th>							
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
		</div>
		
	</div>

</div>

@endsection

@push('sripts')
	
	<script type="text/javascript">

    $(function () {
      
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('orders.userIndex') }}",
            columns: [
                {data: 'id', name: 'id'},
            ]
        });
    });

</script>
@endpush