<?php
function createMenu($parentId, $groupType)
{
	global $groups;
	global $conn;

	if ($parentId == 0)
		$groupResult = $groups->getByParentIdAndType($parentId, $groupType);	
	else
		$groupResult = $groups->getByParentId($parentId);	

	if ($conn->numRows($groupResult) > 0 and $parentId != 0)
	{?>
		<ul>
	<? }	

	while($groupRow = $conn->fetchArray($groupResult))
	{	
		echo '<li>';
		?>
    	<a href="<? if($groupRow['linkType']=='File'){ echo CMS_FILES_DIR.$groupRow['contents']; }else if($groupRow['linkType']=='Link' and $groupRow['urlname']!='home'){ echo $groupRow['contents'];}else{ echo $groupRow['urlname']; }?>" <? if($groupRow['linkType']=='Link' and $groupRow['urlname']!='home') echo 'target="_blank"';?>><?=$groupRow['name'];?></a>
		<?

		if($groupRow['linkType']=="Normal Group" and $groupRow['urlname']!='video-gallery')
			createMenu($groupRow['id'], $groupType);

		echo "</li>\n";
	}
	if ($conn->numRows($groupResult) > 0 and $parentId != 0)
		echo '</ul>';
}
?>