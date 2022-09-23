@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

    @include('inc.profile')		

        <div class="col-lg-9">

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif         

            <div class="shadow p-5 w-100 standard">
                
                <h2 class="text-center">List of warnings</h2>

                <br><hr class="divider"><br>

                <table class="table table-bordered" id="warning-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User reported</th>
                            <th>Type</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Date</th>
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
    
    $('#warning-table').DataTable({
        processing: true,
        serverside: true,
        responsive: true,
        ajax: "/systemadmin/warning/list",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', searchable: true, sortable : true, visible: true},
            {data: 'userName', name: 'userName', searchable: true, sortable : true, visible: true},
            {data: 'description', name: 'description', searchable: true, sortable : true, visible: true},
            {data: 'category', name: 'category', searchable: true, sortable : true, visible: true},
            {data: 'forumPost', name: 'forumPost', searchable: true, sortable : true, visible: true},
            {data: 'dateTime', name: 'dateTime', searchable: true, sortable : true, visible: true},
        ]       
    });
    
});
</script>
@endsection
				




