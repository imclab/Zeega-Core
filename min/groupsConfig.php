<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/** 
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 *
 * See http://code.google.com/p/minify/wiki/CustomSource for other ideas
 **/

return array(
    'home' => array(
		'//web/js/lib/jquery/ui/js/jquery-ui.min.js',
		'//web/js/lib/bootstrap.js',
		'//web/js/ux/zeega.ux.header.js',
		'//web/js/ux/zeega.ux.site.js'
	),
    'browser1' => array(
		'//web/js/lib/underscore.js',
		'//web/js/lib/backbone.js',
		//'//web/js/lib/spin.js',
		'//web/js/lib/swfobject.js', 
		//'//web/js/lib/jquery/ui/js/jquery-ui.min.js',
		'//web/js/lib/bootstrap.js',
		//'//web/js/lib/visualsearch.js',
		

		'//web/js/lib/fancybox/jquery.fancybox.js',
		//'//web/js/lib/fancybox/jquery.fancybox.pack.js',
		'//web/js/lib/fancybox/helpers/jquery.fancybox-buttons.js',

		'//web/js/lib/fancybox/jquery.easing-1.3.pack.js',
		'//web/js/lib/fancybox/jquery.mousewheel-3.0.6.pack.js',
		'//web/js/lib/leaflet/leaflet.js',
		'//web/js/lib/jquery.tagsinput.min.js',

		//plugins
		//'//web/js/lib/jquery/plugins/spin.js',
		'//web/js/lib/jquery/plugins/jeditable.min.js',
		'//web/js/lib/jquery/plugins/jquery-cycle.js',
		'//web/js/lib/jquery/plugins/jquery.paging.js',
		'//web/js/lib/jquery/plugins/colorpicker/js/colorpicker.js',
		'//web/js/lib/jquery/plugins/jquerygetUrlParam.js',
		'//web/js/lib/jquery/plugins/jqueryjson.js',
		'//web/js/lib/jquery/plugins/jquerycookie.js',
		'//web/js/lib/jquery/plugins/jquerytmpl.js',
		//'//web/js/lib/jquery/plugins/twitter-bootstrap.js',
		'//web/js/lib/popcorn_flash.js',
		'//web/js/plugins/players/plyr.js',


		//core
		'//web/js/app/zeega.js',
		'//web/js/app/zeega.browser.js',
		//custom

		//'//web/js/ux/zeega.ux.header.js',
		//'//web/js/ux/zeega.ux.browser.js',
		//'//web/js/helpers/zeega.extends.js',
		//'//web/js/helpers/zeega.helpers.js',

		
		//custom
		//'//web/js/lib/filamentslider/selectToUISlider.jQuery.js',
		//'//web/js/lib/jcarousel/jquery.jcarousel.js',
		//'//web/js/lib/jcarousel/jcarousel.zeega.js',
		
		//mvc
		//'//web/js/app/models/browser.model.collection.js',
		//'//web/js/app/models/browser.model.search.js',
		//'//web/js/app/models/browser.model.item.js',

		//'//web/js/app/collections/browser.collections.collection.js',
		//'//web/js/app/collections/browser.collections.item.js',


		//'//web/js/app/views/browser.fancybox/browser.view.fancybox._fancybox.js',
		//'//web/js/app/views/browser.fancybox/browser.view.fancybox.audio.js',
		//'//web/js/app/views/browser.fancybox/browser.view.fancybox.document-cloud.js',
		//'//web/js/app/views/browser.fancybox/browser.view.fancybox.image.js',
		//'//web/js/app/views/browser.fancybox/browser.view.fancybox.default.js',
		//'//web/js/app/views/browser.fancybox/browser.view.fancybox.tweet.js',
		//'//web/js/app/views/browser.fancybox/browser.view.fancybox.soundcloud.js',
		//'//web/js/app/views/browser.fancybox/browser.view.fancybox.video.js',
		//'//web/js/app/views/browser.fancybox/browser.view.fancybox.mapbox.js',
		//'//web/js/app/views/browser.fancybox/browser.view.fancybox.youtube.js',
		//'//web/js/app/views/browser.map/browser.view.map.fancybox.js',
		//'//web/js/app/views/browser.tag/browser.view.tag.fancybox.js',

		//'//web/js/lib/jquery.tagsinput.min.js', 
		//'//web/js/lib/leaflet/leaflet.js',
		//'//web/js/lib/fancybox/jquery.easing-1.3.pack.js', 
		//'//web/js/lib/fancybox/jquery.mousewheel-3.0.6.pack.js',
		//'//web/js/lib/fancybox/jquery.fancybox.js', 
		//'//web/js/lib/fancybox/jquery.fancybox.pack.js', 
		//'//web/js/lib/fancybox/helpers/jquery.fancybox-buttons.js',

		//'//web/js/app/index.browser.js'

	),
    'browser2' => array(
    	//'//web/js/lib/underscore.js',
		//'//web/js/lib/backbone.js',
		//'//web/js/lib/spin.js',
		//'//web/js/lib/swfobject.js', 
		//'//web/js/lib/jquery/ui/js/jquery-ui.min.js',
		//'//web/js/lib/bootstrap.js',
		//'//web/js/lib/visualsearch.js',
		
		//custom

		//'//web/js/ux/zeega.ux.header.js',
		//'//web/js/ux/zeega.ux.browser.js',
		//'//web/js/helpers/zeega.extends.js',
		//'//web/js/helpers/zeega.helpers.js',

		//core
		//'//web/js/app/zeega.js',
		//'//web/js/app/zeega.browser.js',
		
		//plugins
		/*
		'//web/js/lib/jquery/plugins/spin.js',
		'//web/js/lib/jquery/plugins/jeditable.min.js',
		'//web/js/lib/jquery/plugins/jquery-cycle.js',
		'//web/js/lib/jquery/plugins/jquery.paging.js',
		'//web/js/lib/jquery/plugins/colorpicker/js/colorpicker.js',
		'//web/js/lib/jquery/plugins/jquerygetUrlParam.js',
		'//web/js/lib/jquery/plugins/jqueryjson.js',
		'//web/js/lib/jquery/plugins/jquerycookie.js',
		'//web/js/lib/jquery/plugins/jquerytmpl.js',
		'//web/js/lib/jquery/plugins/twitter-bootstrap.js',
		'//web/js/lib/popcorn_flash.js',
		'//web/js/plugins/players/plyr.js',
		*/
		//custom
		'//web/js/lib/filamentslider/selectToUISlider.jQuery.js',
		//'//web/js/lib/jcarousel/jquery.jcarousel.js',
		//'//web/js/lib/jcarousel/jcarousel.zeega.js',
		
		//mvc
		//'//web/js/app/models/browser.model.collection.js',
		//'//web/js/app/models/browser.model.search.js',
		//'//web/js/app/models/browser.model.item.js',

		//'//web/js/app/collections/browser.collections.collection.js',
		//'//web/js/app/collections/browser.collections.item.js',


		//'//web/js/lib/jquery.tagsinput.min.js', 
		//'//web/js/lib/leaflet/leaflet.js',
		//'//web/js/lib/fancybox/jquery.easing-1.3.pack.js', 
		//'//web/js/lib/fancybox/jquery.mousewheel-3.0.6.pack.js',
		//'//web/js/lib/fancybox/jquery.fancybox.js', 
		//'//web/js/lib/fancybox/jquery.fancybox.pack.js', 
		//'//web/js/lib/fancybox/helpers/jquery.fancybox-buttons.js',

		//'//web/js/app/collections/browser.collections.collection.js', 
		//'//web/js/app/collections/browser.collections.item.js', 
		//'//web/js/app/views/browser.item/browser.view.item.item-tray.js', 
		//'//web/js/app/views/browser.collection/browser.view.collection.my-collection-drawer.js', 


		'//web/js/app/views/browser.fancybox/browser.view.fancybox._fancybox.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.audio.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.document-cloud.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.image.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.default.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.tweet.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.soundcloud.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.video.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.mapbox.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.youtube.js',
		'//web/js/app/views/browser.map/browser.view.map.fancybox.js',
		'//web/js/app/views/browser.tag/browser.view.tag.fancybox.js',

		'//web/js/app/index.browser.js'
	),
    'editor' => array(
		'//web/js/lib/swfobject.js',
		'//web/js/ux/zeega.ux.header.js',
		'//web/js/ux/zeega.ux.editor.js',
		'//web/js/ux/layer-controls.js',
		'//web/js/helpers/zeega.helpers.js',
		'//web/js/app/zeega.js',
		'//web/js/app/zeega.player.js',
		'//web/js/lib/farbtastic/farbtastic.js',
		'//web/js/app/index.js',
	),
    // 'js' => array('//js/file1.js', '//js/file2.js'),
    // 'css' => array('//css/file1.css', '//css/file2.css'),
);

