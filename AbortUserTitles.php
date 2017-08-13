<?php

if ( function_exists( 'wfLoadExtension' ) ) {
    wfLoadExtension( 'AbortUserTitles' );
    return;
} else {
    die( 'This version of the AbortUserTitles extension requires MediaWiki 1.25+' );
}
