<div id="refContainer">
	<h3>getDateTimeInString(inputDate)</h3>
	<p>
		<strong>Description</strong><br />
		Get input date in string format.
	</p>
	<p>
		<strong>Parameters</strong><br />
		<ol>
			<li><strong>inputDate</strong> - the date to be converted.</li>
		</ol>
	</p>
	<p>
		<strong>Return</strong><br />
		The input date time in string format (yyyymmddhhmmss).
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		Convert <span id="lblInputDate">2012/02/26 2:50:09 PM</span> to string:  
		<strong id="lblDateTime"></strong>
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Use for converting the input date time in string for comparison purpose.
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">var inputDate = $('#lblInputDate').text();
$('#lblDateTime').text(getDateTimeInString(inputDate));</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		var inputDate = $('#lblInputDate').text();
		$('#lblDateTime').text(getDateTimeInString(inputDate));
	});
</script>