<?php 
   $this->load->view('admin/layouts/header',$title);
 ?>
<div class="row  border-bottom white-bg dashboard-header">
   <div class="col-lg-8">
      <h2>Edit Product</h2>
      <ol class="breadcrumb">
         <li>
            <a href="#">Products</a>
         </li>
         <li class="active">
            <strong>Edit Products</strong>
         </li>
      </ol>
   </div>
</div>
<br/>
<?php 
   if(!empty($this->session->flashdata('message'))): ?>
<div class="row">
   <div class="col-md-8 col-md-offset-2 text-center">
      <div class="alert <?php echo $this->session->flashdata('alert-class'); ?> text-center">
         <?php echo $this->session->flashdata('message')['message']; ?>
      </div>
   </div>
</div>
<?php endif; ?>
<div id="wrapper">
<div class="wrapper wrapper-content animated fadeIn">
<?php echo form_open('admin/Product/update',array('enctype'=>'multipart/form-data')); ?>
<div class="row">
   <div class="col-lg-12 col-md-12">
      <div class="ibox float-e-margins">
         <div class="col-lg-12 col-md-12">
            <div class="ibox float-e-margins">
               <div class="ibox-title">
                  <h5>Product Info</h5>
               </div>
               <div class="ibox-content">
                  <div class="row">
                     <div class="col-lg-12 col-md-6">
                        <div class="col-lg-6 col-md-6">
                           <div class="form-group">
                              <label>Product Name
                              <span class="mindetory">*</span>
                              </label> 
                              <?php echo form_input(array('type'=>'text','name'=>'product_name','placeholder'=>'Enter Product Name','class'=>'form-control','data-parsley-required'=>'','data-parsley-error-message'=>'Product Name is mandatory','value'=>$prodcut_details->productname)); ?>
                           </div>
                           <input type="hidden" name="productId" value="<?php echo $prodcut_details->product_id_pk; ?>">
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="form-group">
                              <label>Packsize
                              </label>
                              <span class="mindetory">*</span>
                              <?php echo form_input(array('type'=>'text','name'=>'packsize','class'=>'form-control','placeholder'=>'Packsize','value'=>$prodcut_details->packsize)); ?>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="form-group">
                              <label for="category">Category
                              <span class="mindetory">*</span>
                              </label>
                              <select class="form-control" name="category" onchange="getSubcategory(this)" id="category" data-parsley-required data-parsley-error-message ='Category is mandatory'>
                                 <option value="">Select category in list.. </option>
                                 <?php foreach($category as $key => $value): ?>
                                 <option value='<?php echo $value['category_id_pk']; ?>' <?php if($value['category_id_pk'] == $prodcut_details->category_id_fk){echo "selected";} ?>><?php echo $value['category']; ?></option>
                                 <?php endforeach; ?>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                           <div class="form-group">
                              <label>Subcategory
                              <span class="mindetory">*</span>
                              </label>
                              <select name="subcategory" class="form-control" id="subcateid" subcateid data-parsley-required data-parsley-error-message ='Subcategory is mindetory'>
                              <option value="<?php echo $prodcut_details->subcategory_id_pk; ?>"><?php echo $prodcut_details->subcategory_name; ?></option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                           <div class="form-group">
                              <label>Key ingredients
                              <span class="mindetory">*</span>
                              </label>
                              <textarea name="composition" class="form-control" id="" rows="3" placeholder="write a product composition"><?php echo $prodcut_details->composition; ?></textarea>
                              <span>If composition N/A Write N/A in box.</span>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                           <div class="form-group">
                              <label>Description
                              <span class="mindetory">*</span>
                              </label>
                              <textarea name="indications" class="form-control" id="" rows="3" placeholder="write a product indications"><?php echo $prodcut_details->indications; ?></textarea>
                              <span>If composition N/A Write N/A in box.</span>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                           <div class="form-group">
                              <label>Method of use
                              <span class="mindetory">*</span>
                              </label>
                              <textarea name="dosage" class="form-control" id="" rows="3" placeholder="write a product dosage"><?php echo $prodcut_details->dosage; ?></textarea>
                              <span>If dosage N/A Write N/A in box.</span>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                           <div class="form-group">
                              <label>Sideeffects
                              <span class="mindetory">*</span>
                              </label>
                              <textarea name="sideeffects" class="form-control" id="" rows="3" placeholder="write a product sideeffects"><?php echo $prodcut_details->sideeffects; ?></textarea>
                              <span>If sideeffects N/A Write N/A in box.</span>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="form-group files color">
                              <label>Upload Product File </label>
                              <input type="file" name="product_image" class="form-control"  data-parsley-required data-parsley-error-message ='Product image is maindetory'>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="form-group">
                              <label>Product Image</label>
                              <img src="<?php echo base_url();?>assets/product-img/<?php echo $prodcut_details->photobig; ?>" alt="<?php echo $prodcut_details->productname; ?>" class="img-responsive" width="200" height="200" >
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                           <p>Image Types Allowed: png, jpeg, jpg.</p>
                           <p>Max Image Dimensions: 1500 x 1500 px and Max Uploaded Size 2MB.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12 col-md-12">
            <div class="ibox float-e-margins">
               <div class="col-lg-12 col-md-12">
                  <div class="ibox float-e-margins">
                     <div class="ibox-title">
                        <h5>SEO,Meta Deta</h5>
                     </div>
                     <div class="ibox-content">
                        <div class="row">
                           <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label>Meta Title
                                 <span class="mindetory">*</span>
                                 </label>
                                 <input type="text" class="form-control" name="meta-title" placeholder="Meta Title" value="<?php echo $prodcut_details->meta_title; ?>">
                              </div>
                           </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label>URL Slug
                                 <span class="mindetory">*</span>
                                 </label>
                                 <input type="text" class="form-control" name="url-slug" placeholder="Enter URL slug" value="<?php echo str_replace('-',' ',$prodcut_details->url_slug); ?>">
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-6">
                              <label>Meta Description
                              <span class="mindetory">*</span>
                              </label>
                              <textarea name="meta-desc" class="form-control" id="" rows="3" placeholder="Meta description"><?php echo $prodcut_details->meta_description; ?></textarea>
                           </div>
                           <div class="col-md-6 col-lg-6">
                              <label>Meta Keyword
                              <span class="mindetory">*</span>
                              </label>
                              <textarea name="meta-keyword" class="form-control" id="" rows="3" placeholder="Meta keywords"><?php echo $prodcut_details->meta_keyword;?></textarea>
                           </div>
                           <div class="row">
                              <div class="container">
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label>Meta og image
                                       <span class="mindetory">*</span>
                                       </label>
                                       <input type="file" class="form-control" name="meta_image">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 c col-md-3 ">
                           <div class="form-group">
                              <label>
                                 <p></p>
                              </label>
                              <button type="submit" class="btn  btn-success form-control"  style="background-color: #1B7BB9; color:white;">Submit</button>                              
                           </div>
                        </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php echo form_close(); ?>
   </div>
</div>
<?php 
   $this->load->view('admin/layouts/footer');
   ?>
<script>
   $(document).ready(function() {
      $("form[name=add_product]").parsley();
   });
</script>
<script>
   function getSubcategory(selectObject) {
      var value = selectObject.value;
      $.ajax({
         type:'POST',
         url:"<?php echo base_url();?>admin/Product/getSubcategory",
         data:{'id':value},
         success:function(data){
            $('#subcateid').html('<option value="">Select Subcategory</option>');
            var obj = JSON.parse(data);
            for(key in obj){
               var temp = obj[key];
               var option = $('<option />');
               option.attr('value', temp.subcategory_id_pk).text(temp.subcategory_name);
               $('#subcateid').append(option);
            }
         }
      });
   }
   
</script>