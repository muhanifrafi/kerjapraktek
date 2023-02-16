<!DOCTYPE html>
<html lang="zxx" dir='ltr'>
@include('includes.head')
@include('includes.topbar')
<!-- ======= Header ======= -->
@include('includes.navbar')
@include('includes.banner')
@include('includes.breadcrumb')

    <section>
            <div class="container">
              <div class="row pad-row">
                <div class="col-md-12  col-sm-12">

				
			<!-- PUT CONTENT HERE-->	
<script type="text/javascript">
$(function(){
	$("div#targetview").load("module/stock/stock-index.php");
});
</script>

<h2>Stock</h2>
<br>
<form class="form-horizontal well text-center" name="searchform">
<input type="hidden" name="ac" value="">
<div class="d-flex justify-content-center p-4 ">
        <select class="form-control" name="cat">
            <option value="1">AC Number</option>
            <option value="2">Part Number</option>
            <option value="3">Alternative Part Number </option>
            <option value="4">Description</option>
            
        </select>&nbsp;
			<div class="input-group searchBox" style="width:50%">
			
              <input class="form-control clearable" type="text" placeholder="Key" name="s">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary btn-lg buttonSearch" type="button" onclick="goSearchSL('module/stock/stock-index')" name="saring" value="Saring">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>        
</div>
      </form>



	
<br>			  
<div id="targetview">  <center><marquee class=" " style="width:30%;behavior=" scroll"="" direction="left" scrollamount="5" onmouseover="this.setAttribute('scrollamount', 1, 0)" onmouseout="this.setAttribute('scrollamount', 5, 0)">
  On stock items subject to prior sale
  </marquee>
  </center>
