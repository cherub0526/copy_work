      <div class="row" style="margin-top: 10px">
        <div class="col-sm-9 col-lg-8 col-lg-offset-2">
          <?php echo form_open('jobs/search', array('class'=>'jobs-search-form','role'=>'search'));?>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="搜尋工作關鍵字..." name="search">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </div>
          <?php echo form_close();?>
        </div>
        <div class="col-sm-3 col-lg-2">
          <a id="modal-344345" href="#modal-container-344345" role="button" class="btn btn-primary btn-block" data-toggle="modal">張貼一份工作</a>
        </div>
        <div class="modal fade" id="modal-container-344345" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body" style="text-align:center;">
                <h3><strong> 感謝你願意在這裡分享工作 </strong></h3>

                <img alt="Shakehand" class="img-responsive" src="http://asset2.66kjobs.com/images/shakehand.png">

                <h4><strong> 這是一個能提供你在辦公室以外的任何地點工作的網站。 </strong></h4>


                <br><br>
                <?php echo anchor('jobs/new_job','馬上來張貼工作，並找到合適的人！',array('class'=>'btn btn-lg btn-default btn-primary'));?>
                <br><br>

                <p> <a href="#" style="color:#ccc; text-decoration:underline;" data-dismiss="modal"> 我改變心意了，我想找的人得待在辦公室裡 </a> </p>
              </div>
            </div>
          </div>
        </div>
      </div>