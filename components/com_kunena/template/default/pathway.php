<?php


// Dont allow direct linking
defined( '_JEXEC' ) or die();

require_once(KUNENA_PATH_LIB . '/kunena.pathway.class.php');
$pathway = new CKunenaPathway();

$func = JString::strtolower ( JRequest::getCmd ( 'func', 'listcat' ) );
$catid = JRequest::getInt ( 'catid', 0 );
$id = JRequest::getInt ( 'id', 0 );
?>
<!-- Pathway -->
<?php
	// FIXME: move most of the code out of the template
	$catids = intval ( $catid );
	$jr_path_menu = array ();
	$fr_title_name = JText::_('COM_KUNENA_CATEGORIES');

	while ( $catids > 0 ) {
		$results = $pathway->getCatsDetails($catids);
		if (! $results)
			break;

		$parent_id = $results->parent;
		$fr_name = $this->escape( JString::trim ( $results->name ) );
		$sname = CKunenaLink::GetCategoryLink ( 'showcat', $catids, $fr_name );

		if ($catid == $catids && $func != "view") {
			$fr_title_name = $fr_name;
			$jr_path_menu [] = $fr_name;
		} else {
			$jr_path_menu [] = $sname;
		}

		// next looping
		$catids = $parent_id;
	}

	//reverse the array
	$jr_path_menu = array_reverse ( $jr_path_menu );

	//attach topic name
	$this->kunena_topic_title = '';
	if ($func == "view" and $id) {
		$this->kunena_topic_title = $pathway->getMessagesTitles($id);
		$jr_path_menu [] = $this->escape($this->kunena_topic_title);
	}

	// print the list
	if (count ( $jr_path_menu ) == 0)
		$jr_path_menu [] = '';
	$jr_forum_count = count ( $jr_path_menu );

	$fireinfo = '';
	$fireonline = '';
	$firepath = '<div class="path-element-first">' . CKunenaLink::GetCategoryListLink ( $this->escape( $this->config->board_title ) ) . '</div>';
	$firelast = '';

	for($i = 0; $i < $jr_forum_count; $i ++) {
		if ($i == $jr_forum_count - 1) {
			if ( $this->config->onlineusers ) :
			$firelast .= '<div class="path-element">' . $jr_path_menu [$i] . $fireinfo . '</div>';
			endif;
		} else {
			$firepath .= '<div class="path-element">' . $jr_path_menu [$i] . '</div>';
		}
	}

	





	$pathway->document->setTitle ( $this->kunena_topic_title ? $this->kunena_topic_title : $fr_title_name . ' - ' . $this->config->board_title );

	$this->kunena_pathway1 = $firepath . $fireinfo;
	$this->kunena_pathway2 = $firelast . $fireonline;
?>
<div class="kblock kpathway">
	<div class="kcontainer" id="pathway_tbody">
		<div class="ksectionbody">
			<div class = "kforum-pathway">
			<?php echo $this->kunena_pathway1 . $this->kunena_pathway2; ?>
			</div>
		</div>
	</div>
</div>
