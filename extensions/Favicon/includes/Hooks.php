<?php
namespace MediaWiki\Extension\Favicon;
class Hooks {
	public static function onBeforePageDisplay( \OutputPage $out, \Skin $skin ) {
		$out->addHeadItem('apple-touch-icon-57x57', "<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"/apple-icon-57x57.png\">");
		$out->addHeadItem('apple-touch-icon-60x60', "<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"/apple-icon-60x60.png\">");
		$out->addHeadItem('apple-touch-icon-72x72', "<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/apple-icon-72x72.png\">");
		$out->addHeadItem('apple-touch-icon-76x76', "<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/apple-icon-76x76.png\">");
		$out->addHeadItem('apple-touch-icon-114x114', "<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/apple-icon-114x114.png\">");
		$out->addHeadItem('apple-touch-icon-120x120', "<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/apple-icon-120x120.png\">");
		$out->addHeadItem('apple-touch-icon-144x144', "<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"/apple-icon-144x144.png\">");
		$out->addHeadItem('apple-touch-icon-152x152', "<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/apple-icon-152x152.png\">");
		$out->addHeadItem('apple-touch-icon-180x180', "<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-icon-180x180.png\">");
		$out->addHeadItem('android-icon-192x192', "<link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"/android-icon-192x192.png\">");
		$out->addHeadItem('favicon-32x32', "<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\"  href=\"/favicon-32x32.png\">");
		$out->addHeadItem('favicon-96x96', "<link rel=\"icon\" type=\"image/png\" sizes=\"96x96\"  href=\"/favicon-96x96.png\">");
		$out->addHeadItem('favicon-16x16', "<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\"  href=\"/favicon-16x16.png\">");
		$out->addHeadItem('manfest', "<link rel=\"manifest\" href=\"/manifest.json\">");
		$out->addHeadItem('msapplication-tilecolor', "<meta name=\"msapplication-TileColor\" content=\"#ffffff\">");
		$out->addHeadItem('msapplication-tileimage', "<meta name=\"msapplication-TileImage\" content=\"/ms-icon-144x144.png\">");
		$out->addHeadItem('theme-color', "<meta name=\"theme-color\" content=\"#ffffff\">");
	}
}
