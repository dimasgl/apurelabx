<?php require('_init.php'); ?>

<?php view_header(array(
    'page' => 'produk',
)); ?>

<?php view_title(
    'PRODUK',
    'http://placehold.it/100x100&amp;text=CONTACT',
    'Base64 is a group of similar binary-to-text encoding schemes that represent binary data in an ASCII string format by translating it into a radix-64 representation. The term Base64 originates from a specific MIME content transfer encoding.'
); ?>

<h2 style="font-size: 48px;">PESAN</h2>
<div style="float: left;">
    <h3 class="agency subhide">
        <a href="#">KAOS</a>
    </h3>
    <h3 class="agency subhide">
        <a href="#">MAINAN</a>
    </h3>
    <h3 class="agency subhide">
        <a href="#">TAS</a>
    </h3>
</div>

<?php view_slide_narrow('slider1', array(
    'http://placehold.it/500x300&amp;text=One',
    'http://placehold.it/500x300&amp;text=Two',
    'http://placehold.it/500x300&amp;text=Three',
)); ?>

<div class="clear"></div>

<?php view_footer_1(); ?>

<?php
