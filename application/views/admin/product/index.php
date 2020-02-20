<?php 
   $this->load->view('admin/layouts/header');
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
    <div class="col-lg-8">
        <h2>Product Information</h2>        
    </div>    
    <div class="col-lg-4">
   <form method='post' action="<?php echo base_url();?>admin/product/" >
            <div class="input-group">
                <input type="text" name="search" placeholder="Search" class="form-control" value='<?= $search ?>'>
                <span class="input-group-btn">
                    <button type='submit' name='submit' value='Submit' class="btn btn-primary"><i class="fa fa-search"></i></button> 
                </span>
            </div>
        </form>
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
         <div class="ibox-content">
            <div  class="table-responsive">
            <table class="table table-bordered">
               <thead>
                  <tr>
                    <th>Serial No</th>
				        <th>Product Name</th>
				        <th>Pack Size</th>
				        <th>Composition</th>
				        <th>Category</th>
				        <th>Sub Category</th>
				        <th>Indications</th>
				        <th>Dosage</th>
				        <th>Side Effects</th>
				        <th>Action</th>
                   </tr>
               </thead>
               <tbody>
               <?php 
               $sno = 1;
                  foreach($result as $key => $value): ?>
               <tr>
                  <td><?php echo $sno; ?></td>
                  <td><?php echo $value['productname']; ?></td>
                  <td><?php echo $value['packsize']; ?></td>
                  <td>
                     <?php //echo $value['blog_discription'];

                     // strip tags to avoid breaking any html
                  $string = strip_tags($value['composition']);
                  if (strlen($string) > 500) {
                     // truncate string
                     $stringCut = substr($string, 0, 500);
                     $endPoint = strrpos($stringCut, ' ');

                      //if the string doesn't contain any space then it will cut without word basis.
                     $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                     $url = base_url().'admin/news/show/'.$value['product_id_pk'];
                     $string .= "... <a href='$url'>Read More</a>";
                  }
                  echo $string;  
                  ?>

                  </td>
                  <td><?php echo $value['category']; ?></td>
                  <td><?php echo $value['subcategory_name']; ?></td>
                  <td><?php echo $value['indications']; ?></td>
                  <td><?php echo $value['dosage']; ?></td>
                  <td><?php echo $value['sideeffects']; ?></td>
                  <td>
                     <a href="<?php echo base_url().'admin/product/show/'.$value['product_id_pk'];?>" class="btn  btn-xs btn-info btn-block">Show</a>
                     <a href="<?php echo base_url().'admin/product/edit/'.$value['product_id_pk'];?>" class="btn btn-xs btn-success btn-block" target=_blank"">Edit</a>
                     <a href="<?php echo base_url().'admin/product/delete/',$value['product_id_pk'];?>" class="btn  btn-xs btn-danger btn-block">Delete</a>
                  </td>

               </tr>
               <?php 
                $sno++;
               endforeach;
               if(count($result) == 0){
                  echo "<tr>";
                  echo "<td colspan='3'>No record found.</td>";
                  echo "</tr>";
                }
               ?>
               </tbody>
               <tfoot>
               <tr>
                  <th>Serial No</th>
			        <th>Product Name</th>
			        <th>Pack Size</th>
			        <th>Composition</th>
			        <th>Category</th>
			        <th>Sub Category</th>
			        <th>Indications</th>
			        <th>Dosage</th>
			        <th>Side Effects</th>
			        <th>Action</th>
               </tr>
               </tfoot>
            </table>
         </div>
            <div class="pagination-wrapper text-center">
               <div class="pagination">
                 <?= $pagination; ?>
               </div>
            </div>
            </div>
      </div>
   </div>
</div>
<?php 
   $this->load->view('admin/layouts/footer');
?>
