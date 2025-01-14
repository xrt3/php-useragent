<?php
/**
 * Test Useragent
 * @package php-useragent
 * @author zsx <zsx@zsxsoft.com>
 * @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
ini_set('display_errors', 'On');
error_reporting(E_ALL);
include dirname(__FILE__) . '/useragent.class.php';
$useragent = UserAgentFactory::analyze($_SERVER['HTTP_USER_AGENT']);
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<title>Success</title>
	<style type="text/css">
		.content {
			text-align: center;
		}
	</style>
</head>
<body>
Success
	<div class="content">
	<h1>测试一下UA呐</h1>
	<p>原始的UserAgent: <?php echo $useragent->useragent; ?></p>
	<p>平台: <?php echo $useragent->platform['type'] ?>
    <p>设备: <img src="<?php echo $useragent->device['image'] ?>"/><?php echo $useragent->device['title'] ?>(Brand: <?php echo $useragent->device['brand'] ?>, Model: <?php echo $useragent->device['model'] ?>) </p>
    <p>系统: <img src="<?php echo $useragent->os['image'] ?>"/><?php echo $useragent->os['title'] ?> (Name = <?php echo $useragent->os['name'] ?>, Version = <?php echo $useragent->os['version'] ?>)</p>
    <p>浏览器: <img src="<?php echo $useragent->browser['image'] ?>"/><?php echo $useragent->browser['title'] ?> (Name = <?php echo $useragent->browser['name'] ?>, Version = <?php echo $useragent->browser['version'] ?>)</p>
	</div>
</body>
</html>