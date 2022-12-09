<?php
/**
 * @var array $_NAVBAR
 */
// The default navbar configuration.
//
// For add-ons developers: do not edit or provide this file in your add-on zip file, as it will erase it.
// Use the method $_NAVBAR[] = array("icon" => "font awesome icon", "text" => "text for the item", "link" => "link on click"); in your init.php file.
$_NAVBAR[] = array("icon" => "fas fa-home", "text" => "Home", "link" => "/");
$_NAVBAR[] = array("icon" => "fas fa-user-lock", "text" => "Panel credentials", "link" => "/user/credentials");
$_NAVBAR[] = array("icon" => "fas fa-share", "text" => "Referrals", "link" => "/user/referrals");
$_NAVBAR[] = array("icon" => "fas fa-dollar-sign", "text" => "Earn coins", "link" => "/earn/select");
$_NAVBAR[] = array("icon" => "fas fa-shopping-cart", "text" => "Resources shop", "link" => "/shop");