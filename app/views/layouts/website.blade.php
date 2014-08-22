<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Temporary Encrypted Text :: PasteVault</title>
	<meta name="viewport" content="width=device-width">
	@yield('headers')
	<link type="text/css" rel="stylesheet" media="all" href="/css/reveal.css">
	<link type="text/css" rel="stylesheet" media="all" href="/css/style.css">

	@if(Config::get('pv.google_analytics'))
		<script type="text/javascript">

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', '{{ Config::get('pv.google_analytics') }}']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();

		</script>	
	@endif
</head>
<body>
	<div id="centerwrap"> 
		<div id="sidebar">
			<a href="{{ URL::to('/') }}"><img src="/img/logo.png" title="{{ Lang::get('pv.heading') }}" /></a>
			<p>{{ Lang::get('pv.intro') }}</p>
			<p>{{ Lang::get('pv.intro2') }}</p>
			<p>{{ Lang::get('pv.great') }}</p>

			<ul>
				<li>{{ Lang::get('pv.pt1') }}</li>
				<li>{{ Lang::get('pv.pt2') }}</li>
				<li>{{ Lang::get('pv.pt3') }}</li>
			</ul>
		</div>
		
		<div id="content">

			@yield('page')

		</div>

		<div id="footer">
			{{ Lang::get('pv.footer', array('year'=>date('Y'))) }}
		</div>
	</div>

	<a href="https://github.com/UserScape/PasteVault"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub"></a>	

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/js/jquery.base64.js"></script>
	<script type="text/javascript" src="/js/jquery.reveal.js"></script>
	<script type="text/javascript" src="/js/autolink-min.js"></script>
	<script type="text/javascript" src="/js/jquery.zclip.min.js"></script>
	<script type="text/javascript" src="/js/sjcl.js"></script>
	<script type="text/javascript" src="/js/logic.js"></script>

</body>
</html>