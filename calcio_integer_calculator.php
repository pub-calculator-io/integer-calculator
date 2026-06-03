<?php
/*
Plugin Name: Integer Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/integer-calculator/
Description: Master math instantly! Use our free Integer Calculator to add, subtract, multiply, and divide positive and negative numbers with step-by-step solutions.
Version: 1.0.0
Author: www.calculator.io / Integer Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_integer_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Integer Calculator by www.calculator.io";

function calcio_integer_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Integer Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_integer_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_integer_calculator', 'calcio_integer_calculator_shortcode' );