<div id="refContainer">
	<h3>isHandHeldDevice()</h3>
	<p>
		<strong>Description</strong><br />
		Is it a hand held device, e.g. tablet, smartphones.
	</p>
	<p>
		<strong>Return</strong><br />
		<em>true</em> or <em>false</em>
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		This is a hand held device? 
		<strong id="lblAnswer"></strong>
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Generally is used to detect user's browser, if it is from a hand held device like iPad, iPhone, Android phone.
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">$(function(){
	if(isHandHeldDevice())
		$('#lblAnswer').text('Yes, it is!');
	else
		$('#lblAnswer').text('No, it is not.');
});</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		if(isHandHeldDevice())
			$('#lblAnswer').text('Yes, it is!');
		else
			$('#lblAnswer').text('No, it is not.');
	});
</script>