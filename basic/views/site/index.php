<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">



    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <p>Data</p>

              <h2>Inventori</h2>
            </div>
            <div class="icon">
              <i class="fa fa-server"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
            <?= Html::a(
                    'More info',
                    ['/inventori'],
                    ['data-method' => 'post', 'class' => 'small-box-footer']
                ) ?>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            
              <p>Data</p>

              <h2>Pegawai</h2>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
            <?= Html::a(
                    'More info',
                    ['/users'],
                    ['data-method' => 'post', 'class' => 'small-box-footer']
                ) ?>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <p>Data</p>

              <h2>Admin</h2>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
            <?= Html::a(
                    'More info',
                    ['/login'],
                    ['data-method' => 'post', 'class' => 'small-box-footer']
                ) ?>
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    
</div>
