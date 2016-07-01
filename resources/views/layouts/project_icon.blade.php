<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item">
	<div class="project">
		<div class="project-inner">
	    	<h3>{{ $project->title }}</h3>
	    	
	    	<!--
		    @if (File::exists(asset("images/".$project->title.".png")))
		    	<?php $icon = asset("images/".$project->title.".png") ?>
		    @else
		    	<?php $icon = asset("images/projectIcon.png") ?>
			@endif
			
			<img src="{{ $icon }}" alt="{{ $project->title }}" class="project-icon"/>
			-->
		    <hr class="simple-line">
		    <p>{{ $project->description }}</p>
		    <h4>{{ $project->link }}</h4>
	    </div>
    </div>
</div>