<style type="text/css">
	.thumbnail{
		width: 100px;
		height: 100px;
		overflow: hidden;
		border: 5px solid #fff;
		background: #999;
		float: left;
		margin: 5px;
	}
	.thumbnail img{
		display: none;
		width: 100px;
		height: 100px;
	}
</style>
<div id="refContainer">
	<h3>postloadImage(element, animSpeed)</h3>
	<p>
		<strong>Description</strong><br />
		Postload images.
	</p>
	<p>
		<strong>Parameters</strong><br />
		<ol>
			<li><strong>element</strong> - class or ID of the element.</li>
			<li><strong>animSpeed</strong> <em>(Optional)</em> - animation speed once the image has loaded in milliseconds.</li>
		</ol>
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		<input type="button" id="btnLoadImage" value="Click to load images" />
		<br />
		<div class="thumbnail">
			<input type="hidden" id="preload" class="postloadImage" value="<?= base_url() ?>images/thumb01.jpg" />
		</div>
		<div class="thumbnail">
			<input type="hidden" class="postloadImage" value="<?= base_url() ?>images/thumb02.jpg" />
		</div>
		<div class="thumbnail">
			<input type="hidden" class="postloadImage" value="<?= base_url() ?>images/thumb03.jpg" />
		</div>
		<div class="thumbnail">
			<input type="hidden" class="postloadImage" value="<?= base_url() ?>images/thumb04.jpg" />
		</div>
		<div class="clear"></div>
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Only load the images when required, to speed up the page load. <br />
			For this, we have a button to trigger that action.
		</p>
		<p>
			
			<strong>HTML</strong><br />
			First, we would need a trigger to postload the images.
		</p>
		<p>
			Next, we need the containers that will be holding the images. <br />
			Inside these containers, we need an invisible field <em>input type="hidden"</em> to hold the image path, <br />
			and we give it a classname <em>postloadImage</em>.
			It will read the image path and generate the <em>img</em> tag, when the script runs.
			<pre><code class="html">&lt;input type=&quot;button&quot; id=&quot;btnLoadImage&quot; value=&quot;Click to load images&quot; /&gt;
&lt;br /&gt;
&lt;div class=&quot;thumbnail&quot;&gt;
	&lt;input type=&quot;hidden&quot; id=&quot;preload&quot; class=&quot;postloadImage&quot; value=&quot;<?= base_url() ?>images/thumb01.jpg&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;thumbnail&quot;&gt;
	&lt;input type=&quot;hidden&quot; class=&quot;postloadImage&quot; value=&quot;<?= base_url() ?>images/thumb02.jpg&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;thumbnail&quot;&gt;
	&lt;input type=&quot;hidden&quot; class=&quot;postloadImage&quot; value=&quot;<?= base_url() ?>images/thumb03.jpg&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;thumbnail&quot;&gt;
	&lt;input type=&quot;hidden&quot; class=&quot;postloadImage&quot; value=&quot;<?= base_url() ?>images/thumb04.jpg&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;clear&quot;&gt;&lt;/div&gt;</code></pre>
		</p>
		<p>
			<strong>CSS</strong><br />
			Define the image container along with the <em>img</em> tag set to <em>display: none</em>, 
			so that the image will fade in gracefully when loaded completely.
			<pre><code class="css">.thumbnail{
	width: 100px;
	height: 100px;
	overflow: hidden;
	border: 5px solid #fff;
	background: #999;
	float: left;
	margin: 5px;
}
.thumbnail img{
	display: none;
	width: 100px;
	height: 100px;
}</code></pre>
		</p>
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">$(function(){
	$('#btnLoadImage').click(function(e){
		e.preventDefault();
		//postload the images with the class postloadImage, with animation delay 0.5 seconds.
		postloadImage('.postloadImage', 500); 
	});
});</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		
		$('#btnLoadImage').click(function(e){
			e.preventDefault();
			postloadImage('.postloadImage', 500);
		});
	});
</script>