/*

    'home' => array(
		'//web/js/lib/require-jquery.js',
		'//web/js/loaders/main.site.js',
		'//web/js/lib/order.js',
		'//web/js/lib/jquery/ui/js/jquery-ui.min.js',
		'//web/js/lib/bootstrap.js',
		'//web/js/ux/zeega.ux.header.js',
		'//web/js/ux/zeega.ux.site.js'
	),

    'browser' => array(
    	'//web/js/loaders/browser.js', 
		'//web/js/lib/order.js', 
		'//web/js/lib/underscore.js', 
		'//web/js/lib/backbone.js', 
		'//web/js/lib/spin.js', 
		'//web/js/lib/swfobject.js', 
		'//web/js/lib/jquery/ui/js/jquery-ui.min.js', 
		'//web/js/lib/bootstrap.js', 
		'//web/js/lib/visualsearch.js', 
		'//web/js/ux/zeega.ux.header.js', 
		'//web/js/ux/zeega.ux.browser.js', 
		'//web/js/helpers/zeega.extends.js', 
		'//web/js/helpers/zeega.helpers.js', 
		'//web/js/app/zeega.browser.js', 
		'//web/js/lib/jquery/plugins/spin.js', 
		'//web/js/lib/jquery/plugins/jeditable.min.js', 
		'//web/js/lib/jquery/plugins/jquery-cycle.js', 
		'//web/js/lib/jquery/plugins/jquery.paging.js', 
		'//web/js/lib/jquery/plugins/colorpicker/js/colorpicker.js', 
		'//web/js/lib/jquery/plugins/jquerygetUrlParam.js', 
		'//web/js/lib/jquery/plugins/jqueryjson.js', 
		'//web/js/lib/jquery/plugins/jquerycookie.js', 
		'//web/js/lib/jquery/plugins/jquerytmpl.js', 
		'//web/js/lib/jquery/plugins/twitter-bootstrap.js', 
		'//web/js/lib/popcorn_flash.js', 
		'//web/js/plugins/players/plyr.js', 
		'//web/js/lib/filamentslider/selectToUISlider.jQuery.js', 
		'//web/js/lib/jcarousel/jquery.jcarousel.js', 
		'//web/js/lib/jcarousel/jcarousel.zeega.js', 
		'//web/js/app/models/browser.model.collection.js', 
		'//web/js/app/models/browser.model.search.js', 
		'//web/js/app/models/browser.model.item.js', 
		'//web/js/app/collections/browser.collections.collection.js', 
		'//web/js/app/collections/browser.collections.item.js', 
		'//web/js/app/views/browser.item/browser.view.item.item-tray.js', 
		'//web/js/app/views/browser.collection/browser.view.collection.my-collection-drawer.js', 
		'//web/js/app/views/browser.fancybox/browser.view.fancybox._fancybox.js', 
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.audio.js', 
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.document-cloud.js', 
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.image.js', 
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.default.js', 
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.tweet.js', 
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.soundcloud.js', 
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.video.js', 
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.mapbox.js', 
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.youtube.js', 
		'//web/js/app/views/browser.map/browser.view.map.fancybox.js', 
		'//web/js/app/views/browser.tag/browser.view.tag.fancybox.js', 
		'//web/js/app/index.browser.js', 
		'//web/js/lib/require-jquery.js', 
		'//web/js/lib/jquery.tagsinput.min.js', 
		'//web/js/lib/leaflet/leaflet.js', 
		'//web/js/lib/fancybox/jquery.easing-1.3.pack.js', 
		'//web/js/lib/fancybox/jquery.mousewheel-3.0.6.pack.js', 
	),

    'editor' => array(
    	'//web/js/loaders/editor.js',
		'//web/js/lib/order.js',
		'//web/js/lib/underscore.js',
		'//web/js/lib/backbone.js',
		'//web/js/lib/jquery/ui/js/jquery-ui.min.js',
		'//web/js/lib/spin.js',
		'//web/js/lib/swfobject.js',
		'//web/js/lib/visualsearch.js',
		'//web/js/lib/leaflet/leaflet.js',
		'//web/js/ux/zeega.ux.header.js',
		'//web/js/ux/zeega.ux.editor.js',
		'//web/js/ux/layer-controls.js',
		'//web/js/helpers/zeega.extends.js',
		'//web/js/helpers/zeega.helpers.js',
		'//web/js/app/zeega.js',
		'//web/js/app/zeega.player.js',
		'//web/js/lib/jquery/plugins/spin.js',
		'//web/js/lib/jquery/plugins/jeditable.min.js',
		'//web/js/lib/jquery/plugins/jquery-cycle.js',
		'//web/js/lib/farbtastic/farbtastic.js',
		'//web/js/lib/jquery/plugins/jquerygetUrlParam.js',
		'//web/js/lib/jquery/plugins/jqueryjson.js',
		'//web/js/lib/jquery/plugins/jquerycookie.js',
		'//web/js/lib/popcorn_flash.js',
		'//web/js/lib/bootstrap.js',
		'//web/js/plugins/players/plyr.js',
		'//web/js/app/models/editor.model.project.js',
		'//web/js/app/models/editor.model.sequence.js',
		'//web/js/app/models/editor.model.item.js',
		'//web/js/app/models/editor.model.frame.js',
		'//web/js/app/models/editor.model.layer.js',
		'//web/js/app/collections/editor.collections.sequence.js',
		'//web/js/app/collections/editor.collections.item.js',
		'//web/js/app/collections/editor.collections.frame.js',
		'//web/js/app/collections/editor.collections.layer.js',
		'//web/js/app/views/editor.project/editor.view.project.editor.js',
		'//web/js/app/views/editor.project/editor.view.publish.project.editor.js',
		'//web/js/app/views/editor.item/editor.view.item.database-tray.js',
		'//web/js/app/views/editor.frame/editor.view.frame.frame-sequence.js',
		'//web/js/app/views/editor.layer/editor.view.layer.control-library.js',
		'//web/js/app/views/editor.layer/editor.view.layer.layer-list.js',
		'//web/js/app/views/editor.layer/editor.view.layer.visual-editor.js',
		'//web/js/plugins/layers/video/video.js',
		'//web/js/plugins/layers/audio/audio.js',
		'//web/js/plugins/layers/geo/geo.js',
		'//web/js/plugins/layers/image/image.js',
		'//web/js/plugins/layers/mapbox/mapbox.js',
		'//web/js/plugins/layers/text/text.js',
		'//web/js/plugins/layers/googlebook/googlebook.js',
		'//web/js/plugins/layers/rectangle/rectangle.js',
		'//web/js/app/index.js',
		'//web/js/lib/require.js',
		'//web/js/lib/jquery.tagsinput.min.js'
	),


    'browser' => array(

		'//web/js/lib/jquery.tagsinput.min.js', 
		'//web/js/lib/leaflet/leaflet.js',
		'//web/js/lib/fancybox/jquery.easing-1.3.pack.js', 
		'//web/js/lib/fancybox/jquery.mousewheel-3.0.6.pack.js',
		'//web/js/lib/fancybox/jquery.fancybox.js', 
		'//web/js/lib/fancybox/jquery.fancybox.pack.js', 
		'//web/js/lib/fancybox/helpers/jquery.fancybox-buttons.js',

		//'//web/js/app/collections/browser.collections.collection.js', 
		//'//web/js/app/collections/browser.collections.item.js', 
		'//web/js/app/views/browser.item/browser.view.item.item-tray.js', 
		'//web/js/app/views/browser.collection/browser.view.collection.my-collection-drawer.js', 
		'//web/js/app/views/browser.fancybox/browser.view.fancybox._fancybox.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.audio.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.document-cloud.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.image.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.default.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.tweet.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.soundcloud.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.video.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.mapbox.js',
		'//web/js/app/views/browser.fancybox/browser.view.fancybox.youtube.js',
		'//web/js/app/views/browser.map/browser.view.map.fancybox.js',
		'//web/js/app/views/browser.tag/browser.view.tag.fancybox.js',

		'//web/js/app/index.browser.js'
	),


*/
