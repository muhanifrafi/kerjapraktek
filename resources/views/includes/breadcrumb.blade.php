<div class="breadcrumb">
      <div class="container d-flex align-items-center justify-content-between">

        <ol class="breadcrumb m-0 p-0">
           <li class="breadcrumb-item active" aria-current="page"><a href="/">Home</a></li>
           @foreach($titles as $title)
		   <li class="breadcrumb-item"><strong>{{$title}}</strong></li>
           @endforeach	  
        </ol>
      </div>
</div>