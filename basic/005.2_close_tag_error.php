<?php 

/**
 * it will generate an error because 
 * 005.1_close_tag_to_generate_error.php file has 
 * extra lines after php close tag ?>
 * 
 * These lines characters are sent as output by
 * the PHP interpreter and could interfere with
 * the HTTP headers or cause other unintended 
 * side-effects.
 * 
 * By not closing the script in a PHP file, 
 * you prevent the chance of newline characters
 * being sent.
 */
include('005.1_close_tag_to_generate_error.php');

header('Content-type: application/text');
