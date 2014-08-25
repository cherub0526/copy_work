<div class="container">
  <div class="row clearfix">
  <div class="col-md-1 column">
  </div>
    <div class="col-md-11 column" style="padding-top: 30px">
      <h2 style="display: inline; padding-right: 20px"><p class="label label-default">Step 1. 撰寫你的徵才啟事 </p></h2>
      <h2 style="display: inline; padding-right: 20px"><p class="label label-success" style="text-shadow:2px 2px 2px #222;">Step 2. 預覽你的徵才啟事 </p></h2>
      <h2 style="display: inline; padding-right: 20px"><p class="label label-default">Step 3. 刊登你的徵才啟事 </p></h2>
    </div>
  </div>
  <div class="row clear-fix">
    <div class="col-md-10 column" style="padding-bottom: 30px">
      <br>
      <br>
      <br>
      <h2>STEP 2 : 預覽徵才啟事</h2>
      <br>
      <footer style="color: #777; text-align: right;">你張貼的工作會在這個網站上停留三十天，三十天過後這個徵才啟事會過期，你可以隨時再回來重新張貼工作廣告。</footer>
      <hr>
      <br>
      <div class="row clearfix">
        <div class="col-md-12 column">
          <br>
          <h2> <?php echo $detail[0]['jobs_title'];?>  @ <?php echo $detail[0]['jobs_company'];?> </h2>
          <div class="group">
            <span style="color:grey; font-weight:bold;"> <i class="glyphicon glyphicon-calendar"> </i> 刊登日期 <?php echo $detail[0]['jobs_update'];?></span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <span style="color:grey; font-weight:bold;"> <i class="glyphicon glyphicon-map-marker"></i> 上班地點 <?php echo $detail[0]['jobs_place'];?> </span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <span style="color:grey; font-weight:bold;" class="pull-right">
             <span class="label <?php salary($detail[0]['jobs_lower']);?> ">新台幣 $<?php echo $detail[0]['jobs_lower'];?> 元</span>  ~ <span class="label <?php salary($detail[0]['jobs_higher']);?> ">新台幣 $<?php echo $detail[0]['jobs_higher'];?> 元</span>
             </span>
          </div>
          <hr>
          <div>
            <?php echo $this->markdown->parse($detail[0]['jobs_description']);?>
          </div>
          <br>
          <div class="well">
            <h4> 應徵方法 </h4>
            <?php echo $detail[0]['jobs_hire'];?>
          </div>
        </div>
        <div class="col-md-11 column" style="padding-top: 30px">
          <div class="checkbox col-md-5 colum">
            <br>
            <br>
            <br>
            <br>
            <br>
          </div>
              <?php echo anchor('jobs/done', '繼續下一步 > 刊登徵才啟事', 'class="btn btn-lg btn-primary" name="commit" type="submit"');?>
              <p style="display: inline">or</p>
              <a style="display: inline; cursor: hand" onclick="history.back()"> 回到上一步驟修改 </a>
        </div>
      </div>
    </div>
  </div>
</div>