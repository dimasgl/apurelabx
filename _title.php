<?php

function view_title($title, $image, $desc) {
    ?>

<h1 style="float: left;font-size: 44px;width: 220px;">
    <?php echo htmlentities($title); ?>
</h1>
<div style="float: left;margin-left: 10px">
    <img src="<?php echo htmlentities($image); ?>" style="border-radius: 50px;">
</div>
<p style="float: right;font-size: 16px;line-height: 125%;width: 400px;">
    <?php echo htmlentities($desc); ?>
</p>
<div class="clear" style="height: 80px;"></div>

    <?php
}
