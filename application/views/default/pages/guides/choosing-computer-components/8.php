<?php
$active = str_replace('.php', '', substr(__FILE__, strrpos(__FILE__, '/')+1));

include('data.php');
include('header.php');
?>
    
<h2>Case Sizes</h2>
<div class="row">
	<div class="col-md-8 col-md-offset-2 guide-img">
		<?php echo img(array('src'=>'files/img/guides/choosing-computer-components/cases.png', 'class'=>'img-responsive')); ?>
		<div class="img-caption">
			Standard case sizes.<br />
			Photo credit: <?php echo anchor('http://buildcomputers.net', 'buildcomputers.net', array('target'=>'_blank')); ?>
		</div>
	</div>
</div>
<!-- <p>
	Show what motherboard sizes fit into what size cases. Account for oversized graphics cards as well. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.
</p>

<h2>Picking the Best Look</h2>
<p>
	Mention the various case styles there are to choose from, and their price ranges. Talk about any extra features to look for, such as integrated water cooilng/fans, front-panel USB ports, or LCD displays for monitoring hardware. Pellentesque augue risus, faucibus a blandit vitae, sagittis non odio. Integer mattis viverra vulputate. Etiam a risus id leo laoreet malesuada sed nec ligula. Sed ullamcorper dolor ac ligula tempus tincidunt. Pellentesque arcu libero, mattis quis ipsum sed, porta posuere lacus. Curabitur nibh odio, pharetra quis metus eget, scelerisque consectetur ipsum.
</p> -->

<ul>
	<li>First find out the size of the case you need. If you have an extra long GPU then you will need a case that supports that. You can put a smaller motherboard in a larger case, but you cant put a larger motherboard in a smaller case.</li>
	<li>The second thing you want to think about is how much you want to spend. You can get a bare bones case, just to hold your components for around $20. If you want to spend more money you can start looking at cases with built in fans, water cooling and extravagant deigns.</li>
	<li>Picking the case is the easy part, once you check if everything fits, you can choose which case you think looks the best. There are simplistic cases, such as a plane white case, there are cases covered in fans for increased airflow, and many other designs. </li>
	<li>When shopping for cases, it is also important to consider what you will want on the front panel. Cases commonly have USB ports, audio/ microphone ports, etc.</li>
</ul>

<hr />
<p>
	And that's it! Congratulations, you've just designed your very own computer! All that's left is to acquire the parts and put it all together. Keep an eye out for a future guide covering the actual assembly process.
</p>

<?php include('footer.php'); ?>