<br>

	<table class="table table-striped table-bordered table-hover table-heading no-border-bottom" cellspacing="0" id="delTable">
	<thead>
	
	<tr><th scope="col" width="5%">Id.</th>
	<th scope="col" width="10%">AC Number</th>
	<th scope="col" width="15%">Part Number</th>
	<th scope="col" width="15%">Alternative Part Number</th>
	<th scope="col" width="35%">Description</th>
	<th scope="col" width="10%">UOM</th>
	<th scope="col" width="10%">Add to Chart</th>
	<!--th scope="col" width="25%">Remark</th-->

	</tr></thead>
	
	<tbody id="the-list"><tr id="1107" class="alternate2">
		        <td align="center">1</td>
				<td align="center">-</td>
				<td><a href="#" class="login" data-toggle="modal" data-target="#exampleModalCenter">INCONEL625-AMS5666-HEX19X2400MM</a></td>
   			
				<td>-</td>
				<td>INCONEL HEX</td>
				<td align="center">MM</td>
				<td align="center">
				<span title="REQUEST FOR QUOTATION - Sign in first !" class="fa fa-shopping-cart fa-lg icon-grey"></span>				</td>
			</tr>	
   			<tr id="1104" class="alternate">
		        <td align="center">2</td>
				<td align="center">-</td>
				<td><a href="#" class="login" data-toggle="modal" data-target="#exampleModalCenter">C64200-ASTM-B150HR50-DIA32X2400MM</a></td>
   			
				<td>-</td>
				<td>COPPER ROD</td>
				<td align="center">MM</td>
				<td align="center">
				<span title="REQUEST FOR QUOTATION - Sign in first !" class="fa fa-shopping-cart fa-lg icon-grey"></span>				</td>
			</tr>	
   			<tr id="1105" class="alternate2">
		        <td align="center">3</td>
				<td align="center">-</td>
				<td><a href="#" class="login" data-toggle="modal" data-target="#exampleModalCenter">PURE-COPPER-WW-T-775-0.188X0.035X144IN</a></td>
   			
				<td>-</td>
				<td>COPPER TUBE</td>
				<td align="center">MM</td>
				<td align="center">
				<span title="REQUEST FOR QUOTATION - Sign in first !" class="fa fa-shopping-cart fa-lg icon-grey"></span>				</td>
			</tr>	
   			<tr id="1100" class="alternate">
		        <td align="center">4</td>
				<td align="center">-</td>
				<td><a href="#" class="login" data-toggle="modal" data-target="#exampleModalCenter">M27500A16TA1N06</a></td>
   			
				<td>-</td>
				<td>CABLE</td>
				<td align="center">MM</td>
				<td align="center">
				<span title="REQUEST FOR QUOTATION - Sign in first !" class="fa fa-shopping-cart fa-lg icon-grey"></span>				</td>
			</tr>	
   			<tr id="1099" class="alternate2">
		        <td align="center">5</td>
				<td align="center">-</td>
				<td><a href="#" class="login" data-toggle="modal" data-target="#exampleModalCenter">M22759/8-12-9</a></td>
   			
				<td>-</td>
				<td>CABLE</td>
				<td align="center">MM</td>
				<td align="center">
				<span title="REQUEST FOR QUOTATION - Sign in first !" class="fa fa-shopping-cart fa-lg icon-grey"></span>				</td>
			</tr>	
   			<tr id="1098" class="alternate">
		        <td align="center">6</td>
				<td align="center">-</td>
				<td><a href="#" class="login" data-toggle="modal" data-target="#exampleModalCenter">110-175-6-8</a></td>
   			
				<td>-</td>
				<td>BLIND RIVET</td>
				<td align="center">KG</td>
				<td align="center">
				<span title="REQUEST FOR QUOTATION - Sign in first !" class="fa fa-shopping-cart fa-lg icon-grey"></span>				</td>
			</tr>	
   			<tr id="1102" class="alternate2">
		        <td align="center">7</td>
				<td align="center">-</td>
				<td><a href="#" class="login" data-toggle="modal" data-target="#exampleModalCenter">ASTM-B150-83C63000-DIA20X3660MM</a></td>
   			
				<td>-</td>
				<td>COPPER ROD</td>
				<td align="center">MM</td>
				<td align="center">
				<span title="REQUEST FOR QUOTATION - Sign in first !" class="fa fa-shopping-cart fa-lg icon-grey"></span>				</td>
			</tr>	
   			<tr id="1103" class="alternate">
		        <td align="center">8</td>
				<td align="center">-</td>
				<td><a href="#" class="login" data-toggle="modal" data-target="#exampleModalCenter">ASTM-B150-83C63000-DIA25X3660MM</a></td>
   			
				<td>-</td>
				<td>COPPER ROD</td>
				<td align="center">MM</td>
				<td align="center">
				<span title="REQUEST FOR QUOTATION - Sign in first !" class="fa fa-shopping-cart fa-lg icon-grey"></span>				</td>
			</tr>	
   			<tr id="1109" class="alternate2">
		        <td align="center">9</td>
				<td align="center">-</td>
				<td><a href="#" class="login" data-toggle="modal" data-target="#exampleModalCenter">MS20995CY20</a></td>
   			
				<td>-</td>
				<td>LOCKING WIRE</td>
				<td align="center">M</td>
				<td align="center">
				<span title="REQUEST FOR QUOTATION - Sign in first !" class="fa fa-shopping-cart fa-lg icon-grey"></span>				</td>
			</tr>	
   			<tr id="1108" class="alternate">
		        <td align="center">10</td>
				<td align="center">-</td>
				<td><a href="#" class="login" data-toggle="modal" data-target="#exampleModalCenter">G51PA</a></td>
   			
				<td>-</td>
				<td>KANTENSCHUTZ</td>
				<td align="center">CM</td>
				<td align="center">
				<span title="REQUEST FOR QUOTATION - Sign in first !" class="fa fa-shopping-cart fa-lg icon-grey"></span>				</td>
			</tr>	
   			
	</tbody>
   			

	</table>
