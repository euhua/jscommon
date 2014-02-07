<style type="text/css">
	.paddingContainer{
		border: 1px solid #ccc;
		background: #eee;
		width: 350px;
		height: 150px;
		padding: 25px;
		text-align: center;
		margin: 10px 0px;
	}
	.targetedPaddingContainer{
		border: 1px solid #80824c;
		background: #f8fabe;
		width: 350px;
		height: 150px;
		padding: 25px;
		text-align: center;
		margin: 10px 0px;
	}
</style>
<div id="refContainer">
	<h3>bindBackToTopTrigger(element)</h3>
	<p>
		<strong>Description</strong><br />
		Bind trigger onclick, back to the top of the page.
	</p>
	<p>
		<strong>Requirements</strong><br />
		jquery-ui.js
	</p>
	<p>
		<strong>Parameters</strong><br />
		<ol>
			<li><strong>element</strong> - the selected field.</li>
		</ol>
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		<div class="paddingContainer">
			<a href="#" class="backToTopTrigger">Back to Top</a>
		</div>
		<div class="paddingContainer">
			<a href="#" class="backToTopTrigger">Back to Top</a>
		</div>
		<div class="paddingContainer">
			<a href="#" class="backToTopTrigger">Back to Top</a>
		</div>
		<div class="paddingContainer">
			<a href="#" class="backToTopTrigger">Back to Top</a>
		</div>
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Generally is for trigger at the bottom of the page, to go back to top.
		</p>
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">bindBackToTopTrigger('.backToTopTrigger');</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		bindBackToTopTrigger('.backToTopTrigger');
	});
</script>