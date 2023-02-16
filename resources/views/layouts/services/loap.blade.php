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



<section>
	<div class="container">
		<div class="row pad-row">
			<div class="col-md-12  col-sm-12">


				<!-- PUT CONTENT HERE-->
				<script type='text/javascript'>
					$(function() {
						$("div#targetview").load("module/aircraft_manual/aircraft_manual-index.php");
					});
				</script>




<body>
<h2> Loap Index</h2>

				<h3></h3>
				<br>


					<div class="d-flex justify-content-center p-4 ">
						
							<div class="col-9">
								<div class="tab-content" id="v-pills-tabContent">
									<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
										<table id="table_id" class="table table-striped table-bordered table-hover table-heading no-border-bottom">
											<thead>

												<th scope="col" style="text-align: center;" width="5%">No</th>
												<th scope="col" style="text-align: center;" width="10%">ABB</th>
												<th scope="col" style="text-align: center;" width="85%">Manual Title</th>

											</thead>

											<tbody id="the-list">


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

</div>
</div>
</div>

<div id="targetview"></div>

</body>

</section>  

  </main>	
<br />
  


<script>
$(document).ready(function () {
    $('#table_id').DataTable(
    );
});
</script>
@include('includes.footer')
