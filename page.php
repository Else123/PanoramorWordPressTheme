<?php

echo "<h2>Das ist eine statische Seite</h2>";

if(have_posts()) {
    while (have_posts()) {
        the_posts();

        echo "<h2>";
        the_title();
        echo "</h2>";

        the_content();
    }
}