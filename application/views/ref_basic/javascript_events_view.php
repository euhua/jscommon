<div id="refContainer">
	<h3>JavaScript Events</h3>
	<div id="canvasContainer">
		<h3>Demo</h3>
		<div class="separator">
			<strong>Click and Perform</strong><br />
			<input type="button" id="btnClickAndPerform" value="Click and Perform" />
		</div>
		<div class="separator">
			<strong>Change Element Value</strong><br />
			<input type="button" id="btnChangeValue" value="Change Value" />
			<input type="text" id="txtOldValue" value="This is old value" />
		</div>
		<div class="separator">
			<strong>Show or Hide Element</strong><br />
			<input type="button" id="btnShowMe" value="Show Me" />
			<input type="button" id="btnHideMe" value="Hide me" style="display: none;" />
		</div>
		<div class="separator">
			<strong>Hover Effect</strong><br />
			<input type="button" id="btnHover" value="Hover Me Please" />
		</div>
		<div class="separator">
			<strong>Keyboard Keypress</strong><br />
			<input type="text" id="btnTypeAndChange" value="Type something here" size="35" />
			<span id="lblTypeAndChange"></span>
		</div>
	</div>
	<div id="exampleContainer">
		<strong>JavaScripts</strong>
		<pre><code class="javascript">$(function(){
	//Click and Perform
	$('#btnClickAndPerform').click(function(){ alert('Click and Perform'); });
	
	//Change Element Value
	$('#btnChangeValue').click(function(){
		$('#txtOldValue').val('I am a new value'); 
	});
	
	//Show or Hide Element
	$('#btnHideMe').click(function(){
		$(this).hide();
	});
	$('#btnShowMe').click(function(){
		$('#btnHideMe').show();
	});
	
	//Hover Effect
	$('#btnHover').hover(function(){
		$(this).val('You are hovering me!');
	},function(){
		$(this).val('Hover me please');
	});
	
	//Keyboard Keypress
	$('#btnTypeAndChange').keyup(function(){
		$('#lblTypeAndChange').text('You typed in something.');
	});
});</pre></code>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
        $('#btnClickAndPerform').click(function(){ alert('Click and Perform'); });
		$('#btnChangeValue').click(function(){
			$('#txtOldValue').val('I am a new value'); 
		});
		$('#btnHideMe').click(function(){
			$(this).hide();
		});
		$('#btnShowMe').click(function(){
			$('#btnHideMe').show();
		});
		$('#btnHover').hover(function(){
			$(this).val('You are hovering me!');
		},function(){
			$(this).val('Hover me please');
		});
		$('#btnTypeAndChange').keyup(function(){
			$('#lblTypeAndChange').text('You typed in something.');
		});
	});
</script>