<?php

require_once '☃_builder.class.php';
require_once '⚙/☃_config.php';

if ( isset( $argv[1] ) ) {
	$number_of_☃ = (int) $argv[1];
}//end if

$☃_builder = new \☃\Builder;

echo $☃_builder->build( $number_of_☃ );
