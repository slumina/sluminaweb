<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;
$this->assign('title', 'Smartlumina | Complete lightning Solution');
$this->Html->css('home', ['block'=>true]);
if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/bg1.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="img/bg2.jpg" alt="Chania">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="col-md-12" style="margin-top:30px">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-xs-6 col-sm-3 col-lg-3 col-md-3">
			<div class="thumbnail">
				<img src="http://placehold.it/320x180" alt="">
				<div class="caption">
					<h3>Feature Label</h3>
					<p>This would be a great spot to feature some brand new products!</p>
      				<p></p>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-3 col-lg-3 col-md-3">
			<div class="thumbnail">
				<img src="http://placehold.it/320x180" alt="">
				<div class="caption">
					<h3>Feature Label</h3>
					<p>This would be a great spot to feature some brand new products!</p>
      				<p></p>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-3 col-lg-3 col-md-3">
			<div class="thumbnail">
				<img src="http://placehold.it/320x180" alt="">
				<div class="caption">
					<h3>Feature Label</h3>
					<p>This would be a great spot to feature some brand new products!</p>
      				<p></p>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-3 col-lg-3 col-md-3">
			<div class="thumbnail">
				<img src="http://placehold.it/320x180" alt="">
				<div class="caption">
					<h3>Feature Label</h3>
					<p>This would be a great spot to feature some brand new products!</p>
      				<p></p>
				</div>
			</div>
		</div>
	</div>
</div>