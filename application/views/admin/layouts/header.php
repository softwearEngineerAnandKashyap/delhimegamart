
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <?php  
      include 'styles.php';
    ?>
</head>
<body>
   <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                  <li class="nav-header">
                     <div class="dropdown profile-element"> 
                        <span>
                           <img alt="image"  src="<?php echo base_url('/assets/admin_assets/img/logo.png');?>" width="100%"/>
                        </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                           <span class="clear"> 
                              <span class="block m-t-xs"> 
                                 <strong class="font-bold"> 
                                    <?php //echo $this->session->userdata['logged_in']['first_name'].' '.$this->session->userdata['logged_in']['last_name']; ?> 
                                 </strong>
                              </span>
                           </span>
                        </a>         
                     </div>
                  </li>
                    <li> <a href="<?php echo base_url('admin/dashboard');  ?>">
<!--                             <i class="fa fa-tachometer" aria-hidden="true"></i>
 -->                 <span>Dashboard</span>
                          </a>
                    </li>
                    <?php
                        foreach ($left_menu as $key => $main_menu) {
                    ?>        
                       <li class="">
                            <a href="<?php print_r(base_url('admin/'.$main_menu['url'])); ?>"><?php echo $main_menu["menu_icon"]; ?></i> <span class="nav-label"><?php echo $main_menu['menu_name']; ?></span><!-- <span class="fa arrow"></span> --></a>
                            <?php if(sizeof($main_menu['nested_menu']) > 0){ ?>
                                <ul class="nav nav-second-level" style="">
                                    <?php foreach ($main_menu['nested_menu'] as $key => $nested_menu) {   ?>
                                        <li>
                                             <a href="<?php print_r(base_url('admin/'.$nested_menu['url'])); ?>"> 
                                                <?php echo $nested_menu["menu_icon"]; ?></i> <?php echo $nested_menu['menu_name']; ?>
                                            </a>
                                        </li>
                                    <?php } ?>    
                                </ul>
                            <?php } ?>
                        </li>
                    <?php        
                        }
                    ?>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">Welcome to  <?php //echo $this->session->userdata['logged_in']['first_name'].' '.$this->session->userdata['logged_in']['last_name']; ?></span>
            </li>
            

            <li>
                <a href="<?php echo base_url().'admin/LoginController/logout'; ?>">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li>               
        </ul>

        </nav>
        </div>
    