<?php
	$compTime = 8;					// time in seconds to use for 'computer' timing
	trialTiming();					// determines timing and user/computer timing mode
?>

    <div class="study precache">
        <p>  <?php echo $cue; ?>    </p>
        <form class="<?php echo $formClass; ?> collector-form"  autocomplete="off"  action="<?php echo $postTo; ?>"  method=post>
            <p>
                <input name=Response type=text value="" class=copybox autocomplete="off" />
            </p>
            <input class=hidden  id=RT     name=RT       type=text value="RT"       />
            <input class=hidden  id=RTkey  name=RTkey    type=text value="no press" />
            <input class=hidden  id=RTlast name=RTlast   type=text value="no press" />
            <div class=textcenter>
                <input class="button button-trial-advance" id=FormSubmitButton type=submit value="Submit"   />
            </div>
        </form>
    </div>