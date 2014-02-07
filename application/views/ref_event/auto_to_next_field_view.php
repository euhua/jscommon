<div id="refContainer">
	<h3>autoToNextField(sourceField, targetField, maxLength)</h3>
	<p>
		<strong>Description</strong><br />
		Auto focus the next target field when reached maxlength.
	</p>
	<p>
		<strong>Parameters</strong><br />
		<ol>
			<li><strong>sourceField</strong> - the source field.</li>
			<li><strong>targetField</strong> - the targeted field when the source field is filled up.</li>
			<li><strong>maxLength</strong> - the length which the source field is filled.</li>
		</ol>
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		NRIC: 
		<input type="text" id="txtNricPart1" maxlength="6" value="" /> - 
		<input type="text" id="txtNricPart2" maxlength="2" value="" /> - 
		<input type="text" id="txtNricPart3" maxlength="4" value="" />
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Generally is mostly used on NRIC field.
		</p>
		<p>
			When the first NRIC is filled up, the focus will switch to the next field specified. <br />
			The focus will change from NRIC part 1 to NRIC part 2, then from NRIC part 2 to NRIC part 3.
		</p>
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">autoToNextField('#txtNricPart1', '#txtNricPart2', 6);
autoToNextField('#txtNricPart2', '#txtNricPart3', 2);</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		autoToNextField('#txtNricPart1', '#txtNricPart2', 6);
		autoToNextField('#txtNricPart2', '#txtNricPart3', 2);
	});
</script>