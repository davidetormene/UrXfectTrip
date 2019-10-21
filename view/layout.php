<?php
/**
 * Created by PhpStorm.
 * User: Davide
 * Date: 21/10/2019
 * Time: 19:25
 */
function layoutSetContent($content){
    require_once("header.php");
    require_once($content);
    require_once("footer.php");
}