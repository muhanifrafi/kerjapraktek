<!DOCTYPE html>
<html lang="zxx" dir='ltr'>
@include('includes.head')
@include('includes.topbar')
<!-- ======= Header ======= -->
@include('includes.navbar')
@include('includes.banner')
@include('includes.breadcrumb')

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="screen" href="main.css">
<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Cutive+Mono|Sue+Ellen+Francisco" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Sue+Ellen+Francisco" rel="stylesheet">


<script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script  src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script  src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>


<body>
<h2> Loap Index</h2>
<table id="example" class="table table-striped" style="width:50%;margin-left:auto;margin-right:auto;">
        <thead>
            <tr>
                <th>No</th>
                <th>ABB</th>
                <th>Manual Title</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($loap as $loap)
            <tr>
                <td>{{ $loap->i_id_loap }}</td>
                <td>{{ $loap->n_loap_abbr }}</td>
                <td>{{ $loap->e_loap_abbr }}</td>
                </td>
            </tr>
        @endforeach
</tfoot>
</table>

</body>


  


<script>
$(document).ready(function () {
    $('#example').DataTable(
    );
});
</script>
@include('includes.footer')
