<?php

function view_contact($phone, $email, $address) {
    ?>

<div style="float: left;">
    <div style="float: left;">
        <img src="http://placehold.it/40x40&amp;text=PH" style="border-radius: 20px;">
    </div>
    <div style="border-bottom: 1px dotted #000000;float: left;height: 30px;margin: 10px 0 0 20px;width: 175px">
        <?php echo htmlentities($phone); ?>
    </div>
    <div class="clear" style="height: 20px"></div>
    <div style="float: left;">
        <img src="http://placehold.it/40x40&amp;text=ML" style="border-radius: 20px;">
    </div>
    <div style="border-bottom: 1px dotted #000000;float: left;height: 30px;margin: 10px 0 0 20px;width: 175px">
        <?php echo htmlentities($email); ?>
    </div>
    <div class="clear" style="height: 20px"></div>
    <div style="float: left;">
        <img src="http://placehold.it/40x40&amp;text=AD" style="border-radius: 20px;">
    </div>
    <div style="border-bottom: 1px dotted #000000;float: left;height: 30px;margin: 10px 0 0 20px;width: 175px">
        <?php echo htmlentities($address); ?>
    </div>
    <div class="clear"></div>
</div>

    <?php
}
