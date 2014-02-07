<style type="text/css">
	#wrapper{
		position: relative;
		width: 300px;
		height: 300px;
	}
	#slideContainer{
		width: 300px;
		height: 300px;
		overflow: hidden;
		position: relative;
	}
	#slideContainer ul{
		list-style: none;
		margin: 0;
		padding: 0;
		width: 300px;
		height: 300px;
	}		
	#slideContainer ul li{
		float: left;
		width: 300px;
		height: 300px;
	}
	#btnNext, #btnPrev{
		color: #fff;
		font-size: 24px;
		text-decoration: none;
		position: absolute;
		display: block;
		right: 10px;
		top: 10px;
		z-index: 10;
		width: 70px;
		height: 50px;
		text-align: right;
	}
	#btnNext:hover, #btnPrev:hover{
		color: #999;
	}
	#btnPrev{
		left: 10px;
		text-align: left;
	}
	#slotIndicator{
		bottom: 25px;
		height: 25px;
		width: auto;
	}
	#slotIndicator ul{
		list-style: none;
		margin: 0;
		padding: 0;
	}
	#slotIndicator ul li{
		float: left;
		color: #ccc;
		margin-right: 7px;
	}
	#slotIndicator ul li.selected{
		color: #fff;
	}
</style>
<div id="refContainer">
	<h3>bindSlider(container, prevTrigger, nextTrigger, speed, interval, animTimer, slotIndicator, rotating)</h3>
	<p>
		<strong>Description</strong><br />
		Bind custom scroller for container.
	</p>
	<p>
		<strong>Parameters</strong><br />
		<ol>
			<li><strong>container</strong> - the sliding container.</li>
			<li><strong>prevTrigger</strong> - trigger to go back to previous slide.</li>
			<li><strong>nextTrigger</strong> - trigger to go next slide.</li>
			<li><strong>speed</strong> - speed of the animation in milliseconds.</li>
			<li><strong>interval</strong> - interval between animation, only when animTimer is provided.</li>
			<li><strong>animTimer</strong> - the variable needed to hold the animation timer.</li>
			<li><strong>slotIndicator</strong> <em>(Optional)</em> - a division layer for slot indication, to show which slide the user is currently on.</li>
			<li><strong>rotating</strong> <em>(Optional)</em> - does the animation rotate? (true/false)</li>
		</ol>
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		<!-- wrapper for the slider -->
		<div id="wrapper">
			<!-- navigations -->
			<a id="btnPrev" href="#">Prev</a>
			<a id="btnNext" href="#">Next</a>
			<!-- the slide container -->
			<div id="slideContainer">
				<ul>
					<li><img src="<?= base_url() ?>images/slide01.jpg" width="300" height="300" alt="Slide 1" /></li>
					<li><img src="<?= base_url() ?>images/slide02.jpg" width="300" height="300" alt="Slide 2" /></li>
					<li><img src="<?= base_url() ?>images/slide03.jpg" width="300" height="300" alt="Slide 3" /></li>
				</ul>
			</div>
			<!-- slide indicator-->
			<div id="slotIndicator"></div>
		</div>
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Customised scrollbar to replace browser's default overflow scrollbar look and feel.
		</p>
		<p>
			
			<strong>HTML</strong><br />
			To get it started, we would need to have the navigations (prev and next buttons) ready.<br />
			Next, the slide container, along with the slot indicator (optional). <br />
			Make sure all your slides are place as the <em>unordered list</em> &lt;ul&gt; within the <em>list item</em> &lt;li&gt;.
			<pre><code class="html">&lt;!-- wrapper for the slider --&gt;
&lt;div id=&quot;wrapper&quot;&gt;
	&lt;!-- navigations --&gt;
	&lt;a id=&quot;btnPrev&quot; href=&quot;#&quot;&gt;Prev&lt;/a&gt;
	&lt;a id=&quot;btnNext&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
	&lt;!-- the slide container --&gt;
	&lt;div id=&quot;slideContainer&quot;&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;img src=&quot;images/slide01.jpg&quot; width=&quot;300&quot; height=&quot;300&quot; alt=&quot;Slide 1&quot; /&gt;&lt;/li&gt;
			&lt;li&gt;&lt;img src=&quot;images/slide02.jpg&quot; width=&quot;300&quot; height=&quot;300&quot; alt=&quot;Slide 2&quot; /&gt;&lt;/li&gt;
			&lt;li&gt;&lt;img src=&quot;images/slide03.jpg&quot; width=&quot;300&quot; height=&quot;300&quot; alt=&quot;Slide 3&quot; /&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
	&lt;!-- slide indicator--&gt;
	&lt;div id=&quot;slotIndicator&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
		</p>
		<p>
			<strong>CSS</strong><br />
			Make sure the #slideContainer has the <em>overflow</em> attribute set to hidden, <em>position</em> set to relative, along with its width and height. Then, follow by the <em>ul</em> within the #sliderContainer, make sure it has the <em>list-style</em> set to none, along with the width and height set to the same as the #sliderContainer. For the <em>li</em> element within the #slideContainer, make sure it has the same height and width as the container as well, with <em>float</em> set to left.
		</p>
		<p>
			The #btnPrev and #btnNext is up to you to decide, but in this example, we keep things simple to make it position one on the left, and one towards the right.
			<pre><code class="css">#wrapper{
	position: relative;
	width: 300px;
	height: 300px;
}
#slideContainer{
	width: 300px;
	height: 300px;
	overflow: hidden;
	position: relative;
}
#slideContainer ul{
	list-style: none;
	margin: 0;
	padding: 0;
	width: 300px;
	height: 300px;
}		
#slideContainer ul li{
	float: left;
	width: 300px;
	height: 300px;
}
#btnNext, #btnPrev{
	color: #fff;
	font-size: 24px;
	text-decoration: none;
	position: absolute;
	display: block;
	right: 10px;
	top: 10px;
	z-index: 10;
	width: 70px;
	height: 50px;
	text-align: right;
}
#btnNext:hover, #btnPrev:hover{
	color: #999;
}
#btnPrev{
	left: 10px;
	text-align: left;
}
#slotIndicator{
	bottom: 25px;
	height: 25px;
	width: auto;
}
#slotIndicator ul{
	list-style: none;
	margin: 0;
	padding: 0;
}
#slotIndicator ul li{
	float: left;
	color: #ccc;
	margin-right: 7px;
}
#slotIndicator ul li.selected{
	color: #fff;
}</code></pre>
		</p>
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">var animTimer; //timer to hold the animation
$(function(){
	bindSlider('#slideContainer', '#btnPrev', '#btnNext', 320, 5000, animTimer, '#slotIndicator', true);
});</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	var animTimer;
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		bindSlider('#slideContainer', '#btnPrev', '#btnNext', 320, 5000, animTimer, '#slotIndicator', true);
	});
</script>