<?php
/*
Plugin Name: SyntaxHighlighter Evolved: Go Brush
Description: Adds support for the Go language to the SyntaxHighlighter Evolved plugin. Use [go] and [golang]
Author: Luis Iván Cuende
Version: 1.0.0
Author URI: http://luisivan.net
*/
 
// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_golang_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_golang_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_golang_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-golang', plugins_url( 'shBrushGo.js', __FILE__ ), array('syntaxhighlighter-core'), '1.0.0' );
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_golang_addlang( $brushes ) {
    $brushes['go'] = 'golang';
    $brushes['golang'] = 'golang';
 
    return $brushes;
}
 
?>
