@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

    @include('inc.clinic')		

        <div class="col-lg-9">

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif         

            <div class="shadow p-5 w-100 standard">
                
                <h2 class="text-center">List of services</h2>

                <br><hr class="divider"><br>

                <div class="d-flex bd-highlight mb-3">
                    <div class="me-auto p-2 bd-highlight">
                        <a href="/clinic/service/create">
                            <button type="submit" class="btn btn-outline">Add a service</button>
                        </a>
                    </div>
                </div>	

                <br>

                <table class="table table-bordered" id="service-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Service Name</th>
                            <th>Service Description</th>
                            <th>Service Price</th>
                            <th>Service Length</th>
                            <th>Date Start</th>
                            <th>Date End</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>

        </div>

    </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br>
@endsection


@section('scripts')
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
$(function () {
    
    $('#service-table').DataTable({
        processing: true,
        serverside: true,
        responsive: true,
        "scrollX": true,
        ajax: "/clinic/service/list",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', searchable: true, sortable : true, visible: true},
            {data: 'serviceName', name: 'serviceName', searchable: true, sortable : true, visible: true},
            {data: 'serviceDescription', name: 'serviceDescription', searchable: true, sortable : true, visible: true},
            {data: 'servicePrice', name: 'servicePrice', searchable: true, sortable : true, visible: true},
            {data: 'serviceLength', name: 'serviceLength', searchable: true, sortable : true, visible: true},
            {data: 'serviceStart', name: 'serviceStart', searchable: true, sortable : true, visible: true},
            {data: 'serviceEnd', name: 'serviceEnd', searchable: true, sortable : true, visible: true},
            {data: 'actions', name: 'actions', searchable: false, sortable : false, visible: true},
        ]       
    });
    
});
</script>
@endsection
				




