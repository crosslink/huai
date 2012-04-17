<?php
/**
*
* @package UltimateSocialBookmarkingPlugin
* @copyright (C)2011 JoomlaDigger.com
* @license GNU/GPL
* http://joomladigger.com
*
**/
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Import library dependencies
jimport('joomla.event.plugin');

class plgContentInsertAfterFirstParagraph extends JPlugin
{
  function plgContentInsertAfterFirstParagraph( &$subject )
  {
		parent::__construct( $subject );

		// load plugin parameters
		$this->_plugin = JPluginHelper::getPlugin( 'content', 'insertafterfirstparagraph' );
		$this->_params = new JParameter( $this->_plugin->params );
  }
	
  function onPrepareContent(&$article, &$params, $page)
  { 
    // Only display on Joomla's content component
    if ( JRequest::getVar('option') != 'com_content' ) return false;
    
    // Only display on actual articles
    if (!isset($article->slug)) return false;
		
    // Check if the full content item is currently displayed
    if (JRequest::getVar('view') !== 'article') return false;
		
		// Get plugin variables
		$after_first_p        = trim($this->_params->def('after_first_p',''));
		$before_last_p        = trim($this->_params->def('before_last_p',''));
		$start                = trim($this->_params->def('start',''));
		$start_in_p           = trim($this->_params->def('start_in_p',''));
		$end                  = trim($this->_params->def('end',''));
		$end_in_p             = trim($this->_params->def('end_in_p',''));
		$after_n_p            = trim($this->_params->def('after_n_p',''));
		$n                    = intval($this->_params->def('n','2'));
		$excluded_categories  = $this->_params->get( 'excluded_categories', '');
		
		
		// Check if this content item is in an excluded category
		$excluded = explode (",", $excluded_categories);
		foreach ($excluded as $ex)
		{
			if ($article->catid == trim($ex))
			{
        return false;
			}
		}

    
    
    // Replace strings
    if ($after_first_p !== ''){
      $article->text = preg_replace('/<\/p>/', '</p>'. $after_first_p, $article->text, 1);
		}
		
		if ($before_last_p !== ''){
      $article->text = $this->replace_last('<p', $before_last_p .'<p', $article->text);
		}
		
		if ($start !== ''){
      $article->text = $start . $article->text;
		}
		
		if ($start_in_p !== ''){
		  $article->text = preg_replace('/<p>/', '<p>'. $start_in_p, $article->text, 1);
		}
		
		if ($end !== ''){
      $article->text = $article->text . $end;
		}
		
		if ($end_in_p !== ''){
		  $article->text = $this->replace_last('</p>', $end_in_p .'</p>', $article->text);
		}
		
		if ($after_n_p !== ''){
      $article->text = $this->insertAfterNth($article->text, '</p>', $n, $after_n_p);
		}
		
		
    return true;
    
  }
  
  
  function replace_last($search, $replace, $subject)
  {
      $pos = strrpos($subject, $search);

      if($pos === false)
      {
          return $subject;
      }
      else
      {
          return substr_replace($subject, $replace, $pos, strlen($search));
      }
  }
  
  
  function insertAfterNth($string, $needle, $offset, $insert)
  {
      $newString = $string;
      $totalPos = 0;
      $length = strlen($needle);
      for($i = 0; $i < $offset; $i++)
      {
          $pos = strpos($newString, $needle);

          // If you run out of string before you find all your needles
          if($pos === false)
              return $string;
          
          $newString = substr($newString, $pos+$length);
          $totalPos += $pos+$length;
      }
      return substr($string, 0, $totalPos) . $insert . substr($string, $totalPos);
  }
  


}
?>