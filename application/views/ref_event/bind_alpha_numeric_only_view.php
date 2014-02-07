<div id="refContainer">
	<h3>bindAlphaNumericOnly(elementName)</h3>
	<p>
		<strong>Description</strong><br />
		Allow field to have alphanumeric values only.
	</p>
	<p>
		<strong>Parameters</strong><br />
		<ol>
			<li><strong>elementName</strong> - the selected field.</li>
		</ol>
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		Alpha number only field: <input type="text" id="txtAlphaNumberOnly" value="" />
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Generally is used for fields that accept alpha numeric values only (a-z, A-Z, 0-9).<br />
			Do not accept symbols.
		</p>
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">bindAlphaNumericOnly('#txtAlphaNumberOnly');</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		bindAlphaNumericOnly('#txtAlphaNumberOnly');
	});
</script>