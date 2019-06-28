<head>
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
	<link rel="stylesheet" href="{!! env('WP_HOME') !!}/include/style/development.css" type="text/css" media="all" />
	<script src="{!! env('WP_HOME') !!}/include/scripts/jquery.3.3.1.min.js?ver=3.3.1"></script>
	<script src="{!! env('WP_HOME') !!}/include/scripts/application.js"></script>
</head>