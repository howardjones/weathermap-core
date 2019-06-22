<?php
/*   PHP Weathermap 1.0.0
     Copyright Howard Jones, 2005-2018 howie@thingy.com
     http://www.network-weathermap.com/
     PHP Weathermap is licensed under the MIT License, see LICENSE file for more information.

    one file to include all the others...
*/

require_once dirname(__FILE__) . '/Weathermap/Core/globals.php';
require_once dirname(__FILE__) . '/Weathermap/Core/constants.php';

use Weathermap\Core\WMDebugFactory;

// Turn on ALL error reporting for now.
error_reporting(E_ALL | E_STRICT);

$wmDebugLogger = WMDebugFactory::create();
