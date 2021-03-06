<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Work Remotely</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
  <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
  <!--script src="js/less-1.3.3.min.js"></script-->
  <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

  <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/bootstrap-markdown.min.css" rel="stylesheet">


  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.png">

  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/scripts.js"></script>
</head>

<body>
<div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
           <?php echo anchor('jobs', '<strong>Remote Worker</strong>', array('class'=>'navbar-brand'));?>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
              <?php echo anchor('pages/about', '關於本站');?>
            </li>
            <li>
              <?php echo anchor('pages/express', '訂閱');?>
            </li>
            <li>
              <a href="https://zh-tw.facebook.com/" target="_blank">粉絲團</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li style="padding-right: 20px">
            <!-- Sign In  -->
              <button type="button" class="btn btn-success navbar-btn" data-toggle="modal" data-target="#myModal"><strong>Sign In</strong></button>


              <!-- Sign In End -->
            </li>
          </ul>
        </div>
      </nav>
      <?php

      foreach($view as $view)
      {
        $this->load->view($view,$data);
      }
      ?>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>js/markdown.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/to-markdown.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.hotkeys.js"></script>
</body>
</html>
