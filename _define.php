<?php
/**
 * Plugin description
 * 
 * PHP Version 5
 * 
 * @category Plugin
 * @package  CleanURLs
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @license  http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License
 * @link     http://rudloff.pro
 * */
if (!defined('DC_RC_PATH')) {
    return;
}
 
$this->registerModule(
    /* Name */            'Clean URLs',
    /* Description */        'Removes diacritics and punctuation from URLs',
    /* Author */            'Pierre Rudloff',
    /* Version */            '0.1.1',
    /* Permissions */        'usage,contentadmin'
);
?>
