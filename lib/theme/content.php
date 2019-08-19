<?php

function fn_clean_numbers( $number ) {
  $clean_number = preg_replace('/\(0|\)|\/|[\s-]+/', '', $number );
  return apply_filters( 'fn_clean_numbers', $clean_number, $number );
}
