<?php
/*------------------------------------------------------------------------
# empage.php - Empage Component
# ------------------------------------------------------------------------
# author    George Dunlop
# copyright Copyright (C) 2013. All Rights Reserved
# license   GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html
# website   www.vacidesign.co.uk
-------------------------------------------------------------------------*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Added for Joomla 3.0
if(!defined('DS')){
	define('DS',DIRECTORY_SEPARATOR);
};

$app = JFactory::getApplication();
$admin = $app->isAdmin();
if($admin==1)
	{
?>
<div>
	Empage was made to make it possible to have an empty page with SEF compatible urls.
</div>
<?php
	}
else
	{

// import joomla controller library
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by empage
$controller = JControllerLegacy::getInstance('empage');

// Perform the request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
	}
?>