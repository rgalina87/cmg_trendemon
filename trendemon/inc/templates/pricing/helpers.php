<?php
function pricing_rating_get_stars($num) {
    $star_full = '<img class="no-lazyload" src="' . get_stylesheet_directory_uri() .'/assetstal/images/templates/pricing/icon-star-filled.svg">';
    $star_empty = '<img class="no-lazyload" src="' . get_stylesheet_directory_uri() .'/assetstal/images/templates/pricing/icon-star-empty.svg">';
    $star_half = '<img class="no-lazyload" src="' . get_stylesheet_directory_uri() .'/assetstal/images/templates/pricing/icon-star-half.svg">';

    $total_stars = 5;

    $full_stars = floor($num);

    $empty_stars = $total_stars - $full_stars;

    if (is_numeric( $num ) && floor( $num ) != $num) {
        $half_stars = 1;
        $empty_stars--;
    } else {
        $half_stars = 0;
    }

    //echo '<div class=vp-rating-stars">';
    for($i = 1; $i<=$full_stars;$i++) { echo $star_full; }
    for($i = 1; $i<=$half_stars;$i++) { echo $star_half; }
    for($i = 1; $i<=$empty_stars;$i++) { echo $star_empty; }
    //echo '</div>';

}
