<?php

require_once "core/classes/database.class.php";

$config = new stdClass();
$config->host = "shareddb-s.hosting.stackcp.net";
$config->dbname = "quote-clock-313235d7fb";
$config->username = "quote-clock-313235d7fb";
$config->password = "7hydbn92zu";

$database = new Database( $config );
$quotes = $database->getQuotes( 6 );
$slider = "<div class='slider' id='quote-slider'>";

foreach ( $quotes as $quote ) {

    $slider .= "<div class='slide'><p>$quote->quote</p><p>$quote->author</p></div>";

}

$slider .= "</div><!-- .slider -->";