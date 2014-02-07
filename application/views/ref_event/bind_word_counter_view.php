<div id="refContainer">
	<h3>bindWordCounter(inputElement, counterDisplayElement, maxWord)</h3>
	<p>
		<strong>Description</strong><br />
		Shows word count left of the field blocks when maxWord is reached.
	</p>
	<p>
		<strong>Parameters</strong><br />
		<ol>
			<li><strong>inputElement</strong> - the input field.</li>
			<li><strong>counterDisplayElement</strong> - target element that shows the counter.</li>
			<li><strong>maxWord</strong> - maximum words allowed.</li>
		</ol>
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		Word counted field: 
		<input type="text" id="txtEntry" value="" size="35" />
		<span id="lblCounter"></span> words left.
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Generally is used on entry/slogan submission as a word counter
		</p>
		<p>
			*Please do note that this word counter is not accurate, if there are no spaces on symbols like period (.) and comma (,).
		</p>
		<p>
			<strong>HTML</strong><br />
			It would require a textarea or a text input, which then then word counter will be displayed on the designated counterDisplayElement.
			<pre><code class="html">Word counted field: 
&lt;input type=&quot;text&quot; id=&quot;txtEntry&quot; value=&quot;&quot; /&gt;
&lt;span id=&quot;lblCounter&quot;&gt;&lt;/span&gt; words left.</code></pre>
		</p>
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">bindWordCounter('#txtEntry', '#lblCounter', 5);</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		bindWordCounter('#txtEntry', '#lblCounter', 5);
	});
</script>