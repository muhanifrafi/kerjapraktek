<!DOCTYPE html>
<html lang="zxx" dir='ltr'>
@include('includes.head')
@include('includes.topbar')
<!-- ======= Header ======= -->
@include('includes.navbar')
@include('includes.banner')
@include('includes.breadcrumb')
<section >
            <div class="container">
              <div class="row pad-row">
                <div class="col-md-12  col-sm-12">

				
			<!-- PUT CONTENT HERE-->	
      <script type='text/javascript'>
                    $(function() {
                        $("div#targetview").load("module/service_bulletin/service_bulletin-index.php");
                    });
                </script>

                <h2> Service Bulletin</h2>
                <form class="well" name="searchform">
                    <input type="hidden" name="ac" value="">

                    <div class="form-row py-4">
                        <div class="col">
                        <select class="form-control" name="aircraft">
                                <option value="">Aircraft</option>
                                <option value="NC212-220">NC212-220</option>
                                <option value="C295">C295</option>
                                <option value="N219">N219</option>
                                <option value="CN235">CN235</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-control" name="e_categ">
                                <option value="">Category</option>
                                <option value="Mandatory">Mandatory</option>
                                <option value="Recommended">Recommended</option>
                                <option value="Optional">Optional</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-control" name="cat">
                                <option value="">Search by</option>
                                <option value="1">SB No.</option>
                                <option value="2">Title</option>
                                <option value="3">Effectivity</option>
                              </select>
                        </div>
                        <div class="col">
                            <div class="input-group searchBox">
                                <input class="form-control clearable" type="text" placeholder="Key" name="s" />
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-lg buttonSearch" type="button" onclick="goSearchSB('module/service_bulletin/service_bulletin-index')" name="saring" value="Saring">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


                <div id="targetview"></div>

                </div>
			  </div>
            </div>
         </section>

  
  </section>
  </main>	

@include('includes.footer')
