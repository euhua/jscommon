<div id="refContainer">
	<h3>bindCharCounter(inputElement, counterDisplayElement, maxChar)</h3>
	<p>
		<strong>Description</strong><br />
		Shows characters count left of the field and blocks when maxChar is reached.
	</p>
	<p>
		<strong>Parameters</strong><br />
		<ol>
			<li><strong>inputElement</strong> - the input field.</li>
			<li><strong>counterDisplayElement</strong> - target element that shows the counter.</li>
			<li><strong>maxChar</strong> - maximum characters allowed.</li>
		</ol>
	</p>
	<hr />
	<div id="canvasContainer">
		<h3>Demo</h3>
		Character counted field: 
		<input type="text" id="txtEntry" value="" size="35" />
		<span id="lblCounter"></span> characters left.
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Generally is used on entry/slogan submission as a character counter
		</p>
		<p>
			<strong>HTML</strong><br />
			It would require a textarea or a text input, which then then character counter will be displayed on the designated counterDisplayElement.
			<pre><code class="html">Character counted field: 
&lt;input type=&quot;text&quot; id=&quot;txtEntry&quot; value=&quot;&quot; /&gt;
&lt;span id=&quot;lblCounter&quot;&gt;&lt;/span&gt; characters left.</code></pre>
		</p>
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">bindCharCounter('#txtEntry', '#lblCounter', 30);</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		bindCharCounter('#txtEntry', '#lblCounter', 30);
	});
</script>