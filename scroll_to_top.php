<?php
/*
Plugin Name: Simple Scroll To Top Button
Description: Adds A Simple Scroll To Top Button To The Footer Of The Page
Version: 1.0
Author: Cup O Code
Author URI: https://www.cupocode.com
*/
add_action( 'wp_footer', 'back_to_top' );
function back_to_top(){
?>
<style>
    .to_top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      z-index: 9999;
      width: 30px;
      height: 30px;
      text-align: center;
      line-height: 30px;
      background: #f5f5f5;
      color: #444;
      cursor: pointer;
      border-radius: 2px;
      display: none;
    }
    
    .to_top:hover {
      background: #e9ebec;
    }
    
    .to_top-show {
      display: block;
    }		
</style>
<script>
  document.querySelector("footer").innerHTML =
    "<a class='to_top' onclick='toTop();'>&#x25B2;</a>";
  
  function toTop() {
    window.scrollTo(0, 0);
  }
  
  (function () {
    "use strict";
  
    function trackScroll() {
      var scrolled = window.pageYOffset;
      var coords = document.documentElement.clientHeight;
  
      if (scrolled > coords) {
        toTop.classList.add("to_top-show");
      }
      if (scrolled < coords) {
        toTop.classList.remove("to_top-show");
      }
    }
  
    var toTop = document.querySelector(".to_top");
  
    window.addEventListener("scroll", trackScroll);
    toTop.addEventListener("click", toTop);
  })();
</script>
