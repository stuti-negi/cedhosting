<?php
session_start();
if((!isset($_SESSION['userid']))||($_SESSION['isAdmin']=="0")) {

  header('Location:../../logout.php');
}
// $actual_link = $_SERVER["PHP_SELF"];
?>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  
  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
        <span style="color: #e7663f;">CED</span> <span style="color: #585ca7;"><strong>HOSTING</strong></span> 
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
        </ul>
        <ul class="list-unstyled">
        <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Products</span>
          </h6>
          <li  data-toggle="collapse" 
          data-target="#products" class="collapsed active">
            <a href="#">Products <span class="fas">&#xf103;</span></a>
          </li>
          <ul class="navbar-nav sub-menu collapse" id="products">
            <li class="nav-item">
              <a class="nav-link" href="createcategory.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Create Category</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addproduct.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Add Product</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="viewproducts.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">View Products</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Create New Offers</span>
              </a>
            </li>
        </ul>
        <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Orders</span>
          </h6>
          <li  data-toggle="collapse" 
          data-target="#products1" class="collapsed active">
            <a href="#">Orders  <span class="fas">&#xf103;</span></a>
          </li>
          <ul class="navbar-nav sub-menu collapse" id="products1">
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Pending Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Completed Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/profile.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Cancelled Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Generate Invoice</span>
              </a>
            </li>
        </ul>
        <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Services</span>
          </h6>
          <li  data-toggle="collapse" 
          data-target="#products2" class="collapsed active">
            <a href="#">Services  <span class="fas">&#xf103;</span></a>
          </li>
          <ul class="navbar-nav sub-menu collapse" id="products2">
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Active Services</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Expired Services</span>
              </a>
            </li>
        </ul>
        <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Users</span>
          </h6>
          <li  data-toggle="collapse" 
          data-target="#products3" class="collapsed active">
            <a href="#">Users  <span class="fas">&#xf103;</span></a>
          </li>
          <ul class="navbar-nav sub-menu collapse" id="products3">
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">All User List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Create New User</span>
              </a>
            </li>
        </ul>
        <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Blog</span>
          </h6>
          <li  data-toggle="collapse" 
          data-target="#products4" class="collapsed active">
            <a href="#">Blogs  <span class="fas">&#xf103;</span></a>
          </li>
          <ul class="navbar-nav sub-menu collapse" id="products4">
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Add New Blog</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">View All Blogs</span>
              </a>
            </li>
        </ul>
        <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Accounts</span>
          </h6>
          <li  data-toggle="collapse" 
          data-target="#products5" class="collapsed active">
            <a href="#">Info  <span class="fas">&#xf103;</span></a>
          </li>
          <ul class="navbar-nav sub-menu collapse" id="products5">
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Update Company Info</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Change Security Ques</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Change Password</span>
              </a>
            </li>
        </ul>
        </ul>
        </div>
      </div>
    </div>
  </nav>