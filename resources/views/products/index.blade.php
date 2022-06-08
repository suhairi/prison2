@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><strong>Users</strong></div>

                <div class="card-body">

                    <div>
                    <table class="table table-bordered table-hover table-striped data-table">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                        </thead>
                        <tbody></tbody>
                    </table>
                    </div>
                    
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
            ajax: "{{ route('products.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'price', name: 'price'},
            ]
        });
    });

</script>

@endpush