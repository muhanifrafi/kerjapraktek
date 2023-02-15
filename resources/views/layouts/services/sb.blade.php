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
                        <select class="form-control" name="ac">
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
                        <table class="table table-hover mt-2">
    <thead>
      <tr>
        <th>Id.</th>
        <th>Service Bulletin</th>
        <th>Title</th>
        <th>Revision</th>
        <th>Rev. date</th>
        <th>Category</th>
        <th>Effectivity</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($sb as $sb)
            <tr>
                <td>{{ $sb->id }}</td>
                <td>{{ $sb->n_no }}</td>
                <td>{{ $sb->n_title }}</td>
                <td>{{ $sb->n_rev }}</td>
                <td>{{ $sb->e_rev_date }}</td>
                <td>{{ $sb->e_categ }}</td>
                <td>{{ $sb->e_effectivity }}</td>
                </td>
            </tr>
        @endforeach
        </td>
        </tr>
    </tbody>
</table>
<div class="pagination pull-right"> 111 entries <span class="fa fa-gear"></span> Page 1 of 12 <span class="fa fa-fighter-jet"></span><span class="disabled">« previous</span><span class="current">1</span><a href="#" onclick="goPage('module/service_bulletin/service_bulletin-index.php?idac=&amp;e_categ=&amp;cat=&amp;s=&amp;saring=','2')">2</a><a href="#" onclick="goPage('module/service_bulletin/service_bulletin-index.php?idac=&amp;e_categ=&amp;cat=&amp;s=&amp;saring=','3')">3</a><a href="#" onclick="goPage('module/service_bulletin/service_bulletin-index.php?idac=&amp;e_categ=&amp;cat=&amp;s=&amp;saring=','4')">4</a><a href="#" onclick="goPage('module/service_bulletin/service_bulletin-index.php?idac=&amp;e_categ=&amp;cat=&amp;s=&amp;saring=','5')">5</a><a href="#" onclick="goPage('module/service_bulletin/service_bulletin-index.php?idac=&amp;e_categ=&amp;cat=&amp;s=&amp;saring=','6')">6</a><a href="#" onclick="goPage('module/service_bulletin/service_bulletin-index.php?idac=&amp;e_categ=&amp;cat=&amp;s=&amp;saring=','7')">7</a><a href="#" onclick="goPage('module/service_bulletin/service_bulletin-index.php?idac=&amp;e_categ=&amp;cat=&amp;s=&amp;saring=','8')">8</a><a href="#" onclick="goPage('module/service_bulletin/service_bulletin-index.php?idac=&amp;e_categ=&amp;cat=&amp;s=&amp;saring=','9')">9</a><a href="#" onclick="goPage('module/service_bulletin/service_bulletin-index.php?idac=&amp;e_categ=&amp;cat=&amp;s=&amp;saring=','10')">10</a><a href="#" onclick="goPage('module/service_bulletin/service_bulletin-index.php?idac=&amp;e_categ=&amp;cat=&amp;s=&amp;saring=','11')">11</a><a href="#" onclick="goPage('module/service_bulletin/service_bulletin-index.php?idac=&amp;e_categ=&amp;cat=&amp;s=&amp;saring=','12')">12</a><a href="#" onclick="goPage('module/service_bulletin/service_bulletin-index.php?idac=&amp;e_categ=&amp;cat=&amp;s=&amp;saring=','2')">next »</a></div>
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
