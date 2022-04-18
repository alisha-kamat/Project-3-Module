<?php
/**
 * Meta character count plugin
 * 
 * @author Alisha Kamat <alishakamat8@gmail.com>
 *
 * @copyright (C) 2018 Open Source Matters, Inc. <https://www.joomla.org>
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 * @since     4.0
 */
defined('_JEXEC') or die('Restricted access');

?>


  <textarea id="text"  onkeyup="count(this)">
  </textarea>
  <br>
  <p id="charNum">160 characters remaining of 160.</p>
  <br><br>
  <script>
     function count(val) 
     {
        var len = val.value.length;
        if (len > 160) 
        {
            val.value = val.value.substring(0, 160);
            document.getElementById("charNum").style.color = "red";
        } 
        else 
        {
            document.getElementById("charNum").innerHTML 
                = (160-len)+' characters remaining of 160.';
            document.getElementById("charNum").style.color = "green";
        }
    };
  </script>