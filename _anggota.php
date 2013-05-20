<?php

function view_anggota($photo, $name, $phone, $email, $major) {
    ?>

<p>
    <img class="anggota-foto" src="<?php echo $photo; ?>" alt="">
</p>
<p class="anggota-nama">
    <?php echo htmlentities($name); ?>
</p>
<hr class="dotted">
<p>
    <?php echo htmlentities($phone); ?>
</p>
<hr class="dotted">
<p>
    <?php echo htmlentities($email); ?>
</p>
<hr class="dotted">
<p>
    <?php echo htmlentities($major); ?>
</p>

    <?php
}
