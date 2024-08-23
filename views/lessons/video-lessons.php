<span><?=$change_video['name']?></span>
<div class="backgroundField">
    <div data-video="<?=$change_video['id']?>" class="<?=!$check_video_watched ? 'backgroundVideo' : 'd-none' ?>"><?=$GLOBALS['text']['clickToWatch']?></div>
    <iframe <?=$change_video['type'] == 1 ? 'sandbox=""' : ''?> src="<?=$change_video['type'] == 1 ? '/' : ''?><?=$change_video['video']?>" frameborder="0" allowfullscreen></iframe>
</div>
