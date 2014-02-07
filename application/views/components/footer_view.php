	<div id="footer">
		MediaCliQ Js Common Library<br />
		Last Updated @ <?= $this->config->item('last_updated') ?> by <?= $this->config->item('updated_by') ?>.
	</div>
	<script language="javascript" type="text/javascript">
		var pageTitle = '<?= $page_title ?>';
		
		$(function(){
			highlightSelectedPage();
		});
		
		function highlightSelectedPage(){
			if(window.pageTitle == 'Home')
				$('#navHome').addClass('selected');
			else if(window.pageTitle == 'Reference')
				$('#navRef').addClass('selected');
			else if(window.pageTitle == 'Download')
				$('#navDownload').addClass('selected');
		}
	</script>
</body>
</html>