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
	.scrollableDiv{
		border: 2px solid #000;
		width: 450px;
		height: 500px;
		padding: 5px;
		overflow-y: scroll;
		overflow-x: hidden;
		margin: 10px 0px;
		position: relative;
	}
	
</style>
<div id="refContainer">
	<h3>scrollToElementAnimated(element, delay, container)</h3>
	<p>
		<strong>Description</strong><br />
		Scroll to the selected element, based on the specified delay.
	</p>
	<p>
		<strong>Parameters</strong><br />
		<ol>
			<li><strong>element</strong> - the targeted element.</li>
			<li><strong>delay</strong> - the animation speed in milliseconds.</li>
			<li><strong>container</strong> <em>(optional)</em> - scrollable container, default is whole document.</li>
		</ol>
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		Click button to trigger the animation 
		<input id="btnTrigger" type="button" value="Trigger" />
		
		<div id="scrollDiv" class="scrollableDiv">
			<div class="paddingContainer">
				This is padding container
			</div>
			<div class="paddingContainer">
				This is padding container
			</div>
			<div class="paddingContainer">
				This is padding container
			</div>
			<div id="targetContainer" class="targetedPaddingContainer">
				This is targeted padding container
			</div>
			<div class="paddingContainer">
				This is padding container
			</div>
			<div class="paddingContainer">
				This is padding container
			</div>
		</div>
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Generally is used to when require user to focus a particular section.
		</p>
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">$('#btnTrigger').click(function(e){
	e.preventDefault();
	scrollToElementAnimated('#targetContainer', 1000, '#scrollDiv'); 
});</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		$('#btnTrigger').click(function(e){
			e.preventDefault();
			scrollToElementAnimated('#targetContainer', 1000, '#scrollDiv');
		});
	});
</script>