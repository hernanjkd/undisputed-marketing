<?php
include('blog/wp-load.php');
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">

<head profile="http://gmpg.org/xfn/11">

<meta name="generator" content="WordPress 2.9.2" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

</head>

<body>






<div class="center" id="buttons1">
	<a href="http://www.undisputedmarketing.com">Home</a>
	<span>|</span>
	<a style="padding-right: 179px" href="/blog/index.php?pagename=archive-index">Archives</a>
	<span style="position:relative;top:-4px;left:15px;font-family:verdana;color:#333333"><?php echo date('F j,Y'); ?></span>
</div>

<div class="center" id="buttons">
<table id="buttons_sub"><tr>
	<td onmouseover="show('aboutus')" onmouseout="hide('aboutus')">
			&nbsp;&nbsp;&nbsp;&nbsp;About Us
		<table class="sub" id="aboutus" 
			onmouseover="show(this.id)" 
			onmouseout="hide(this.id)">
		<tr><td
        onclick="javascript:location='http://undisputedmarketing.com/blog/?page_id=2'">
                Our Mission</td></tr>
		<tr><td
        onclick="javascript:location='http://undisputedmarketing.com/blog/?page_id=150'">
                Meet Carlos</td></tr>
		<tr><td
        onclick="javascript:location='http://undisputedmarketing.com/blog/?page_id=178'">
                FAQ</td></tr>
		<tr><td>SiteMap</td></tr>
		</table>
	</td>
	<td class="bar">|</td>
	<td onmouseover="show('store')" onmouseout="hide('store')">
			&nbsp;&nbsp;&nbsp;&nbsp;Online Store
		<table class="sub" id="store"
			onmouseover="show(this.id)"
			onmouseout="hide(this.id)">
		<tr><td>All Products</td></tr>
		</table>
	</td>
	<td class="bar">|</td>
	<td onmouseover="show('tools')" onmouseout="hide('tools')">
			&nbsp;&nbsp;&nbsp;&nbsp;Acupuncture Marketing Tools
		<table class="sub" id="tools"
			onmouseover="show(this.id)"
			onmouseout="hide(this.id)">
		<tr><td
        onclick="javascript:location='http://undisputedmarketing.com/recommended_reading.php'">
                Recommended Reading</td></tr>
		<tr><td>Recommended Links</td></tr>
		</table>
	</td>
	<td class="bar">|</td>
	<td onmouseover="show('contact')" onmouseout="hide('contact')">
			&nbsp;&nbsp;&nbsp;&nbsp;Contact Us
		<table class="sub" id="contact"
			onmouseover="show(this.id)"
			onmouseout="hide(this.id)">
		<tr><td>Article Ideas and Suggestions</td></tr>
		<tr><td>Your Feedback</td></tr>
		<tr><td
	onclick="javascript:location='http://undisputedmarketing.com/consultations.php'">
		Consultations</td></tr>
		</table>
	</td>
	<td class="bar">|</td>
	<td style="padding-right:40px;cursor:pointer" 
	onclick="javascript:location='http://undisputedmarketing.com/blog/?page_id=96'"
		onmouseover="show('people')" onmouseout="hide('people')">
			&nbsp;&nbsp;&nbsp;&nbsp;People Just Like You
		<table class="sub" id="people"
			onmouseover="show(this.id)"
			onmouseout="hide(this.id)">
		<tr><td 
	onclick="javascript:location='http://undisputedmarketing.com/blog/?page_id=96'">
		Client Feedback</td></tr>
		</table>
	</td>
</tr></table>
</div>



<script type="text/javascript">

function hide(id) {
    document.getElementById(id).style.visibility = 'hidden'
}

function show(id) {
    document.getElementById(id).style.visibility = 'visible'
}

</script>


<div id="page_wrap" class="center">
<div id="color">
<div id="white">

<img src="/blog/header2.png" style="position:absolute;z-index:1" />

<table id="content">
<tr>
<td height="200px"></td>
</tr>

<tr>
<td style="width:845px;text-align:center">

<iframe src="http://astore.amazon.com/undisputedmarketing-20" width="800" height="920" frameborder="0" scrolling="no"></iframe>

</td></tr>

<?php
get_footer();
?>