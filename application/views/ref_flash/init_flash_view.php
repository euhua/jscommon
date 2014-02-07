<div id="refContainer">
	<h3>initFlash(flashSource, container, width, height, wMode, flashVars)</h3>
	<p>
		<strong>Description</strong><br />
		Initiate Flash media on to container.
	</p>
	<p>
		<strong>Requirements</strong><br />
		jquery.flash.js
	</p>
	<p>
		<strong>Parameters</strong><br />
		<ol>
			<li><strong>flashSource</strong> - the path of the Flash file.</li>
			<li><strong>container</strong> - the container element to be filled with the Flash file.</li>
			<li><strong>width</strong> - width of the Flash file in numeric format (pixels).</li>
			<li><strong>height</strong> - height of the Flash file in numeric format (pixels).</li>
			<li><strong>wMode</strong> <em>(Optional)</em> - wMode of the Flash. Default is 'transparent'.</li>
			<li><strong>flashVars</strong> <em>(Optional)</em> - Flash variables in JSON format.</li>
		</ol>
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		<div id="flashContainer"></div>
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Embedding Flash media into the web page, without messing long chunk of <em>&lt;embed&gt;</em> and <em>&lt;object&gt;</em> HTML codes.
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">$(function(){
	initFlash('media/sample.swf', '#flashContainer', 300, 160);
});</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		initFlash('<?= base_url() ?>media/sample.swf', '#flashContainer', 300, 160);
	});
</script>