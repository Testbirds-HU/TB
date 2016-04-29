<script type="text/javascript">
	var _paq = _paq || [];
	_paq.push(['trackPageView']);
	_paq.push(['enableLinkTracking']);
	(function() {
		var u="//analytics.testbirds.hu/";
		_paq.push(['setTrackerUrl', u+'piwik.php']);
		_paq.push(['setSiteId', 3]);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	})();
</script>
<noscript>
	<p>
		<img src="//analytics.testbirds.hu/piwik.php?idsite=3" style="border:0;" alt="" />
	</p>
</noscript>
<?php
	if($lang == 'Czech'){
		echo '<script type="text/javascript" src="//js.leadin.com/js/v1/2223448.js" id="LeadinEmbed-2223448" crossorigin="use-credentials" async defer></script>'
	} elseif ($lang == 'Slovak'){
		# slovak tracking code
	} else {
		echo '<script type="text/javascript" src="//js.leadin.com/js/v1/1798051.js" id="LeadinEmbed-1798051" crossorigin="use-credentials" async defer></script>'
	}
?>

