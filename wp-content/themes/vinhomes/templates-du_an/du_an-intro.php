<?php

// intro du an 18
$id = get_the_ID();
$du_an_intro = get_field('du_an_intro', $id);

?>

<p><strong><?php echo $du_an_intro ;?></strong></p>