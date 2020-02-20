<?php 
   $data['title'] = "Product Details";
   $this->load->view('admin/layouts/header',$data); 
   ?>
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Product Details</h2>
   </div>
   <div class="col-lg-2">
      <h2>
         <a href="<?php echo base_url();?>admin/product"><i class="fa fa-arrow-left" aria-hidden="true"></i>
         Back</a>
      </h2>
   </div>
</div>
<div class="wrapper wrapper-content">
   <div class="row animated fadeInRight">
      <div class="col-md-4">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5></h5>
            </div>
            <div>
               <div class="ibox-content">
                  <img src="" class="img-responsive img-center"> 
               </div>
               <div class="feed-activity-list ibox-content profile-content" style="padding-top: 1px;">
                  <h4><strong>
                     <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                     </strong>
                  </h4>
                  <h5>
                  </h5>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-8">
         <div class="ibox float-e-margins">
            <div class="ibox-content2">
               <div>
                  <div class="feed-activity-list">
                     <div class="feed-element">
                        <div class="media-body ">
                           <h4>Product Name</h4>
                        </div>
                     </div>
                  </div>
                  <div class="feed-activity-list">
                     <div class="feed-element">
                        <div class="media-body ">
                           <h4>Composition</h4>
                        </div>
                     </div>
                  </div>
                  <div class="feed-activity-list">
                     <div class="feed-element">
                        <div class="media-body ">
                           <h4>Indications</h4>
                        </div>
                     </div>
                  </div>
                  <div class="feed-activity-list">
                     <div class="feed-element">
                        <div class="media-body ">
                           <h4>Dosage</h4>
                        </div>
                     </div>
                  </div>
                  <div class="feed-activity-list">
                     <div class="feed-element">
                        <div class="media-body ">
                           <h4>Sideeffects</h4>
                        </div>
                     </div>
                  </div>
                  <div class="feed-activity-list">
                     <div class="feed-element">
                        <div class="media-body ">
                           <h4>Meta Url Slug</h4>
                        </div>
                     </div>
                  </div>
                  <div class="feed-activity-list">
                     <div class="feed-element">
                        <div class="media-body ">
                           <h4>Meta Title</h4>
                        </div>
                     </div>
                  </div>
                  <div class="feed-activity-list">
                     <div class="feed-element">
                        <div class="media-body ">
                           <h4>Description</h4>
                        </div>
                     </div>
                  </div>
                  <div class="feed-activity-list">
                     <div class="feed-element">
                        <div class="media-body ">
                           <h4>Meta Keyword</h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $this->load->view('admin/layouts/footer'); ?>