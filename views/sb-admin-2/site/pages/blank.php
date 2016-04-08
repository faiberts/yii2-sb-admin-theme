<?php
/**
 * blank.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;

use p2made\helpers\FA;

p2made\theme\sbAdmin\assets\SBAdmin2Asset::register($this);

$this->title = 'Blank Page';

/* @var $this yii\web\View */
?>
<div id="content-wrapper">

	<!-- #pragma - 1 or more naked rows go in here -->

	<div class="row">
		<div class="col-lg-12">


		</div>
	</div>

	<!-- /#pragma -->

	<!-- this goes on every site file in p2made demos -->
	<br><div class="alert alert-success" role="alert">
		<ul class="fa-ul">
			<li>
				<?= FA::fw(FA::_CODE)->li()->size(FA::SIZE_LARGE) ?> <code><?= __FILE__ ?></code>
			</li>
		</ul>
	</div>

</div><!-- /#content-wrapper -->
