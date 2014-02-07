<div id="container">
	<div class="leftColumn">
		<h3>Update Log</h3>
		<ul id="updateLog">
			<li>
				<p>
					<strong>Version 1.32</strong><br />
					bindSlider() has updated to hide previous and next button when rotating is set to false.
				</p>
			</li>
			<li>
				<p>
					<strong>Version 1.31</strong><br />
					scrollToElementAnimated() expand option for scrollable &lt;div&gt;, instead of just the document body.
				</p>
			</li>
			<li>
				<p>
					<strong>Version 1.3</strong><br />
					Updated jQuery to version 1.8.3, jQuery UI to version 1.9.1, jquery.mousewheel to version 3.0.6 for future proofing.<br />
					Added helper preloadImage() and postloadImage().
				</p>
			</li>
			<li>
				<p>
					<strong>Version 1.2</strong><br />
					Added new event binding bindFriendlyDate() to generate more user friendly date values.
				</p>
			</li>
			<li>
				<p>
					<strong>Version 1.1</strong><br />
					Added z-index option for overlay window in bindOverlayWindow(). <br />
					Fixed wMode bug in initFlash().
				</p>
			</li>
			<li>
				<p>
					<strong>Version 1.0</strong><br />
					Release of the common library. Incorporating jquery.js, and numerous plugins like jquery-ui.js for animation, jquery.flash.js for Flash embedding jquery.mousewheel.js for mouse scroll events and common.js for commonly used functions.
				</p>
			</li>
		</ul>
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