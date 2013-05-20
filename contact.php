<?php require('_init.php'); ?>

<?php view_header(array(
    'page' => 'contact',
)); ?>

<div style="float: left;margin-left: 40px">
    <img src="http://placehold.it/160x160&amp;text=CONTACT" style="border-radius: 80px;">
</div>
<div style="float: right;width: 340px">
    <img src="http://placehold.it/160x160&amp;text=HELLO+!" style="border-radius: 80px;">
</div>

<div class="clear" style="height: 50px"></div>

<?php view_contact('021 987 654 321', 'Balerupa@gmail.com', 'Tamansari 29 Bandung'); ?>

<div style="float: right;width: 500px">
    <p>COMMENTS / SUGGESTIONS / INTERESTING PROJECTS</p>
    <p style="line-height: 125%; margin: 20px 0 40px;">Please drop us a line using our email form or just stay<br>
    in the loop by joining our mailing list</p>
    <div style="background-color: #dddddd;padding: 20px;">
        <div style="float: left;">
            <div style="margin: 0 0 5px 10px;">
                <span style="background-color: #000000;border-radius: 10px 10px 0 0;color: #ffffff;font-style: italic;padding: 5px 10px;">
                    name
                </span>
            </div>
            <div style="height: 40px;">
                <input type="text" style="border: 1px solid #ffffff;width: 300px;">
            </div>
            <div style="margin: 0 0 5px 10px;">
                <span style="background-color: #000000;border-radius: 10px 10px 0 0;color: #ffffff;font-style: italic;padding: 5px 10px;">
                    email
                </span>
            </div>
            <div style="height: 40px;">
                <input type="text" style="border: 1px solid #ffffff;width: 300px;">
            </div>
        </div>
        <div style="float: right;">
            <img src="http://placehold.it/110x110&amp;text=SUBMIT" style="border-radius: 55px;">
        </div>
        <div class="clear"></div>
        <div style="margin: 0 0 5px 10px;">
            <span style="background-color: #000000;border-radius: 10px 10px 0 0;color: #ffffff;font-style: italic;padding: 5px 10px;">
                message
            </span>
        </div>
        <div>
            <textarea style="border: 1px solid #ffffff;width: 95%" rows="5"></textarea>
        </div>
    </div>
</div>

<div class="clear"></div>

<?php view_footer_2(); ?>

<?php
