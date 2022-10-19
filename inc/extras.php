<?php
// Remove p tag from content and excerpt
remove_filter('acf_the_content', 'wpautop');
