<?php
/*
Plugin Name: CI Integer calculator
Plugin URI: https://www.calculator.io/integer-calculator/
Description: Adding and subtracting integers calculator allows adding and subtracting positive and negative integers and decimals, demonstrating the solution algorithm.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_integer_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Integer Calculator by Calculator.iO";

function display_ci_integer_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Integer Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_integer_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_integer_calculator', 'display_ci_integer_calculator' );