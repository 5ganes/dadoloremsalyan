<style type="text/css">
    .content-image{width: 100%;}
</style>
<div id="content" class="cf" style="width:75%">
<?php //include("includes/breadcrumb.php"); ?>
<article class="single-view post-77 page type-page status-publish hentry">
    <header class="entry-header cf"><u><h2 class="entry-title"><?php echo $pageName; ?></h2></u></header>
    <div class="entry-byline cf">
    </div>
    <div class="entry-content cf">
    	<?php
        $content=$groups->getById($pageId);
        $contentGet=$conn->fetchArray($content);
        if(!empty($contentGet['image']) and file_exists(CMS_GROUPS_DIR.$contentGet['image']))
            echo '<div><img class="content-image" src="'.CMS_GROUPS_DIR.$contentGet['image'].'"></div>';
        echo $contentGet['contents'];

		// $pagename = "index.php?id=". $pageId ."&";
		// include("includes/pagination.php");
		// echo Pagination($pageContents, "content");
		?>
    </div>
</article>
</div>