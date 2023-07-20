<?php 
    $header_top_offers = get_field('header_top_offers', 'option');
?>

<div class="before_header">
    <?php
        if ($header_top_offers) {
            echo '<p>' . esc_html($header_top_offers) . '</p>';
        } else {
            echo '<p>No offers</p>';
        }
    ?>
</div>