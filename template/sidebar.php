<div id="sidebar-left" class="sidebar cf">
	<div id="widgets-wrap-sidebar-left">
		<div id="text-2" class="widget-sidebar frontier-widget widget_text">
			<?php
		    $officer=$groups->getById(OFFICER); $officer=$conn->fetchArray($officer);
		    ?>
		    <h4 class="widget-title"><?=$officer['name'];?></h4>
		    <div class="textwidget" style="text-align: justify;font-size: 14px">
		    	<a href="<?=$officer['urlname']; ?>"><img src="<?=CMS_GROUPS_DIR.$officer['image'];?>"></a>
		        <?=$officer['shortcontents'];?>
		    </div>
		    <a style="font-weight: bold;font-size: 15px;float: right;" href="<?=$officer['urlname']; ?>">read more...</a>
		</div>

		<div id="text-9" class="widget-sidebar frontier-widget widget_text">
	      <?php
	      $info_officer=$groups->getById(INFO_OFFICER); $info_officer=$conn->fetchArray($info_officer);
	      ?>
	      <h4 class="widget-title"><?php echo $info_officer['name'];?></h4>
	      <div class="textwidget" style="text-align:justify">
	        <a href="<?=$info_officer['urlname']; ?>">
	        <img style="float:left; margin:3px 7px 0 0" width="105" height="105" src="<?=CMS_GROUPS_DIR.$info_officer['image'];?>" />
	        </a>
	        <?=$info_officer['shortcontents']; ?>
	        <br>
	        <a style="font-weight: bold;font-size: 15px;float: right;" href="<?=$info_officer['urlname']; ?>">read more...</a>
	      </div>
	    </div>

		<div id="text-3" class="widget-sidebar frontier-widget widget_text">
			<h4 class="widget-title">उपयोगी लिङ्क्स</h4>
			<div class="textwidget">
				<ul>
				<?php
				$links=$groups->getByParentIdWithLimit(LINKS,5);
				while($linksGet=$conn->fetchArray($links)){?>
					<li><a href="<?=$linksGet['contents'];?>" title="<?=$linksGet['name']?>" target="_blank">
						<?=$linksGet['name']?>
					</a></li>
				<?php }?>
				</ul>
				
				<? $links=$groups->getById(LINKS); $links=$conn->fetchArray($links);?>
				<a style="float:right" href="<?=$links['urlname'];?>"><em><strong>Read More</strong></em></a>
			</div>
		</div>
				
	</div>
</div>
<div class="dynamic">