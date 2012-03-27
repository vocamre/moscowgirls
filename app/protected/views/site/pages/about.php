<div class="cont-head">О ПРОЕКТЕ</div>
<div class="scroll-pane" style="padding-top:0px;">
		<div class="cont-body">
			<?php
			$page=Pages::model()->findByPk(1);
			echo $page->content;
			$this->pageTitle=$page->title;
			Yii::app()->clientScript->registerMetaTag($page->description, 'Description');
			?>
		</div>
</div>
		<div class="cont-foot"></div>