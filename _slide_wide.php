<?php

function view_slide_wide($id, $images) {
    ?>

<div class="slide-wide m8slider-pa">
    <div class="slide-wide m8slider-ma" id="<?php echo $id; ?>">
        <?php for ($i = 0; $i < count($images); $i++) { ?>
        <?php if ($i == 0) { ?>
        <div class="slide-wide m8slider-first" style="background-image: url(<?php echo $images[$i]; ?>);"></div>
        <?php } else { ?>
        <div class="slide-wide m8slider-child" style="background-image: url(<?php echo $images[$i]; ?>);"></div>
        <?php } } ?>
    </div>
    <div style="left: 10px;position: absolute;top: 110px;z-index: 31">
        <a href="javascript:m8prev(<?php echo $id; ?>);">Prev</a>
    </div>
    <div style="right: 10px;position: absolute;top: 110px;z-index: 31">
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
