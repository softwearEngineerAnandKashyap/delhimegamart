<?php 

$this->load->view('admin/layouts/header',$title);
?>
<style type="text/css">
   .pagination {
      display: inline-block;
   }
   .pagination a {
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color .3s;
      border: 1px solid #ddd;
      justify-content: center;
   }
   .pagination a:active{
      background-color: #192932;
      color:white;
   }
</style>
<div class="row  border-bottom white-bg dashboard-header">
 <div class="col-lg-6">
   <h2>Product List</h2>        
</div>    
<div class="col-lg-4">
   <form method="post" action="#">
      <div class="input-group">
       <input type="text" name="search" placeholder="Search" class="form-control" value="">
       <span class="input-group-btn">
        <button type="submit" name="submit" value="Submit" class="btn btn-primary"><i class="fa fa-search"></i></button> 
     </span>
  </div>
</form>
</div>
<div class="col-lg-2">
   <a href="http://localhost/admin.dermastore/product/add" class="btn  btn-md btn-success">Add Product</a>
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
<div class="row margin-top20">
   <div class="col-lg-12">
      <div class="ibox float-e-margins">
         <div class="ibox-content2">
            <div class="table-responsive">
               <table class="table table-bordered">
                  <thead>
                     <tr>
                      <th>Serial No</th>
                      <th>Image</th>
                      <th>Product Type</th>
                      <th>SKU</th>
                      <th>Price</th>
                      <th>Status</th>
                      <th>Action</th>
                   </tr>
                </thead>
                <tbody>
                  <tr>
                        <?php 
                        $count = 1;
                       if(count($result) > 0):
                           foreach ($result as $key => $value) { ?>
                              <td><?php echo $count; ?></td>
                              <td>Coming soon</td>
                              <td><?php echo $value["product_type"]; ?></td>
                              <td><?php echo $value["sku"]; ?></td>
                              <td><?php echo $value["discount_price"]; ?></td>
                              <td>
                                 <?php 
                                    if($value["status"] == 1): ?>
                                       <span class="label label-primary">Active</span>
                                    <?php else: ?>
                                       <span class="label label-danger">Inactive</span>
                                 <?php endif; ?>
                              </td>
                           <?php $count++; }  ?>
                           <th>
                              <a href="<?php echo base_url().'admin/ProductController/show/'.$value["product_id_pk"]; ?>">
                                 <button class="btn btn-success btn-xs" type="button">
                                    <i class="fa fa-eye"></i> 
                                    Show
                                 </button>
                              </a>
                              <button class="btn btn-info btn-xs" type="button"><i class="fa fa-paste"></i> Edit</button>
                              <button class="btn btn-danger btn-xs" type="button"><i class="fa fa-trash"></i> Delete</button>
                           </th>
                        <?php else: ?>
                           <td colspan="3">No record found.</td>
                        <?php endif; ?>
                  </tr>               
               </tbody>
               <tfoot>
                  <tr>
                     <th>Serial No</th>
                      <th>Image</th>
                      <th>Product Type</th>
                      <th>SKU</th>
                      <th>Price</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr></tfoot>
               </table>
            </div>
            <div class="pagination-wrapper text-center">
               <div class="pagination">
                             </div>
          </div>
       </div>
    </div>
 </div>
</div>
<?php $this->load->view('admin/layouts/footer'); ?>