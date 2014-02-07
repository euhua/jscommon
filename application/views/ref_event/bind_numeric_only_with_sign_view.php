<div id="refContainer">
	<h3>bindNumericOnlyWithSign(elementName)</h3>
	<p>
		<strong>Description</strong><br />
		Allow field to have signed numeric values only.
	</p>
	<p>
		<strong>Parameters</strong><br />
		<ol>
			<li><strong>elementName</strong> - the selected field.</li>
		</ol>
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		Number with sign only field: <input type="text" id="txtNumberWithSignOnly" value="" />
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Generally is used for fields that accept number values only (0-9), with the addition it accepts signs (- and +).
		</p>
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">bindNumericOnlyWithSign('#txtNumberWithSignOnly');</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		bindNumericOnlyWithSign('#txtNumberWithSignOnly');
	});
</script>