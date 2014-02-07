<div id="refContainer">
	<h3>getCurrentDateTimeInString()</h3>
	<p>
		<strong>Description</strong><br />
		Get current time in string format.
	</p>
	<p>
		<strong>Return</strong><br />
		Current date and time in string format (yyyymmddhhmmss).
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		Current date and time in string: 
		<strong id="lblDateTime"></strong>
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Use for generating the current date time in string for comparison purpose.
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">var currentDateTimeInString = getCurrentDateTimeInString();
$('#lblDateTime').text(currentDateTimeInString);</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		var currentDateTimeInString = getCurrentDateTimeInString();
		$('#lblDateTime').text(currentDateTimeInString);
	});
</script>