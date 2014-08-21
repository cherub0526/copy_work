<div class="container">
  <div class="row clearfix">
  <div class="col-md-1 column">
  </div>
    <div class="col-md-11 column" style="padding-top: 30px">
      <h2 style="display: inline; padding-right: 20px"><span class="label label-warning" style="text-shadow:2px 2px 2px #222;">Step 1. 撰寫你的徵才啟事 </sapn></h2>
      <h2 style="display: inline; padding-right: 20px"><span class="label label-default">Step 2. 預覽你的徵才啟事 </sapn></h2>
      <h2 style="display: inline; padding-right: 20px"><span class="label label-default">Step 3. 刊登你的徵才啟事 </sapn></h2>
    </div>
  </div>
  <div class="row clear-fix">
    <div class="col-md-10 column" style="padding-bottom: 30px">
      <br>
      <br>
      <br>
      <h2>STEP 1 : 撰寫徵才啟事</h2>
      <br>
      <footer style="color: #777; text-align: right;">你張貼的工作會在這個網站上停留三十天，三十天過後這個徵才啟事會過期，你可以隨時再回來重新張貼工作廣告。</footer>
      <hr>
      <br>
      <br>
      <h4 style="color:rgb(204, 0, 0)"> &nbsp; &nbsp;&nbsp;第一步，告訴我們詳細資訊 </h4>
      <br>
      <br>
      <div class="row clearfix">
        <div class="col-md-12 column">
          <?php echo form_open('jobs/create_jobs',array('role'=>'form','class'=>'simple_form form-horizontal'));?>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="job_title">* 職位名稱</label>
               <div class="col-sm-9">
                <?php echo form_error('job_title'); ?>
                <input type="name" class="form-control" name="job_title" value="<?php echo set_value('job_title'); ?>"/>
                <footer style="color: #777">“Senior Designer” or “Rails Programmer”</footer>
              </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="category">* 分類</label>
               <div class="col-sm-9">
                <?php echo form_error('category'); ?>
                <?php foreach($category as $category):?>
                <span class="radio">
                  <label for="job_category_id_<?php echo $category['category_id'];?>" name="category">
                    <input class="radio_buttons optional" id="job_category_id_<?php echo $category['category_id'];?>" name="category" type="radio" value="<?php echo $category['category_id'];?>" <?php validation(set_value('category'),$category['category_id']);?>><?php echo $category['category_title'];?>
                  </label>
                </span>
                <?php endforeach;?>
              </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="bound">* 薪水</label>
               <div class="col-sm-9">
                <?php echo form_error('lower_bound'); ?>
                <?php echo form_error('higher_bound'); ?>
                <div class="input-prepend input-append">
                  <input type="number" class="string optional" placeholder="下限(Lower bound)" name="lower_bound" value="<?php echo set_value('lower_bound'); ?>"/>
                  ~
                  <input type="number" class="string optional" placeholder="上限(Higher bound)" name="higher_bound" value="<?php echo set_value('higher_bound'); ?>"/>
                </div>
              </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="work_place">* 工作地點</label>
               <div class="col-sm-9">
                <?php echo form_error('work_place'); ?>
                <input type="text" class="form-control" name="work_place" value="<?php echo set_value('work_place'); ?>"/>
                <footer style="color: #777">臺北 / 高雄 / 上海 / 更遠的地方...etc.</footer>
              </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="description">* 工作敘述</label>
               <div class="col-sm-9">
                <?php echo form_error('description'); ?>
                <textarea class="md-input" rows="15" data-provide="markdown" name="description"><?php echo set_value('description'); ?></textarea>
              </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="how_hire">* 如何應徵</label>
               <div class="col-sm-9">
                <?php echo form_error('how_hire'); ?>
                <textarea class="form-control" rows="5" name="how_hire" value="<?php echo set_value('how_hire'); ?>"></textarea>
                <footer style="color: #777">Example: Send a resume to hr@mycompany.com</footer>
              </div>
            </div>
            <hr>
            <h4 style="color:rgb(204, 0, 0)"> &nbsp; &nbsp;&nbsp;介紹你的公司  </h4>
            <br>
            <br>
            <br>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="company">* 公司 / 組織名稱</label>
               <div class="col-sm-9">
                <?php echo form_error('company'); ?>
                <input type="text" class="form-control" name="company" value="<?php echo set_value('company'); ?>"/>
                <footer style="color: #777">Enter your company or organization’s name.</footer>
              </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="url">* URL</label>
               <div class="col-sm-9">
                <?php echo form_error('url'); ?>
                <input type="url" class="form-control" name="url" value="<?php echo set_value('url'); ?>"/>
              </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="email">* Email</label>
               <div class="col-sm-9">
                <?php echo form_error('email'); ?>
                <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>"/>
                <footer style="color: #777">This is where we’ll send your receipt and confirmation email.</footer>
              </div>
            </div>
            <hr>
            <h4 style="color:rgb(204, 0, 0)"> &nbsp; &nbsp;&nbsp;Highlight 你的徵人啟事  </h4>
            <div class="col-md-1 column">
            </div>
            <div class="col-md-11 column" style="padding-top: 30px">
              <div class="checkbox col-md-5 colum">
                <div>
                  <p>只要<strong style="font-size: 18px"> $50 元</strong>，就可以讓您的徵才啟事更加突出！我們將會在您的徵才啟事塗上黃色背景色，讓您的徵才啟事在列表中更加突出！ </p>
                </div>
                <br>
                <label>
                  <input type="checkbox"> <strong>是的，我要Highlight 我的徵人啟事</strong>
                </label>
                <br>
                <br>
                <br>
                <br>
              </div>
              <div class="col-sm-11">
                  <input class="btn btn-lg btn-primary" name="commit" type="submit" value="繼續下一步 > 預覽徵才啟事">
              </div>
            </div>
            <!-- <div class="checkbox">
               <label><input type="checkbox" /> Check me out</label>
            </div> <button type="submit" class="btn btn-default">Submit</button> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</div>