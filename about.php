<?php require('_init.php'); ?>

<?php view_header(array(
    'page' => 'about',
)); ?>

<?php view_slide_wide('slider1', array(
    'http://placehold.it/790x250&amp;text=One',
    'http://placehold.it/790x250&amp;text=Two',
    'http://placehold.it/790x250&amp;text=Three',
)); ?>

<div class="desc">
    <h1>
        ABOUT US
    </h1>
    <p>Base64 is a group of similar binary-to-text encoding schemes that represent binary data in an ASCII string format by translating it into a radix-64 representation. The term Base64 originates from a specific MIME content transfer encoding.</p>
    <p>Base64 encoding schemes are commonly used when there is a need to encode binary data that needs to be stored and transferred over media that are designed to deal with textual data. This is to ensure that the data remain intact without modification during transport. Base64 is commonly used in a number of applications including email via MIME, and storing complex data in XML.</p>
    <div class="clear"></div>
</div>

<h2 class="agency" style="font-size: 30px;text-transform: uppercase">
    ANGGOTA
</h2>
<div class="anggota anggota-first">
    <?php view_anggota('http://placehold.it/170x170&amp;text=FOTO+PROFIL', 'dewangga adi perdana', '08112267805', 'lyco@gmail.com', 'Kedokteran'); ?>
</div>
<div class="anggota">
    <?php view_anggota('http://placehold.it/170x170&amp;text=FOTO+PROFIL', 'dewangga adi perdana', '08112267805', 'lyco@gmail.com', 'Kedokteran'); ?>
</div>
<div class="anggota">
    <?php view_anggota('http://placehold.it/170x170&amp;text=FOTO+PROFIL', 'dewangga adi perdana', '08112267805', 'lyco@gmail.com', 'Kedokteran'); ?>
</div>
<div class="anggota anggota-last">
    <?php view_anggota('http://placehold.it/170x170&amp;text=FOTO+PROFIL', 'dewangga adi perdana', '08112267805', 'lyco@gmail.com', 'Kedokteran'); ?>
</div>
<div class="clear"></div>
<div class="anggota anggota-first">
    
</div>
<div class="anggota">
    <?php view_anggota('http://placehold.it/170x170&amp;text=FOTO+PROFIL', 'dewangga adi perdana', '08112267805', 'lyco@gmail.com', 'Kedokteran'); ?>
</div>
<div class="anggota">
    <?php view_anggota('http://placehold.it/170x170&amp;text=FOTO+PROFIL', 'dewangga adi perdana', '08112267805', 'lyco@gmail.com', 'Kedokteran'); ?>
</div>
<div class="anggota anggota-last">
    <?php view_anggota('http://placehold.it/170x170&amp;text=FOTO+PROFIL', 'dewangga adi perdana', '08112267805', 'lyco@gmail.com', 'Kedokteran'); ?>
</div>
<div class="clear"></div>

<?php view_footer_2(); ?>

<?php
