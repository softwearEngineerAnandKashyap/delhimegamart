<?php
   $this->load->view('admin/layouts/header', $title);  ?>
<div class="row  border-bottom white-bg dashboard-header">
   <div class="col-lg-8">
      <h2>Add Product</h2>
      <ol class="breadcrumb">
         <li>
            <a href="#">Products</a>
         </li>
         <li class="active">
            <strong>Add Products</strong>
         </li>
      </ol>
   </div>
</div>
<br/>
<?php
   if (!empty($this->session->flashdata('message'))): ?>
<div class="row">
   <div class="col-md-8 col-md-offset-2 text-center">
      <div class="alert <?php echo $this->session->flashdata('alert-class'); ?> text-center">
         <?php echo $this->session->flashdata('message')['message']; ?>
      </div>
   </div>
</div>
<?php endif;?>
<div id="wrapper">
   <div class="wrapper wrapper-content animated fadeIn">
      <?php echo form_open('admin/ProductController/store', array('name' => 'add_product', 'data-parsley-validate' => '', 'enctype' => 'multipart/form-data')); ?>
      <div class="row ">
         <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1">
           
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <div class="ibox float-e-margins">
                           <div class="col-lg-12 col-md-12">
                              <div class="ibox float-e-margins">
                                 <div class="ibox-title">
                                    <h5>Product Details</h5>
                                 </div>
                                 <div class="ibox-content">
                                    <div class="row">
                                       <div class="col-lg-4 col-md-4">
                                          <div class="form-group">
                                             <label>Product Name
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="text" class="form-control" name="proName" placeholder="Ex: WOMEN SOLID MAROON SHIRT" data-parsley-required data-parsley-error-message="This felid is required.">
                                          </div>
                                       </div>
                                       <div class="col-lg-3 col-md-3">
                                          <div class="form-group">
                                             <label>SKU
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="text" class="form-control" name="proSku" placeholder="Ex: Baba3594" data-parsley-required data-parsley-error-message="This felid is required.">
                                          </div>
                                       </div>
                                        <div class="col-lg-2 col-md-2">
                                          <div class="form-group">
                                             <label>Price
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="text" class="form-control" name="proPrice" placeholder="Ex: 450" data-parsley-required data-parsley-error-message="This felid is required.">
                                          </div>
                                       </div>  <div class="col-lg-2 col-md-2">
                                          <div class="form-group">
                                             <label>Color
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="text" class="form-control" name="proColor" placeholder="Ex: 450" data-parsley-required data-parsley-error-message="This felid is required.">
                                          </div>
                                       </div>
                                       <div class="col-lg-3 col-md-3">
                                          <div class="form-group">
                                             <label>Qty.
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="text" class="form-control" name="proQty" placeholder="Ex: 4" data-parsley-required data-parsley-error-message="This felid is required.">
                                          </div>
                                       </div>
                                       <div class="col-lg-3 col-md-3">
                                          <div class="form-group">
                                             <label>Product Code
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="text" class="form-control" name="proCode" placeholder="Ex: uk Brand" data-parsley-required data-parsley-error-message="This felid is required.">
                                          </div>
                                       </div>
                                       <div class="col-lg-3 col-md-3">
                                          <div class="form-group">
                                             <label>Ideal For
                                             <span class="mindetory">*</span>
                                             </label>
                                            <select name="idealFor" id="" class="form-control">
                                               <option value="">--Please Select--</option>
                                                <?php
                                                   $this->db->select('ideal_for_id,ideal_for');
                                                   $this->db->from('ideal_for');
                                                   $query = $this->db->get();
                                                   $result = $query->result_array();
                                                   foreach ($result as $key => $idealFor) { ?>
                                                      <option value="<?php echo $idealFor["ideal_for_id"] ?>"><?php echo $idealFor["ideal_for"]; ?></option>
                                                   <?php } ?>
                                                
                                            </select>
                                          </div>
                                       </div>
                                       <div class="col-lg-3 col-md-3">
                                          <div class="form-group">
                                             <label>Appreal Category
                                             <span class="mindetory">*</span>
                                             </label>
                                            <select name="apprealFor" id="" class="form-control">
                                               <option value="">--Please Select--</option>
                                                <?php
                                                   $this->db->select('appreal_cat_id_pk,appreal_category');
                                                   $this->db->from('tbl_appreal_category');
                                                   $query = $this->db->get();
                                                   $result = $query->result_array();
                                                   foreach ($result as $key => $appreal) { ?>
                                                      <option value="<?php echo $appreal["appreal_cat_id_pk"] ?>"><?php echo $appreal["appreal_category"]; ?></option>
                                                   <?php } ?>
                                            </select>
                                          
                                          </div>
                                       </div>
                                       <div class="col-lg-12 col-md-12">
                                          <div class="form-group">
                                             <label for="description">Description</label>
                                             <textarea name="description" id="" cols="30" rows="3" class="form-control">
                                                
                                             </textarea>
                                               <small>Example: - 
                                                1. casual round neck full sleeve maroon solid cotton top. <br>
                                                2. We are provided branded stock lot ( export surplus products in  Wholesale for retailers & shop kippers   (Buying and Selling). all products           international  quality standard all products is uk,Europe, u.s. flag ship company original products in stock lots quality 100% checked
                                            </small>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                          <div class="col-lg-6 col-md-6">
                                          <div class="form-group">
                                             <label for="description">Image</label>
                                             <input type="file" name="proImage" class="form-control">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-3 col-md-3 ">
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
         </div>
      </div>
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
   /*Calculate price between Item price and price after discount*/
   function calculatPrice(){
      var item_price     =  $("#item_price").val();
      var discount_price    =  $("#discount_price").val();
      if(discount_price != ""){
       var less_price         =  item_price-discount_price;
       var decimal_value   =  less_price/item_price;
       var parcentage      =  100*decimal_value;
       var parcentageSymble   =  parcentage+'%';
       $("#percentage").text(parcentageSymble); 
       $("#percentage").css('visibility','visible');
    }else{
       $("#percentage").css('visibility','hidden');
    }
   }
   $(document).ready(function() {
     $("form[name=subcategoryForm]").parsley();
   });
   function getSubcategory(selectObject) {
     var value = selectObject.value;
     $.ajax({
        type:'POST',
        url:"<?php echo base_url(); ?>admin/Product/getSubcategory",
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