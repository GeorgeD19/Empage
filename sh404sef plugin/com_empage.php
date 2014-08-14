                                <?php
/**
 * sh404SEF support for com_empage component.
 * Author : George Dunlop
 * contact : info@vacidesign.co.uk
 * 
 * This is a Empage sh404SEF native plugin file
 *    
 */
defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );

// ------------------  standard plugin initialize function - don't change ---------------------------
global $sh_LANG;
$sefConfig = & shRouter::shGetConfig();  
$shLangName = '';
$shLangIso = '';
$title = array();
$shItemidString = '';
$dosef = shInitializePlugin( $lang, $shLangName, $shLangIso, $option);
if ($dosef == false) return;
// ------------------  standard plugin initialize function - don't change ---------------------------

// remove common URL from GET vars list, so that they don't show up as query string in the URL
shRemoveFromGETVarsList('option');
shRemoveFromGETVarsList('lang');
shRemoveFromGETVarsList('view');
if (!empty($Itemid))
  shRemoveFromGETVarsList('Itemid');

// start by inserting the menu element title (just an idea, this is not required at all)
$task = isset($task) ? $task : null;
$Itemid = isset($Itemid) ? $Itemid : null;
$shEmpageName = shGetComponentPrefix($option); 
$shEmpageName = empty($shEmpageName) ?  
    getMenuTitle($option, $task, $Itemid, null, $shLangName) : $shEmpageName;
$shEmpageName = (empty($shEmpageName) || $shEmpageName == '/') ? 'EmpageCom':$shEmpageName;

if (isset($task) &&($task == 'viewUserDetails')) {
$title[] = 'View-user-Details';
shRemoveFromGETVarsList('task');
}

$title[]=$shEmpageName;
  
// ------------------  standard plugin finalize function - don't change ---------------------------  
if ($dosef){
   $string = shFinalizePlugin( $string, $title, $shAppendString, $shItemidString, 
      (isset($limit) ? @$limit : null), (isset($limitstart) ? @$limitstart : null), 
      (isset($shLangName) ? @$shLangName : null));
}      
// ------------------  standard plugin finalize function - don't change ---------------------------
  
                            