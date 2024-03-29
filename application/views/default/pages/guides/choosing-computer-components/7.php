<?php
$active = str_replace('.php', '', substr(__FILE__, strrpos(__FILE__, '/')+1));

include('data.php');
include('header.php');
?>
    
<!-- <h2>Picking a Compatible Power Supply</h2> -->
<div class="row">
	<div class="col-md-6 col-md-offset-3 guide-img">
		<?php echo img(array('src'=>'files/img/guides/choosing-computer-components/psu.png', 'class'=>'img-responsive')); ?>
		<div class="img-caption">
			Photo credit: <?php echo anchor('http://atxpowersupplies.com', 'atxpowersupplies.com', array('target'=>'_blank')); ?>
		</div>
	</div>
</div>
<!-- <p>
	Discuss how to know if a given PSU is compatible with the motherboard. Pin count, types of cables, etc. Explain wattage, how to estimate power usage, and what components use the most power. Usage can be calculated at http://www.extreme.outervision.com/psucalculatorlite.jsp. A general rule is to have a slightly stronger power supply than you need. You will most likely have your best performance with components that use 40 to 80 percent of the power supplies output. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.
</p>

<h2>Major PSU Manufacturers</h2>
<p>
	Introduce well-known manufacturers, and any differences between the brands. Corsair, Cooler Master, Thermaltake, EVGA, etc. Maecenas euismod, nulla id convallis aliquam, risus enim dignissim est, vel dapibus lorem massa eget mi. Donec convallis maximus leo, nec porta nisi blandit nec. Vestibulum sed blandit sapien. Fusce ut porta est, nec fermentum eros. Cras interdum placerat efficitur. Curabitur risus velit, porttitor in pretium congue, condimentum sed risus.
</p>

<h2>Efficiency Ratings</h2>
<p>
	Look for power supply with an 80 PLUS efficiency rating. This is not completely necessary, but it can save you money over time. The range of 80 PLUS efficiency is as follows.
</p>
<ul>
	<li>80 PLUS</li>
	<li>80 PLUS Bronze</li>
	<li>80 PLUS Silver</li>
	<li>80 PLUS Gold</li>
	<li>80 PLUS Platinum</li>
</ul> -->

<ul>
	<li>Stick to well known brands. There are plenty of companies that make cheap, generic power supplies.</li>
	<ul>
		<li>Corsair</li>
		<li>Cooler Master</li>
		<li>Thermaltake</li>
		<li>EVGA</li>
	</ul>
	<li>Check for compatibility. Make sure that the power supply you are choosing has what you need. Typically it will need the following.</li>
	<ul>
		<li>20/24 ATX pin for the motherboard</li>
		<li>ATX P4 for the motherboard</li>
		<li>SATA connector for the computers drives</li>
		<li>PCI Express for a graphics card (if you have one)</li>
	</ul>
	<li>The wattage you will need depends on the other components. You can calculate the wattage needed at <a href="http://www.extreme.outervision.com/psucalculatorlite.jsp" target="_blank">http://www.extreme.outervision.com/psucalculatorlite.jsp</a>.</li>
	<li>A general rule is to have a slightly stronger power supply than you need. You will most likely have your best performance with components that use 40 to 80 percent of the power supplies output.</li>
	<li>Look for power supply with an 80 PLUS efficiency rating. This is not completely necessary, but it can save you money over time. The range of 80 PLUS efficiency is as follows.</li>
	<ul>
		<li>80 PLUS</li>
		<li>80 PLUS Bronze</li>
		<li>80 PLUS Silver</li>
		<li>80 PLUS Gold</li>
		<li>80 PLUS Platinum</li>
	</ul>
</ul>

<?php include('footer.php'); ?>