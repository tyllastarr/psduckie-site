<?php



// Changing excerpt length
function neo_trendy_excerpt_length($length) {
return 100;
}
add_filter('excerpt_length', 'neo_trendy_excerpt_length');

// Changing excerpt more
function neo_trendy_excerpt_more($more) {
return ' ...';
}
add_filter('excerpt_more', 'neo_trendy_excerpt_more');




?>