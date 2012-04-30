<?php


// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );

global $mainframe;

jimport('joomla.utilities.date');
$app = JFactory::getApplication();

$date = new JDate();
$cur_year	= $date->toFormat('%Y');
$csite_name	= $app->getCfg('sitename');

// NOTE - You may change this file to suit your site needs
?>
<span class="footerc">
Copyright &copy; <?php echo $cur_year;?>.  <?php echo $csite_name;?>.
Powered by Shape5 
</span>


<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F4f4c315bc7f692b0e7aa72bf2ed450aa' type='text/javascript'%3E%3C/script%3E"));
</script>