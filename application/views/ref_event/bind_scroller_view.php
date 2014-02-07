<style type="text/css">
	#scrollContent{
		width: 300px;
		height: 300px;
		border: 1px solid #ccc;
		background: #fff;
		overflow: hidden;
		margin-left: 25px;
	}
	#scrollContent p{
		padding: 5px;
	}
	#scrollBarTrack{
		float: left;
		width: 15px;
		height: 300px;
		background-color: #ccc;
	}
	#scrollTop{
		width: 15px;
		height: 15px;
		background: #333;
		color: #fff;
	}
	#scrollBottom{
		width: 15px;
		height: 15px;
		background: #333;
		color: #fff;
	}
	#scrollBar{
		width: 15px;
		height: 230px;
		margin-top: 40px;
		position: relative;
	}
	#scrollBar .ui-slider-handle{
		background: #666;
		width: 15px;
		height: 40px;
		position: absolute;
	}
</style>
<div id="refContainer">
	<h3>bindScroller(scrollBar, scrollTop, scrollBottom, scrollContent)</h3>
	<p>
		<strong>Description</strong><br />
		Bind custom scroller for container.
	</p>
	<p>
		<strong>Requirements</strong><br />
		jquery-ui.js<br />
		jquery.mousewheel.js
	</p>
	<p>
		<strong>Parameters</strong><br />
		<ol>
			<li><strong>scrollBar</strong> - the scroll bar.</li>
			<li><strong>scrollTop</strong> <em>(Optional)</em> - scroll up button. (Value as "null" without quotes, if not required)</li>
			<li><strong>scrollBottom</strong> <em>(Optional)</em> - scroll bottom button. (Value as "null" without quotes, if not required</li>
			<li><strong>scrollContent</strong> - scrolling content</li>
		</ol>
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		<div id="scrollBarTrack">
			<div id="scrollTop"></div>
			<div id="scrollBar"></div>
			<div id="scrollBottom"></div>
		</div>
		<div id="scrollContent">
			<div>
				<p>The rain in Spain stays mainly in the plain. <br />The quick brown fox jumps over the lazy dog.</p>
				<p>The rain in Spain stays mainly in the plain. <br />The quick brown fox jumps over the lazy dog.</p>
				<p>The rain in Spain stays mainly in the plain. <br />The quick brown fox jumps over the lazy dog.</p>
				<p>The rain in Spain stays mainly in the plain. <br />The quick brown fox jumps over the lazy dog.</p>
				<p>The rain in Spain stays mainly in the plain. <br />The quick brown fox jumps over the lazy dog.</p>
				<p>The rain in Spain stays mainly in the plain. <br />The quick brown fox jumps over the lazy dog.</p>
			</div>
		</div>
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Customised scrollbar to replace browser's default overflow scrollbar look and feel.
		</p>
		<p>
			
			<strong>HTML</strong><br />
			To have the custom scrollbar, there should be a scrollContent, as well as the custom scrollBar element.
			<pre><code class="html">&lt;div id=&quot;scrollBarTrack&quot;&gt;
	&lt;div id=&quot;scrollTop&quot;&gt;&lt;/div&gt;
	&lt;div id=&quot;scrollBar&quot;&gt;&lt;/div&gt;
	&lt;div id=&quot;scrollBottom&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div id=&quot;scrollContent&quot;&gt;
	&lt;div&gt;
		&lt;p&gt;The rain in Spain stays mainly in the plain. &lt;br /&gt;The quick brown fox jumps ...&lt;/p&gt;
		&lt;p&gt;The rain in Spain stays mainly in the plain. &lt;br /&gt;The quick brown fox jumps ...&lt;/p&gt;
		&lt;p&gt;The rain in Spain stays mainly in the plain. &lt;br /&gt;The quick brown fox jumps ...&lt;/p&gt;
		&lt;p&gt;The rain in Spain stays mainly in the plain. &lt;br /&gt;The quick brown fox jumps ...&lt;/p&gt;
		&lt;p&gt;The rain in Spain stays mainly in the plain. &lt;br /&gt;The quick brown fox jumps ...&lt;/p&gt;
		&lt;p&gt;The rain in Spain stays mainly in the plain. &lt;br /&gt;The quick brown fox jumps ...&lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
		</p>
		<p>
			<strong>CSS</strong><br />
			The scrollContent should have the property <em>overflow</em> set to hidden, to hide away the default browser scroll bar.<br />
			Besides that, make sure there's a wrapper <em>&lt;div&gt;</em>, before placing any content within the scrollContent, so that the scrollbar would appear properly.
		<p>
		<p>
			Do note that the <em>scrollTop</em> and <em>scrollBottom</em> element are optional. When it is not required, just put "null" without quotes as its values.
			<pre><code class="css">#scrollContent{
	width: 300px;
	height: 300px;
	border: 1px solid #ccc;
	background: #fff;
	overflow: hidden;
	margin-left: 25px;
}
#scrollContent p{
	padding: 5px;
}
#scrollBarTrack{
	float: left;
	width: 15px;
	height: 300px;
	background-color: #ccc;
}
#scrollTop{
	width: 15px;
	height: 15px;
	background: #333;
	color: #fff;
}
#scrollBottom{
	width: 15px;
	height: 15px;
	background: #333;
	color: #fff;
}
#scrollBar{
	width: 15px;
	height: 230px;
	margin-top: 40px;
	position: relative;
}
#scrollBar .ui-slider-handle{
	background: #666;
	width: 15px;
	height: 40px;
	position: absolute;
}</code></pre>
		</p>
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">bindScroller('#scrollBar', '#scrollTop', '#scrollBottom', '#scrollContent');</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		bindScroller('#scrollBar', '#scrollTop', '#scrollBottom', '#scrollContent');
	});
</script>