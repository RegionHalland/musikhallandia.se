<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144139839-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-144139839-1');
	</script>
	
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<meta name="apple-mobile-web-app-title" content="Musik Hallandia" />
	<meta name="application-name" content="Musik Hallandia" />
	<meta name="msapplication-TileColor" content="#ffffff" />
	<meta name="msapplication-config" href="{!! env('WP_HOME') !!}/include/favicons/browserconfig.xml" />
	<meta name="theme-color" content="#ffffff" />
	@php($myPostType = get_post_type())
	@if($myPostType == 'page')
		<title>{{ $post->post_title }} - Musik Hallandia</title>
	@else
		<title>{{ $myPostType }} - Musik Hallandia</title>
	@endif
    <link rel="stylesheet" type="text/css" href="{!! env('WP_HOME') !!}/include/alicdn/font_o5hd5vvqpoqiwwmi_190529.css">
	<link href="{!! env('WP_HOME') !!}/styleguide5.0.0/css/components.css" rel="stylesheet"/>
	{{--<link href="http://styleguide.local/musikhallandia.css" rel="stylesheet"/>--}}
	<link rel="stylesheet" href="{!! env('WP_HOME') !!}/include/style/development.css" type="text/css" media="all" />
	<script src="{!! env('WP_HOME') !!}/include/scripts/jquery.3.3.1.min.js?ver=3.3.1"></script>
	<script src="{!! env('WP_HOME') !!}/include/scripts/bodyScrollLock-2.6.4.js"></script>
	<script src="{!! env('WP_HOME') !!}/include/scripts/application.js"></script>

	<!--
		/**
		 * @license
		 * MyFonts Webfont Build ID 3762227, 2019-05-20T05:44:50-0400
		 *
		 * The fonts listed in this notice are subject to the End User License
		 * Agreement(s) entered into by the website owner. All other parties are
		 * explicitly restricted from using the Licensed Webfonts(s).
		 *
		 * You may obtain a valid license at the URLs below.
		 *
		 * Webfont: HelveticaLTWXX-BlackCond by Linotype
		 * URL: https://www.myfonts.com/fonts/linotype/helvetica/pro-black-condensed/
		 * Copyright: Copyright &#x00A9; 2014 Monotype Imaging Inc. All rights reserved.
		 * Licensed pageviews: 750,000
		 *
		 * Webfont: HelveticaNowText-Regular by Monotype
		 * URL: https://www.myfonts.com/fonts/mti/helvetica-now/text-regular/
		 * Copyright: Copyright © 2019 Monotype Imaging Inc. All rights reserved.
		 * Licensed pageviews: 250,000
		 *
		 * Webfont: HelveticaNowText-Bold by Monotype
		 * URL: https://www.myfonts.com/fonts/mti/helvetica-now/text-bold/
		 * Copyright: Copyright © 2019 Monotype Imaging Inc. All rights reserved.
		 * Licensed pageviews: 250,000
		 *
		 *
		 * License: https://www.myfonts.com/viewlicense?type=web&buildid=3762227
		 *
		 * © 2019 MyFonts Inc
		*/
	-->

</head>