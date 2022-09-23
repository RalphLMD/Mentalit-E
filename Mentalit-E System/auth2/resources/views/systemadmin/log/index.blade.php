@extends('layouts.app')

@section('content')

<style>
  aside * {
      display: none;
  }

  @media print{
      body *{
        visibility: hidden;
      }
      main *{
        visibility: hidden;
      }
      aside, aside * {
        visibility: visible;
        display: block;
      }
  }
</style>

<aside class="container">
  <h3>Audit Logs</h3>
  <table class="table">
        <thead>
        </thead>
        <tbody>
            @foreach ($logs as $log)       
                <td><strong>ID</strong>{{ $log->id }}</td>
                <td><strong>User ID</strong>{{ $log->user_id }}</td>
                <td><strong>Type</strong>{{ $log->type }}</td>
                <td><strong>Description</strong>{{ $log->description }}</td>
                <td><strong>Date Time</strong>{{ $log->dateTime }}</td>
            @endforeach
        </tbody>
     </table>
</aside>

<main class="position relative">



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
                
                <h2 class="text-center">List of logs</h2>

                <br><hr class="divider"><br>

                <button type="button" class="btn btn-outline pull-left mb-5" onclick="window.print()">Print</button>
           

                <br><br>

                <table class="table table-bordered" id="log-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Email Address</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>dateTime</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>

        </div>

    </div>
</div>
</main>

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
    
    $('#log-table').DataTable({
        processing: true,
        serverside: true,
        responsive: true,
        ajax: "/systemadmin/log/list",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', searchable: true, sortable : true, visible: true},
            {data: 'userEmail', name: 'userEmail', searchable: true, sortable : true, visible: true},
            {data: 'type', name: 'type', searchable: true, sortable : true, visible: true},
            {data: 'description', name: 'description', searchable: true, sortable : true, visible: true},
            {data: 'dateTime', name: 'dateTime', searchable: true, sortable : true, visible: true},
        ]       
    });
    
});
</script>
@endsection
				




