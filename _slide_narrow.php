<?php

function view_slide_narrow($id, $images) {
    ?>

<div class="slide-narrow m8slider-pa" style="float: right;">
    <div class="slide-narrow m8slider-ma" id="<?php echo $id; ?>">
        <?php for ($i = 0; $i < count($images); $i++) { ?>
        <?php if ($i == 0) { ?>
        <div class="slide-narrow m8slider-first" style="background-image: url(<?php echo $images[$i]; ?>);"></div>
        <?php } else { ?>
        <div class="slide-narrow m8slider-child" style="background-image: url(<?php echo $images[$i]; ?>);"></div>
        <?php } } ?>
    </div>
    <div style="left: 10px;position: absolute;top: 140px;z-index: 31">
        <a href="javascript:m8prev(<?php echo $id; ?>);">Prev</a>
    </div>
    <div style="right: 10px;position: absolute;top: 140px;z-index: 31">
        <a href="javascript:m8next(<?php echo $id; ?>);">Next</a>
    </div>
</div>
<script type="text/javascript">
var <?php echo $id; ?> = {
    m8: document.getElementById('<?php echo $id; ?>'),
    time: 1000,
}
</script>

    <?php
}
