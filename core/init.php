<?php

require_once "core/classes/database.class.php";
require_once "core/config.php";

$database = new Database( $config );
$quotes = $database->getQuotes( 6 );
$slider = "<div class='slider' id='quote-slider'>";

foreach ( $quotes as $quote ) {

    $slider .= "<div class='slide'><p>$quote->quote</p><p>$quote->author</p></div>";

}

$slider .= "</div><!-- .slider -->";