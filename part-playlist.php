<?php
/*
*
*
*	Bottom bar player and playlist (generated via jacascript/ajax)
*
*/
?>

<div class="qw-playlist qw-animated" id="qwMusicPlaylist">
	<div class="qw-scrollable-playlist" id="qwPlaylistContent">
		  <table class="table">
		  		<thead>
			    	<tr>
			    		<th class="text-center"><?php echo esc_attr__('Play','_s'); ?></th>
			    		<th><?php echo esc_attr__('Cover','_s'); ?></th>
			    		<th class="hidden-xs"><span class="line1"><?php echo esc_attr__('Release','_s'); ?></span><br><?php echo esc_attr__('Label','_s'); ?></th>
			    		<th><span class="line1"><?php echo esc_attr__('Track Title','_s'); ?></span><br><?php echo esc_attr__('Track Authors','_s'); ?></th>
			    		<th class="text-center hidden-xs"><?php echo esc_attr__('Page','_s'); ?></th>
			    		<th class="text-center hidden-xs"><?php echo esc_attr__('Buy','_s'); ?></th>
			    		<th class="text-center hidden-xs"><?php echo esc_attr__('Delete','_s'); ?></th>
			    	</tr>
		    	</thead>
		    	<tbody id="qwPlaylistTable"  data-archiveradio="<?php echo add_query_arg( array('qw_get_json_data' => '1'), get_post_type_archive_link( 'radiochannel' )); ?>" data-archive="<?php echo add_query_arg( array('qw_get_json_data' => '1'), get_post_type_archive_link( 'release' )); ?>">
			    	<?php 
			    	//get_template_part("part", "radiostations"); 
			    	?>
			    </tbody>
		  </table>
	</div>		  
</div>


<div class="qw-footer-bar qw-animated open  <?php if(get_theme_mod("QT_musicplayer","1") == '0'){ echo 'hidden'; } ?>" data-autoplay="<?php echo esc_attr(get_theme_mod("QT_autoplay","0")); ?>" id="QWplayerbar">
	<div class="row">
		<div class="col-xs-2 col-sm-1 col-md-1">
			<a href="#" class="qw-ui-button qw-player-play qw-hidesstat" data-state="stop" id="qwPlayerPlay" data-mp3="" data-soundmanagerswf="<?php echo esc_url(get_template_directory_uri().'/js/soundmanager2.swf'); ?>"><span class="qticon-play"></span></a>
		</div>
		<div class="col-md-2 hidden-xs hidden-sm" >
			<div id="qwPlayerBar">

			</div>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-1 hidden-xs">
			<a href="#" data-title="<?php echo esc_attr__("Audio and Video volume","_s"); ?>" data-placement="right"  class="qw-ui-button qw-hidesstat qw-tooltip" data-state="1" id="qwPlayerVolume" data-toggleclass="open" data-target="qtVolumeControl"><span class="qticon-volume"></span></a>
			<a href="#" data-title="<?php echo esc_attr__("Mute / unmute","_s"); ?>" data-placement="right"  class="qw-ui-button qw-hidesstat qw-tooltip" id="qwPlayerVolumeMute" data-toggleclass="hidden" data-target="qwPlayerVolumeMute" data-toggleclass2="hidden" data-target2="qwPlayerVolumeUnmute"><span class="qticon-mute"></span></a>
			<a href="#" data-title="<?php echo esc_attr__("Mute / unmute","_s"); ?>" data-placement="right"  class="qw-ui-button qw-hidesstat qw-tooltip hidden" id="qwPlayerVolumeUnmute" data-toggleclass="hidden" data-target="qwPlayerVolumeMute" data-toggleclass2="hidden" data-target2="qwPlayerVolumeUnmute"><span class="qticon-music"></span></a>

		</div>
		<div class="col-sm-1 col-md-1 hidden-xs text-right" id="qwPlayerCover">
		</div>
		
		<div class="col-xs-8 col-sm-4 col-md-2 col-lg-3  tracktitle">
			<span id="qwPlayerTitle" class="qw-player-title"></span>
			<span id="qwPlayerAuthor" class="qw-player-author"></span>
		</div>
		<div class="col-md-1 col-sm-1 hidden-xs" id="qwTrackBuy">
		</div>
		<div class="col-xs-2 col-sm-3 col-md-3 text-right">
			<a href="#" class="qw-ui-button hidden-xs qw-player-bw qw-hidesstat" id="qwPlayerPrev"><span class="qticon-skip-backward"></span></a>
			<a href="#" class="qw-ui-button hidden-xs qw-player-fw qw-hidesstat" id="qwPlayerNext"><span class="qticon-skip-forward"></span></a>
			<a href="#" class="qw-ui-button qw-playlist-switch qw-hidesstat" id="playlistOpener"><span class="qticon-list"></span></a>
		</div>
		<a id="qwHidePl" data-toggleclass="open" data-target="QWplayerbar" data-toggle="tooltip" data-title="<?php echo esc_attr__("Hide Player","_s"); ?>" data-placement="left" ><span class="glyphicon glyphicon-chevron-up qw-animated"></span></a>
	</div>
	<div id="qwUpdatingPlaylist" class="qw-animated"><?php echo esc_attr__("Updating playlist", "_s"); ?>
		<div class="qw-preloader" id="qwAjaxPreloaderPlaylist"><div class="circle"></div><div class="circle1"></div></div>
	</div>
</div>
