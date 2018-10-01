<?php $this->load->view('admin/inc/top');?>
<?php
$name = 'categoryadd';
$value = '';
$name_img = 'category_image';
$image = '';

if($is_edit == true){
	if($category_details->num_rows() > 0){
		$cat = $category_details->row();
		$name = 'categoryedit';
		$value = $cat->category_name;

		$name_img = 'category_image_edit';
		$image = $cat->category_image;


	}
}
?>
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-red-sunglo">
            <i class="icon-settings font-red-sunglo"></i>
            <span class="caption-subject bold uppercase"> New Category</span>
        </div>

    </div>
    <div class="portlet-body form">
        <form role="form" method="post" action="<?php echo base_url()?>category/post">
            <div class="form-body">
                <div class="form-group form-md-line-input">
                    <input type="text" class="form-control" id="form_control_1" name="<?php echo $name?>" value="<?php echo $value?>" required>
                    <label for="form_control_1">Category name</label>
                    <span class="help-block">Some help goes here...</span>
                </div>
            </div>




														<div id="field0" class="form-body">
																<!-- Text input-->
													<?php
													$count = 0;
													?>
																<div class="form-group">
																		<div class="col-md-9">
																				<!-- <input type="text" class="form-control input-inline input-medium img<?php echo $count?>" name="<?php echo $name_img?>" value="<?php echo $image?>"> -->
																				<input type="text" class="form-control input-inline input-medium img<?php echo $count?>" name="<?php echo $name_img?>" value="<?php echo $image?>" required />
																				<!-- <input type="text" class="imgId<?php echo $count?>" name="imgid[]" /> -->

																				<!-- <input type="text" class="imgId<?php echo $count?>" name="<?php echo $name_img?>" value="<?php echo $image?>" /> -->
																				<span class="help-inline"><a class="select_img" id="<?php echo $count?>"  data-toggle="modal" href="#static">Upload or select image.</a></span>
																		</div>
																</div>
																<?php
														$count++;
														?>
														</div>


														










            <div class="form-actions noborder">
                <button type="submit" class="success_category_add btn blue">Submit</button>
                <a href="<?php echo base_url()?>category" class=" btn default">Cancel</a>
            </div>
            <?php if($is_edit == true){?>
            	<input type="hidden" name="catid" value="<?php echo $cat->id?>" />
            <?php }?>
        </form>
    </div>
</div>




<!-- <div class="form-actions noborder">
    <button type="submit" class="btn blue">Submit</button>
    <a href="<?php echo base_url()?>quiz" class="btn default">Cancel</a>
</div> -->


 <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" style="width:80%">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancel</button>
                    <button type="button" data-dismiss="modal" class="btn green">Continue Task</button>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('admin/inc/footer');?>
