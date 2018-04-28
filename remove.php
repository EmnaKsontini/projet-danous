<?php
/**
 * Created by PhpStorm.
 * User: Rym
 * Date: 28-Apr-18
 * Time: 11:33 AM
 */
if(!empty($_SESSION["cart_item"])) {
    foreach($_SESSION["cart_item"] as $k => $v) {
        if($_GET["code"] == $k)	unset($_SESSION["cart_item"][$k]);
        if(empty($_SESSION["cart_item"])) unset($_SESSION["cart_item"]);
    }
}
