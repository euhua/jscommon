<div id="refContainer">
	<h3>getHashValue()</h3>
	<p>
		<strong>Description</strong><br />
		Get hash value, the string after # in url.
	</p>
	<p>
		<strong>Return</strong><br />
		Hash value after the # in url.
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		Current hash value: 
		<strong id="lblHashValue"></strong>
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Use for generating the current date time in string for comparison purpose.
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">$('#lblHashValue').text(getHashValue());</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		$('#lblHashValue').text(getHashValue());
	});
</script>