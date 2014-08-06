<?php
/*------------------------------------------------------------------------
# controller.php - Empage Component
# ------------------------------------------------------------------------
# author    George Dunlop
# copyright Copyright (C) 2013. All Rights Reserved
# license   GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html
# website   www.vacidesign.co.uk
-------------------------------------------------------------------------*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla controller library
jimport('joomla.application.component.controller');

/**
 * Empage Component Controller
 */
 
jimport('joomla.application.component.controller');

class EmpageController extends JControllerLegacy
{

	public function display($cachable = false, $urlparams = false)
	{
		JRequest::setVar('view','default'); 

		return parent::display($cachable, $urlparams);
	}

}
?>