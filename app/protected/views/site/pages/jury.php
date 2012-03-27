<div class="cont-head">ЖЮРИ</div>
	<div class="scroll-pane">
		<div class="cont-body">
			<?php
			$page=Pages::model()->findByPk(3);
			echo $page->content;
			$this->pageTitle=$page->title;
			Yii::app()->clientScript->registerMetaTag($page->description, 'Description');
			?>
		</div>
	</div>
<div class="cont-foot"></div>