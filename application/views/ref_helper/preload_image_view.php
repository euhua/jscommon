<div id="refContainer">
	<h3>preloadImage(images)</h3>
	<p>
		<strong>Description</strong><br />
		Preload images.
	</p>
	<p>
		<strong>Parameters</strong><br />
		<ol>
			<li><strong>images</strong> - an image path or an array of image path.</li>
		</ol>
	</p>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Generally is to preload a bunch of images that will be used soon in the web application.
		</p>
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">$(window).load(function(){
	var images = [
		'<?= base_url() ?>images/slide01.jpg',
		'<?= base_url() ?>images/slide02.jpg',
		'<?= base_url() ?>images/slide03.jpg'
	];
	
	//load bunch of images in array
	preloadImage(images);
	
	//load a single image
	preloadImage('<?= base_url() ?>images/slide01.jpg');
});</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
	});
	
	$(window).load(function(){
		var images = [
			'<?= base_url() ?>images/slide01.jpg',
			'<?= base_url() ?>images/slide02.jpg',
			'<?= base_url() ?>images/slide03.jpg'
		];
		
		//load bunch of images in array
		preloadImage(images);
		
		//load a single image
		preloadImage('<?= base_url() ?>images/slide01.jpg');
	});
</script>