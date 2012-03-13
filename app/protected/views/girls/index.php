<?php
$this->breadcrumbs=array(
	'Girls',
);

$this->menu=array(
	array('label'=>'Create Girls', 'url'=>array('create')),
	array('label'=>'Manage Girls', 'url'=>array('admin')),
);
?>

<div class="cont-head">УЧАСТНИЦЫ</div>
<div class="scroll-pane" style="padding-top:0px;">
		<div class="cont-body">
			<b>Уважаемые члены жюри!</b><br>
			Отметьте звездочкой понравившихся участниц<br>
			и нажмите кнопку ОБНОВИТЬ в конце списка!<br>
			
			
	<?php	foreach($dataProvider->data as $girl) {	?>
			
			<div class="g-item" style="height:115px;">
				<div class="point up"> <?php echo $girl->name; ?>, <?php echo $girl->registration; ?></div>
				<div class="g-body">
					<a target="_blank" href="<?php echo substr($girl->portrait,0,strrpos($girl->portrait,".")).'_big.'.end(explode(".", $girl->portrait)); ?>">
					<div class="g-item-img"><div class="bord-img"></div>
						<img src="<?php echo $girl->portrait; ?>" width="66"  border="0">
					</div>
					</a>
					<div class="g-item-text">
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td width="70">Возраст:</td>
								<td> <?php echo  (date('Y')-$girl->year); ?></td>
							</tr>
							<tr>
								<td>Рост:</td>
								<td><?php echo $girl->height; ?></td>
							</tr>
						</table>
						<a class="desc-us" href="<?php echo Yii::app()->request->baseUrl.'/index.php?r=girls/view&id='.$girl->id; ?>">Подробнее...</a>
						<div class="player">
							<object  type="application/x-shockwave-flash" data="/app/file/player.swf" height="43" width="287">
								<param name="wmode" value="transparent" />
								<param name="allowFullScreen" value="true" />
								<param name="allowScriptAccess" value="always" />
								<param name="movie" value="http://flv-mp3.com/i/pic/ump3player_500x70.swf" />
								<param name="FlashVars" value="way=<?php echo $girl->demo; ?>&amp;swf=/app/file/player.swf&amp;w=287&amp;h=43&amp;time_seconds=164&amp;autoplay=0&amp;q=1&amp;skin=white&amp;volume=70&amp;comment=" />
							</object>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			
			
		<?php } ?>	
			
		<div class="pagerdiv"></div>
		<div class="save"></div>
			
		</div>
		</div>
		<div class="cont-foot"></div>

