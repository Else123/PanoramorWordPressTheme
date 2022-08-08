<?php

if(have_posts()) {
    while (have_posts()) {
        the_posts();

        echo "<h2>";
        the_title();
        echo "</h2>";

        the_content();
    }
}
