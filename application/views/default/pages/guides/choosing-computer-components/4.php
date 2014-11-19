<?php
$active = str_replace('.php', '', substr(__FILE__, strrpos(__FILE__, '/')+1));

include('data.php');
include('header.php');
?>
    
<h2>What is RAM?</h2>
<div class="row">
	<div class="col-md-6 col-md-offset-3 guide-img">
		<?php echo img(array('src'=>'files/img/guides/choosing-computer-components/RAM.jpg', 'class'=>'img-responsive')); ?>
		<div class="img-caption">
			A stick of DDR3 RAM.<br />
			Photo credit: <?php echo anchor('http://eteknix.com', 'eteknix.com', array('target'=>'_blank')); ?>
		</div>
	</div>
</div>
<p>
	Go over what the purpose of RAM is and how the computer uses it. Discuss what having more RAM allows you to do, as well as faster memory. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.
</p>

<h2>How Much do I Need?</h2>
<p>
	Give usage examples, how much memory is generally required for certain uses (gaming vs video editing vs web browsing). How much RAM is too much? Mauris et mollis dui. Integer congue nec lacus vel placerat. Vestibulum sit amet nisi aliquam, facilisis tortor a, aliquet dolor. Aenean consequat sit amet leo et pretium. Suspendisse dui sem, varius non sapien sed, tincidunt tempus justo. Sed lacinia, massa vehicula egestas vestibulum, orci nibh tristique metus, in congue libero metus vel urna. Curabitur eget nibh sed ex porta accumsan et quis ex.
</p>

<h2>Picking a Brand</h2>
<p>
	Discuss brand options for memory, and any differences between them. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque est ligula, ornare eu convallis in, tempor et ipsum. Vivamus eleifend urna ut lacinia dignissim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
</p>

<h2>Making sure it's compatible</h2>
<p>
	Cover DDR/2/3 RAM types, speeds, etc. Anything that could factor into compatibility with the motherboard. Morbi sed blandit nulla. Etiam ac odio gravida urna sagittis vestibulum. Ut mollis nunc nec libero porta, quis faucibus ex pellentesque. Nullam fermentum augue urna, et interdum felis ullamcorper sed. Vivamus ac sem pharetra, hendrerit erat consectetur, feugiat tortor. Etiam justo quam, placerat non tempor non, condimentum ut sem. Aenean fringilla luctus finibus. Suspendisse euismod, ligula ut blandit gravida, nibh nulla mollis arcu, at congue velit metus id magna. Integer vel eros orci. Vivamus aliquam libero at felis molestie, eu egestas quam placerat. Vivamus in mollis neque.
</p>
<?php include('footer.php'); ?>