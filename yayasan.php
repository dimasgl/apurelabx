<?php require('_init.php'); ?>

<?php view_header(array(
    'page' => 'yayasan',
)); ?>

<?php view_slide_wide('slider1', array(
    'http://placehold.it/790x250&amp;text=One',
    'http://placehold.it/790x250&amp;text=Two',
    'http://placehold.it/790x250&amp;text=Three',
)); ?>

<div class="desc">
    <h1>
        YAYASAN
    </h1>
    <div style="background-image:url('img/brand.png');background-repeat: no-repeat;float: right;height: 39px;margin-bottom: 50px;width: 500px"></div>
    <div class="clear" style="height: 50px"></div>
    
    <?php view_contact('021 987 654 321', 'Balerupa@gmail.com', 'Tamansari 29 Bandung'); ?>
    
    <p>Base64 is a group of similar binary-to-text encoding schemes that represent binary data in an ASCII string format by translating it into a radix-64 representation. The term Base64 originates from a specific MIME content transfer encoding.</p>
    <p>Base64 encoding schemes are commonly used when there is a need to encode binary data that needs to be stored and transferred over media that are designed to deal with textual data. This is to ensure that the data remain intact without modification during transport. Base64 is commonly used in a number of applications including email via MIME, and storing complex data in XML.</p>
    <div class="clear"></div>
</div>

<?php view_footer_2(); ?>

<?php