<div class="pagination pull-right"> 1041 entries <span class="fa fa-gear">
</span> Page 1 of 105 <span class="fa fa-fighter-jet">
</span>
<span class="disabled">« previous</span>
<span class="current">1</span>
<a href="#" onclick="goPage('module/stock/stock-index.php?cat=&amp;s=&amp;saring=','2')">2</a>
<a href="#" onclick="goPage('module/stock/stock-index.php?cat=&amp;s=&amp;saring=','3')">3</a>
<a href="#" onclick="goPage('module/stock/stock-index.php?cat=&amp;s=&amp;saring=','4')">4</a>
<a href="#" onclick="goPage('module/stock/stock-index.php?cat=&amp;s=&amp;saring=','5')">5</a>
<a href="#" onclick="goPage('module/stock/stock-index.php?cat=&amp;s=&amp;saring=','6')">6</a>
<a href="#" onclick="goPage('module/stock/stock-index.php?cat=&amp;s=&amp;saring=','7')">7</a>
<a href="#" onclick="goPage('module/stock/stock-index.php?cat=&amp;s=&amp;saring=','8')">8</a>
<a href="#" onclick="goPage('module/stock/stock-index.php?cat=&amp;s=&amp;saring=','9')">9</a>
...<a href="#" onclick="goPage('module/stock/stock-index.php?cat=&amp;s=&amp;saring=','104')">104</a>
<a href="#" onclick="goPage('module/stock/stock-index.php?cat=&amp;s=&amp;saring=','105')">105</a>
<a href="#" onclick="goPage('module/stock/stock-index.php?cat=&amp;s=&amp;saring=','2')">next »</a>
</div> <!-- Modal --> 
<div class="modal bd-example-modal-lg" id="modstock" tabindex="-1" role="dialog" aria-labelledby="modChart" aria-hidden="true"> 
<div class="modal-dialog modal-lg"> <div class="modal-content"> 
<div class="modal-header"> <h5 class="modal-title" id="ntitleaircraft">REQUEST FOR QUOTATION</h5> 
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
<span aria-hidden="true">×</span> </button> </div> 
<div class="modal-body"> 
<div class="row"> <div class="col-12" id="detailform"> </div> <!-- START:ChartJS 08 MARET 2021--> <!-- START:ChartJS 08 MARET 2021--> </div> </div> </div> </div> </div>
<script> $(document).ready(function(){ $('.view_data').click(function(){ var idstock = $(this).attr("idstock"); //var nac = "A/C Type : "+$(this).attr("nac"); //alert(idac); $.ajax({ url:"module/stock/form_rfq.php", method:"post", data:{id:idstock}, success:function(data){ //$('#ntitleaircraft').html(nac); $('#modstock').modal("show"); $('#detailform').html(data); } }); }); }); </script></div>
<div id="popupView"></div> 
<!-- END CONTENT--> </div> </div> </div> </section>
@include('includes.footer')


      <!-- Modal -->
     <div class="modal bd-example-modal-lg" id="modstock" tabindex="-1" role="dialog" aria-labelledby="modChart" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title" id="ntitleaircraft">REQUEST FOR QUOTATION</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12" id="detailform">
  
                </div>
                <!-- START:ChartJS 08 MARET 2021-->

                <!-- START:ChartJS 08 MARET 2021-->
              </div>
            </div>
          </div>
        </div>
      </div>
<script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var idstock = $(this).attr("idstock");  
           //var nac = "A/C Type : "+$(this).attr("nac");  
 		   //alert(idac);
          $.ajax({  
                url:"module/stock/form_rfq.php",  
                method:"post",  
                data:{id:idstock},  
                success:function(data){  
                     //$('#ntitleaircraft').html(nac);  
                     $('#modstock').modal("show");  
                     $('#detailform').html(data);  
                }  
           });  
      });  
 });  
 </script>
</div>
<div id="popupView"></div>	
			<!-- END CONTENT-->	
			





                </div>
			  </div>
            </div>
         </section>

