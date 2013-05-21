<?php
session_start();
set_time_limit(0);

require_once 'cfg/config.inc.php';

/** establishing starting values when not set by users prefs or action */
$g=(isset($_GET['g']) && $_GET['g']!='') ? $_GET['g'] : 'l'; /** Current main page */
$p=(isset($_GET['p']) && $_GET['p']>0) ? $_GET['p'] : 1; /** Current navigation page */
$s=(isset($_GET['s']) && $_GET['s']!='') ? $_GET['s'] : 'unk'; /** Current navigation subpage */
$l=(isset($_GET['l']) && $_GET['l']!='') ? $_GET['l'] : 'en_EN';  /** Current language */

$d3 = ';';
$d4 = ';';
$d5 = '';

//

?>