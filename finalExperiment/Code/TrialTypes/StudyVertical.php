<?php
	$compTime = 5;					// time in seconds to use for 'computer' timing
	trialTiming();					// determines timing and user/computer timing mode
?>
	<div class='study precache'>
		<p>  <?php echo $cue; ?>    </p> 
		<p>  <?php echo $target; ?> </p>
	</div>

    <!-- include form to collect RT and advance page -->
    <div class="precache textcenter">
        <form class="<?php echo $formClass; ?> collector-form" action="<?php echo $postTo; ?>" method=post>
            <input class=hidden id=RT name=RT type=text value="" />
            <input class="button button-trial-advance" id=FormSubmitButton type=submit value="Next" />
        </form>
    </div>
