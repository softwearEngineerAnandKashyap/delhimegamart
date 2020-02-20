<?php 
	$this->load->view('header');
?>
<div class="">
  <h2>Product List</h2>
   <P>
      <a href="<?php echo base_url('add-product');?>"  class="btn btn-success">ADD PRODUCT</a>
  </P>
  <?php
$message = $this->session->flashdata('message');
  if(!empty($message)): ?>
  <div class="row justify-content-md-center">
    <div class="col-md-6 col-md-offset-3 text-center">
      <div class="alert <?php print_r($this->session->flashdata('alert-class')) ?> text-center">
        <?php print_r($message['message']); ?>
      </div>    
    </div>  
  </div>  
<?php endif; ?> 
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
    	  $count = 1;
    		foreach($data as $key => $value): 
    	?>
      <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $value['productname']; ?></td>
        <td><?php echo $value['packsize']; ?></td>
        <td><?php echo $value['composition']; ?></td>
        <td><?php echo $value['category']; ?></td>
        <td><?php echo $value['subcategory_name']; ?></td>
        <td><?php echo $value['indications']; ?></td>
        <td><?php echo $value['dosage']; ?></td>
        <td><?php echo $value['sideeffects']; ?></td>
        <td>
         <div class="btn-group" role="group" aria-label="Basic example">
           <a href="<?php echo base_url().'admin/edit/'.$value['product_id_pk'];?>" class="btn btn-info btn-xs">UPDATE</a>
           <a href="<?php echo base_url().'admin/productController/delete/'.$value['product_id_pk'];?>" class="btn btn-info btn-xs">DELETE</a>
         </div>
        </td>
      </tr>
   <?php
   	$count++;
   	endforeach; 
    ?>
  </table>
</div>
<?php 
	$this->load->view('footer');
?>