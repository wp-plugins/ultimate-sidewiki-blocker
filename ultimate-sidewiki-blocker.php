<?php
/**********************************************************************
 * Copyright 2006-2009, Celtic Cross Engineering
 * http://www.CelticCrossEng.com
 * 
 * All rights reserved.
 *
 * NOTE: GNU Copyleft is a Socialistic Crock. Capitalism is the only 
 *       workable system for reasonable Men and Women in a Free Society. 
 * 
 *       This software is CopyRIGHTed.
 *
 ***********************************************************************
 * Copyright 2009 Celtic Cross Engineering, and David T. McKee
 * 
 * Licensed under the Apache License, 
 * Version 2.0 (the "License"); you may not use this file except in compliance 
 * with the License. You may obtain a copy of the License at 
 * http://www.apache.org/licenses/LICENSE-2.0 Unless required by applicable 
 * law or agreed to in writing, software distributed under the License is 
 * distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, 
 * either express or implied. See the License for the specific language 
 * governing permissions and limitations under the License. 
 ***********************************************************************/

/*
Plugin Name:Ultimate Sidewiki Blocker
Version: 1.2.3
Plugin URI:http://www.celticcrosseng.com/wpplugs/USWB
Description:Blocks Google Side-Wiki Access To Your WP Pages
Author:David T. McKee, Celtic Cross Engineering
Author URI:http://www.celticcrosseng.com
*/

$key_phrase = get_option('key_phrase');
$sw_detect_str = get_option('sw_detect_str');
$always_block_sw = get_option('always_block_sw');

define('PLUGIN_URI', get_option('siteurl').'/wp-content/plugins/ultimate-sidewiki-blocker/');

function add_block_script() {
   $sw_detect_str = get_option('sw_detect_str');
   $always_block_sw = get_option('always_block_sw');
   if (strstr($_SERVER['HTTP_USER_AGENT'], $sw_detect_str) || $always_block_sw == "true") {
   $key_phrase = get_option('key_phrase');
   print
   <<<EOT
<!-- Detect Sidewiki and block if detected --> 
<script type="text/javascript">
      var myKey = '$key_phrase';
      var _0x3680=["\x41","\x42","\x43","\x44","\x45","\x46","\x47","\x48","\x49","\x4A","\x4B","\x4C","\x4D","\x4E","\x4F","\x50","\x51","\x52","\x53","\x54","\x55","\x56","\x57","\x58","\x59","\x5A","\x30","\x31","\x32","\x33","\x34","\x35","\x36","\x37","\x38","\x39","\x61","\x62","\x63","\x64","\x65","\x66","\x67","\x68","\x69","\x6A","\x6B","\x6C","\x6D","\x6E","\x6F","\x70","\x71","\x72","\x73","\x74","\x75","\x76","\x77","\x78","\x79","\x7A","","\x72\x61\x6E\x64\x6F\x6D","\x66\x6C\x6F\x6F\x72","\x67\x65\x74\x54\x69\x6D\x65","\x5F","\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x23","\x69\x6E\x64\x65\x78\x4F\x66"];var _0x488b=[_0x3680[0],_0x3680[1],_0x3680[2],_0x3680[3],_0x3680[4],_0x3680[5],_0x3680[6],_0x3680[7],_0x3680[8],_0x3680[9],_0x3680[10],_0x3680[11],_0x3680[12],_0x3680[13],_0x3680[14],_0x3680[15],_0x3680[16],_0x3680[17],_0x3680[18],_0x3680[19],_0x3680[20],_0x3680[21],_0x3680[22],_0x3680[23],_0x3680[24],_0x3680[25],_0x3680[26],_0x3680[27],_0x3680[28],_0x3680[29],_0x3680[30],_0x3680[31],_0x3680[32],_0x3680[33],_0x3680[34],_0x3680[35],_0x3680[36],_0x3680[37],_0x3680[38],_0x3680[39],_0x3680[40],_0x3680[41],_0x3680[42],_0x3680[43],_0x3680[44],_0x3680[45],_0x3680[46],_0x3680[47],_0x3680[48],_0x3680[49],_0x3680[50],_0x3680[51],_0x3680[52],_0x3680[53],_0x3680[54],_0x3680[55],_0x3680[56],_0x3680[57],_0x3680[58],_0x3680[59],_0x3680[60],_0x3680[61],_0x3680[62],_0x3680[63],_0x3680[64],_0x3680[65],_0x3680[66],_0x3680[67],_0x3680[68],_0x3680[69],_0x3680[70]];var chArray=[_0x488b[0],_0x488b[1],_0x488b[2],_0x488b[3],_0x488b[4],_0x488b[5],_0x488b[6],_0x488b[7],_0x488b[8],_0x488b[9],_0x488b[10],_0x488b[11],_0x488b[12],_0x488b[13],_0x488b[14],_0x488b[15],_0x488b[16],_0x488b[17],_0x488b[18],_0x488b[19],_0x488b[20],_0x488b[21],_0x488b[22],_0x488b[23],_0x488b[24],_0x488b[25],_0x488b[26],_0x488b[27],_0x488b[28],_0x488b[29],_0x488b[30],_0x488b[31],_0x488b[32],_0x488b[33],_0x488b[34],_0x488b[35],_0x488b[36],_0x488b[37],_0x488b[38],_0x488b[39],_0x488b[40],_0x488b[41],_0x488b[42],_0x488b[43],_0x488b[44],_0x488b[45],_0x488b[46],_0x488b[47],_0x488b[48],_0x488b[49],_0x488b[50],_0x488b[51],_0x488b[52],_0x488b[53],_0x488b[54],_0x488b[55],_0x488b[56],_0x488b[57],_0x488b[58],_0x488b[59],_0x488b[60],_0x488b[61]];function gen(){var _0xc89ex4=_0x488b[62];var _0xc89ex5=Math[_0x488b[64]](Math[_0x488b[63]]()*10);for(var _0xc89ex6=0;_0xc89ex6<=(5+_0xc89ex5);_0xc89ex6++){_0xc89ex4+=chArray[Math[_0x488b[64]](Math[_0x488b[63]]()*62)];} ;var _0xc89ex7= new Date()[_0x488b[65]]();var _0xc89ex8=_0x488b[66];if(myKey==null||myKey==_0x488b[62]){_0xc89ex8=_0x488b[62];} ;var _0xc89ex9=myKey+_0xc89ex8+_0xc89ex4+_0xc89ex7;return _0xc89ex9;} ;var loc=window[_0x488b[68]][_0x488b[67]];if(loc[_0x488b[70]](_0x488b[69])==-1){window[_0x488b[68]][_0x488b[67]]=loc+_0x488b[69]+gen();} ;

   </script>
EOT;
   }
}

