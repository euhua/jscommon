<style type="text/css">
	.currentDate, .relativeDate, .relativeDateNoDetail{
		font-size: 14px;
		color: #45839d;
	}
</style>
<div id="refContainer">
	<h3>bindFriendlyDate(element, timeToCompare, detail, attr)</h3>
	<p>
		<strong>Description</strong><br />
		Shows a more user friendly date on specified field, e.g. 'yesterday', '9 hours ago'.
	</p>
	<p>
		<strong>Parameters</strong><br />
		<ol>
			<li><strong>element</strong> - the selected field.</li>
			<li><strong>timeToCompare</strong> <em>(optional)</em> - the time to compared to. When not specified, it will be based on client's system clock. </li>
			<li><strong>detail</strong> <em>(optional)</em> - To show the detail up to 'hours' and 'minutes' ago (true/false). Default is 'true'.</li>
			<li><strong>attr</strong> <em>(optional)</em> - specify the attributes to use/replace.</li>
		</ol>
	</p>
	<div id="canvasContainer">
		<h3>Demo</h3>
		<p>
			Comparing to <strong>User's system time</strong>.<br />
			<ol>
				<li><?= mdate('%d %M %Y %h:%i %a', time() - (60*2)) ?>: <span class="currentDate"><?= mdate('%d %M %Y %h:%i %a', time() - (60*2)) ?></span></li>
				<li><?= mdate('%d %M %Y %h:%i %a', time() - (60*60)) ?>: <span class="currentDate"><?= mdate('%d %M %Y %h:%i %a', time() - (60*60)) ?></span></li>
				<li><?= mdate('%d %M %Y %h:%i %a', time() - (60*60*24*2)) ?>: <span class="currentDate"><?= mdate('%d %M %Y %h:%i %a', time() - (60*60*24*2)) ?></span></li>
			</ol>
		</p>
		<p>
			Comparing relative to <strong>13 Sep 2012, 08:22 PM</strong>.<br />
			<ol>
				<li>11 Sep 2012, 08:22 PM: <span class="relativeDate">11 Sep 2012, 08:22 PM</span></li>
				<li>13 Sep 2012, 03:00 AM: <span class="relativeDate">13 Sep 2012, 03:00 AM</span></li>
				<li>13 Sep 2012, 08:00 PM: <span class="relativeDate">13 Sep 2012, 08:00 PM</span></li>
			</ol>
		</p>
		<p>
			Comparing relative to <strong>13 Sep 2012, 08:22 PM</strong> with <strong>no detail</strong>.<br />
			<ol>
				<li>13 Sep 2012, 08:22 PM: <span class="relativeDateNoDetail">13 Sep 2012, 08:22 PM</span></li>
				<li>13 Sep 2012, 03:00 AM: <span class="relativeDateNoDetail">13 Sep 2012, 03:00 AM</span></li>
				<li>12 Sep 2012, 08:00 PM: <span class="relativeDateNoDetail">12 Sep 2012, 08:00 PM</span></li>
			</ol>
		</p>
	</div>
	<div id="exampleContainer">
		<strong>Usage Example</strong>
		<p>
			Generally is used for fields that require more user friendly time display.
		</p>
		<p>
			
			<strong>HTML</strong><br />
			Just specify the date in the fields, and see the script do its magic.
			<pre><code class="html">&lt;p&gt;
	Comparing to &lt;strong&gt;User&#39;s system time&lt;/strong&gt;.&lt;br /&gt;
	&lt;ol&gt;
		&lt;li&gt;<?= mdate('%d %M %Y %h:%i %a', time() - (60*2)) ?>: &lt;span class=&quot;currentDate&quot;&gt;<?= mdate('%d %M %Y %h:%i %a', time() - (60*2)) ?>&lt;/span&gt;&lt;/li&gt;
		&lt;li&gt;<?= mdate('%d %M %Y %h:%i %a', time() - (60*60)) ?>: &lt;span class=&quot;currentDate&quot;&gt;<?= mdate('%d %M %Y %h:%i %a', time() - (60*60)) ?>&lt;/span&gt;&lt;/li&gt;
		&lt;li&gt;<?= mdate('%d %M %Y %h:%i %a', time() - (60*60*24*2)) ?>: &lt;span class=&quot;currentDate&quot;&gt;<?= mdate('%d %M %Y %h:%i %a', time() - (60*60*24*2)) ?>&lt;/span&gt;&lt;/li&gt;
	&lt;/ol&gt;
&lt;/p&gt;
&lt;p&gt;
	Comparing relative to &lt;strong&gt;13 Sep 2012, 08:22 PM&lt;/strong&gt;.&lt;br /&gt;
	&lt;ol&gt;
		&lt;li&gt;11 Sep 2012, 08:22 PM: &lt;span class=&quot;relativeDate&quot;&gt;11 Sep 2012, 08:22 PM&lt;/span&gt;&lt;/li&gt;
		&lt;li&gt;13 Sep 2012, 03:00 AM: &lt;span class=&quot;relativeDate&quot;&gt;13 Sep 2012, 03:00 AM&lt;/span&gt;&lt;/li&gt;
		&lt;li&gt;13 Sep 2012, 08:00 PM: &lt;span class=&quot;relativeDate&quot;&gt;13 Sep 2012, 08:00 PM&lt;/span&gt;&lt;/li&gt;
	&lt;/ol&gt;
&lt;/p&gt;
&lt;p&gt;
	Comparing relative to &lt;strong&gt;13 Sep 2012, 08:22 PM&lt;/strong&gt; with &lt;strong&gt;no detail&lt;/strong&gt;.&lt;br /&gt;
	&lt;ol&gt;
		&lt;li&gt;13 Sep 2012, 08:22 PM: &lt;span class=&quot;relativeDateNoDetail&quot;&gt;13 Sep 2012, 08:22 PM&lt;/span&gt;&lt;/li&gt;
		&lt;li&gt;13 Sep 2012, 03:00 AM: &lt;span class=&quot;relativeDateNoDetail&quot;&gt;13 Sep 2012, 03:00 AM&lt;/span&gt;&lt;/li&gt;
		&lt;li&gt;12 Sep 2012, 08:00 PM: &lt;span class=&quot;relativeDateNoDetail&quot;&gt;12 Sep 2012, 08:00 PM&lt;/span&gt;&lt;/li&gt;
	&lt;/ol&gt;
&lt;/p&gt;</code></pre>
		</p>
		<p>
			<strong>JavaScript</strong>
			<pre><code class="javascript">bindFriendlyDate($('.currentDate'));
bindFriendlyDate($('.relativeDate'), '13 Sep 2012, 08:22 PM');
bindFriendlyDate($('.relativeDateNoDetail'), '13 Sep 2012, 08:22 PM', false);</code></pre>
		</p>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('pre code').each(function(i, e) {hljs.highlightBlock(e, '    ')});
		bindFriendlyDate($('.currentDate'));
		bindFriendlyDate($('.relativeDate'), '13 Sep 2012, 08:22 PM');
		bindFriendlyDate($('.relativeDateNoDetail'), '13 Sep 2012, 08:22 PM', false);
	});
</script>