<style type="text/css">
	#overlayBg, #overlaySecondaryBg{
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: #000;
		opacity: 0.5;
		filter: alpha(opacity=50);
		display: none;
	}
	#overlaySecondaryBg{ background: #fff; }
	#windowA, #windowB{
		width: 350px;
		height: 150px;
		padding: 10px;
		margin-top: -300px;
		background: #fff;
		border: 5px solid #999;
		display: none;
	}
	.close{ text-align: right; }
	.close a{
		font-size: 16px;
		font-weight: bold;
		color: #999;
		text-decoration: none;
	}
	.close a:hover{
		color: #333;
		text-decoration: underline;
	}
</style>
<div id="refContainer">
	<h3>bindOverlayWindow(triggerElement, windowElement, closeElement, darkenBackground, fadeIn, overlayBgElement)</h3>
	<p>
		<strong>Description</strong><br />
		Setup overlay pop up window. It auto centers and position the window top of other HTML elements.
	</p>
	<p>
		<strong>Parameters</strong><br />
		<ol>
			<li><strong>triggerElement</strong> - the element that trigger the overlay window.</li>
			<li><strong>windowElement</strong> - the overlay window.</li>
			<li><strong>closeElement</strong> - the element that closes the window.</li>
			<li><strong>darkenBackground</strong> - darken the overlay background, #overlayBg (true/false).</li>
			<li><strong>fadeIn</strong> <em>(optional)</em> - overlay window with fade in animation (true/false). </li>
			<li><strong>overlayBgElement</strong> <em>(optional)</em> - specific element that replaces darken background, if it is not #overlayBg .</li>
			<li><strong>zIndex</strong> <em>(optional)</em> - specify the overlay window z-index.</li>
		</ol>
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		<div id="overlayBg"></div>
		<div id="overlaySecondaryBg"></div>
		<a id="windowATrigger" href="#">Trigger For Window A</a><br /> 
		<a id="windowBTrigger" href="#">Trigger for Window B with custom darken background</a>
		<div id="windowA">
			<div class="close"><a id="windowAClose" href="#">Close</a></div>
			<strong>This is Window A.</strong>
		</div>
		<div id="windowB">
			<div class="close"><a id="windowBClose" href="#">Close</a></div>
			<strong>This is Window B.</strong>
		</div>
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Generally is used for all pop up overlay windows, such as Rules and Regulation, Terms and Conditions panels.
		</p>
		<p>
			
			<strong>HTML</strong><br />
			For this example purpose, there's 2 different overlay backgrounds, namely <em>#overlayBg</em> and <em>#overlaySecondaryBg</em>.
			<br />
			Then, the anchor tags will be used to trigger the overlay windows.
			<pre><code class="html">&lt;!--overlay background--&gt;
&lt;div id=&quot;overlayBg&quot;&gt;&lt;/div&gt;
&lt;div id=&quot;overlaySecondaryBg&quot;&gt;&lt;/div&gt;
&lt;!--window trigger--&gt;
&lt;a id=&quot;windowATrigger&quot; href=&quot;#&quot;&gt;Trigger For Window A&lt;/a&gt; &lt;br /&gt; 
&lt;a id=&quot;windowBTrigger&quot; href=&quot;#&quot;&gt;Trigger for Window B with custom darken background&lt;/a&gt;
&lt;!--overlay windows--&gt;
&lt;div id=&quot;windowA&quot;&gt;
	&lt;div class=&quot;close&quot;&gt;&lt;a id=&quot;windowAClose&quot; href=&quot;#&quot;&gt;Close&lt;/a&gt;&lt;/div&gt;
	&lt;strong&gt;This is Window A.&lt;/strong&gt;
&lt;/div&gt;
&lt;div id=&quot;windowB&quot;&gt;
	&lt;div class=&quot;close&quot;&gt;&lt;a id=&quot;windowBClose&quot; href=&quot;#&quot;&gt;Close&lt;/a&gt;&lt;/div&gt;
	&lt;strong&gt;This is Window B.&lt;/strong&gt;
&lt;/div&gt;</code></pre>
		</p>
		<p>
			<strong>CSS</strong><br />
			Besides that, by default when the field is empty, a <em>defaultValue</em> class is added. Which in this example, when no value is specified, the label text will be in <span class="defaultValue">light grey</span>.
			<pre><code class="css">#overlayBg, #overlaySecondaryBg{
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #000;
	opacity: 0.5;
	filter: alpha(opacity=50);
	display: none;
}
#overlaySecondaryBg{ background: #fff; }
#windowA, #windowB{
	width: 350px;
	height: 150px;
	padding: 10px;
	margin-top: -300px;
	background: #fff;
	border: 5px solid #999;
	display: none;
}
.close{ text-align: right; }
.close a{
	font-size: 16px;
	font-weight: bold;
	color: #999;
	text-decoration: none;
}
.close a:hover{
	color: #333;
	text-decoration: underline;
}</code></pre>
		</p>
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">bindOverlayWindow('#windowATrigger', '#windowA', '#windowAClose', true);
bindOverlayWindow('#windowBTrigger', '#windowB', '#windowBClose', true, true, '#overlaySecondaryBg');</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		bindOverlayWindow('#windowATrigger', '#windowA', '#windowAClose', true);
		bindOverlayWindow('#windowBTrigger', '#windowB', '#windowBClose', true, true, '#overlaySecondaryBg');
	});
</script>