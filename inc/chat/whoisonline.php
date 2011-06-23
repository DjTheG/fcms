<?php
$incPath = dirname(dirname(__FILE__)) . '/';

if (!defined('AJAX_CHAT_PATH'))
{
    define('AJAX_CHAT_PATH', dirname($incPath.'/chat/index.php') . '/');
}

require_once $incPath.'config_inc.php';
require_once $incPath.'util_inc.php';
require_once $incPath.'chat/lib/classes.php';

$count = 0;

$ajaxChat = new CustomAJAXChatInterface();

$ajaxChat->removeInactive();

$users = $ajaxChat->getOnlineUsers();
if ($users)
{
    $count = count($users);
}

print T_('Chat').' ('.$count.')';