if($key_phrase == '') {
	add_option('key_phrase', 'Key Phrase');
}

if($sw_detect_str == '') {
	add_option('sw_detect_str', 'GTB6');
}

if($always_block_sw == '') {
	add_option('always_block_sw', 'false');
}


function usb_options() {
	if(isset($_POST['key_phrase'])){
		update_option("key_phrase", ($_POST["key_phrase"]));
	}
	if (isset($_POST['always_block_sw'])){
		update_option("always_block_sw", ($_POST["always_block_sw"]));
	}
?>
<div class="wrap">
<form method="post" name="uswb_admin">
<h2>The Ultimate Side-Wiki Blocker: Plugin Admin</h2>
<table border="0" cellspacing="2" cellpadding="0">
        <tr>
        <table>
	   <tr>
		<td width="20"><img src="<?php echo PLUGIN_URI.'sw_block_icon.png'; ?>" width="64px" height="64px" ></td>
		<td><h3><b>USWB V1.1 Celtic Cross Engineering, 2009</b></h3></td>
		<td></td>
	   </tr>
        </table>
        <table>
	<tr>
		<td width="20"></td>
		<td><b>Redirect Key Phrase:</b></td>
		<td><input type="text" size="10" name="key_phrase" value="<?php echo get_option('key_phrase'); ?>"></td>
		<td></td>
	</tr>
	<tr>
            <td width="20"></td>
	    <td><b>Always Block?</b></td>                
            <td><input type="hidden" name="always_block_sw" value="false">
                <input type="checkbox" name="always_block_sw" value="true" <?php if (get_option('always_block_sw') == 'true') echo 'checked' ?>></td>
            <td><p>If checked, then a blocking hash will be created regardless if SideWiki is detected.</p></td>
	</tr>
	<tr>
            <td width="20"></td>
	    <td><b>Detection String:</b></td>                
	    <td><input type="text" size="8" name="sw_detect_str" value="<?php echo get_option('sw_detect_str'); ?>" ></td>
	    <td></td>
	</tr>
   </table>
</table>
<p></p>
<p><input type="submit" name="submitButtonName" value="Update" border="0"></p>
</form>
<h2>About this plug-in</h2>
This Plugin stops the Side-Wiki in Google Toolbar from being able to track your site so that evil or spammy comments cannot be posted alongside you content.  You can set the special key in the hash to insure that it is your site that is generating the hash.

You can also set if you want to hash only if side-wiki is detected or always on.

Finally, you have to ability to set the block detection string if that becomes necessary in the future (currently the Side-Wiki detection string is 'GTB6')
<br>
For Information and Support, go to <a href="http://www.celticcrosseng.com/wpplugs/USWB">CelticCrossEng.com/wpp/uswb</a>.<br>
</div>
<?php
}

function block_script_options() {
	add_submenu_page('options-general.php', 'Ultimate Side-Wiki Blocker', 'Ultimate Side-Wiki Blocker', 8, __FILE__, 'usb_options');
}

/* Add actions */
add_action('wp_head', 'add_block_script');
 
add_action('admin_menu', 'block_script_options');

?>
