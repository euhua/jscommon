<style type="text/css">
	.defaultValue{
		color: #999;
	}
</style>
<div id="refContainer">
	<h3>bindDefaultText(element)</h3>
	<p>
		<strong>Description</strong><br />
		Show default text when no value is present on field.
	</p>
	<p>
		<strong>Parameters</strong><br />
		<ol>
			<li><strong>element</strong> - the selected field.</li>
		</ol>
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		<p><strong>Registration</strong></p>
		<p><input type="text" id="txtFirstName" title="First Name" value="" /></p>
		<p><input type="text" id="txtLastName" title="Last Name" value="" /></p>
		<p><input type="text" id="txtEmail" title="Email" value="" /></p>
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Generally is used for all the input form fields, that has no labels for aesthetic purpose.
		</p>
		<p>
			
			<strong>HTML</strong><br />
			In order to specify the label text, just use the <em>title</em> attribute.
			<pre><code class="html">&lt;p&gt;&lt;strong&gt;Registration&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;&lt;input type=&quot;text&quot; id=&quot;txtFirstName&quot; title=&quot;First Name&quot; value=&quot;&quot; /&gt;&lt;/p&gt;
&lt;p&gt;&lt;input type=&quot;text&quot; id=&quot;txtLastName&quot; title=&quot;Last Name&quot; value=&quot;&quot; /&gt;&lt;/p&gt;
&lt;p&gt;&lt;input type=&quot;text&quot; id=&quot;txtEmail&quot; title=&quot;Email&quot; value=&quot;&quot; /&gt;&lt;/p&gt;</code></pre>
		</p>
		<p>
			<strong>CSS</strong><br />
			Besides that, by default when the field is empty, a <em>defaultValue</em> class is added. Which in this example, when no value is specified, the label text will be in <span class="defaultValue">light grey</span>.
			<pre><code class="css">.defaultValue{
	color: #999;
}</code></pre>
		</p>
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">bindDefaultText('#txtFirstName');
bindDefaultText('#txtLastName');
bindDefaultText('#txtEmail');</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		bindDefaultText('#txtFirstName');
		bindDefaultText('#txtLastName');
		bindDefaultText('#txtEmail');
	});
</script>