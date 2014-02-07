<div id="refContainer">
	<h3>jQuery and Common Library Basics</h3>
	<p>
		<strong>Including the Library</strong><br />
		Before you can actually start using the functionality provided by jQuery and Common Library, you would need to include the library files. Essentially, the <em>jquery.js</em> file and the <em>common.js</em> files.
	</p>
	<p>
		Depending on the functionality that you are using, basically you should only required to include the <em>jquery.js</em> and <em>common.js</em>. Unless, the function states that it requires additional files. E.g. <em>jquery-ui.js</em> and <em>jquery.mousewheel.js</em> is required for using <em>bindScroller()</em>.
	</p>
	<p>
		<pre><code class="html">&lt;script language=&quot;javascript&quot; type=&quot;text/javascript&quot; src=&quot;js/jquery.js&quot;&gt;&lt;/script&gt;
&lt;script language=&quot;javascript&quot; type=&quot;text/javascript&quot; src=&quot;js/common.js&quot;&gt;&lt;/script&gt;</code></pre>
	</p>
	<p>
		*Do note that all jQuery js files/plugins must be referred first, before the <em>common.js</em> file.
	</p>
	<hr />
	<p>
		<strong>Baby Steps</strong><br />
		To start utilising the jQuery library, always remember the <em>jQuery</em> or <em>$</em>. For example: 
	</p>
	<p>
		<pre><code class="javascript">$('#container').css('display', 'none');
jQuery('.desc').html('&lt;strong&gt;The quick brown fox jumps over the lazy dog&lt;/strong&gt;');</code></pre>
	</p>
	<p>
		For shortcut purpose, it is always encouraged to use <em>$</em> instead.
	</p>
	<p>
		If you notice in the example, <em>$('#container')</em> actually refers to the element with the id container, and changes the css attribute, display to none. Basically, the way to use the selectors is just like the way you would code your CSS. e.g. <em>.someClass</em> for classes, <em>#id</em> for ids, and even hierarchical form like <em>.navigation ul li</em>. 
	</p>
	<hr />
	<p>
		<strong>Before Starting Any Functions</strong><br />
		Before you start to use any functions, please do remember to include them within the document/function loaded block. This is to make sure that jQuery library and HTML document has loaded completely, before initiating the functions.
	</p>
	<p>
		<pre><code class="javascript">$(function(){
	//Your functions inside here
});</code></pre>
		<strong>or</strong>
		<pre><code class="javascript">$(document).ready(function(){
	//Your functions inside here
});</code></pre>
	</p>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
	});
</script>