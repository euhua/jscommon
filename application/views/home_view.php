<div id="releaseAnnouncement">
	<h3>Updates</h3>
	<div>
		<h4>Common Library 1.32</h4>
		<p>
			bindSlider() has updated to hide previous and next button when rotating is set to false.
		</p>
	</div>
</div>
<div id="container">
	<div class="leftColumn">
		<h3>Js Common Library</h3>
		<p>
			The Js Common Library serves as a simplified and compiled library, built upon jQuery JavaScript library, to provide easier integration on the commonly used functions for our web application projects.
		</p>
		<p>
			<strong>Reason for Using It?</strong>			
			<ul>
				
				<li>Save time on coding</li>
				<li>Cross browser support</li>
				<li>Create effects and animation easily</li>
			</ul>
		</p>
		<p>
			<strong>Before you begin</strong><br />
			You will need to know basic JavaScript, CSS and HTML knowledge.
		</p>
		<p>
			<strong>Packed Files</strong><br />
			The library consists of the following JavaScript library/plugins:
			<ul>
				<li>jquery.js</li>
				<li>jquery-ui.js</li>
				<li>jquery.flash.js</li>
				<li>jquery.mousewheel.js</li>
				<li>common.js</li>
			</ul>
		</p>
	</div>
	<div id="downloadCta" class="rightColumn">
		<h4>Get the latest version</h4>
		Current Version: <span class="version"><?= $this->config->item('current_version') ?></span>
		<input type="button" id="btnDownload" value="Download Js Common Library" />
	</div>
	<div class="clear"></div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('#btnDownload').click(function(){
			window.location = '<?= site_url() ?>download/pack_file';
		});
	});
</script>