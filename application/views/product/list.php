<div class="container">
<div class="card">
  <div class="card-header">
    List Product
  </div>
  <?php
  if($this->session->flashdata('success')){
    ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('success') ?></div>
   <?php
  }else{
    ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('error') ?></div>
    <?php
  }
   ?>  
  <div class="card-body">
  <a href="<?php echo base_url('product/create')?>" class="btn btn-primary">Add Product</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Category</th>
        <th scope="col">Brand</th>
        <th scope="col">Slug</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Status</th>
        <th scope="col">Manage</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($product  as $key => $pro){
      ?>
      <tr>
        <th scope="row"><?php echo $key ?></th>
        <td><?php echo $pro->title ?></td>
        <td><?php echo $pro->price ?>VND</td>        
        <td><?php echo $pro->quantity ?></td>
        <td><?php echo $pro->tendanhmuc ?></td>
        <td><?php echo $pro->tenthuonghieu ?></td>
        <td><?php echo $pro->slug ?></td>
        <td><?php echo $pro->description ?></td>
        <td>
          <img src="<?php echo base_url('uploads/product/' .$pro->image) ?>" width="150" height="150">
        </td>
        <td>
          <?php
          if($pro->status==1){
            echo 'Active';
          }else{
            echo'Inactive';
          }
          ?>
        </td>
        <td>
          <a onclick="return confirm('Are you sure?')" href="<?php echo base_url('product/delete/'.$pro->id)?>" class="btn btn-danger">Delete</a>
          <a class= "btn btn-warning" href="<?php echo base_url('product/edit/'.$pro->id)?>">Edit</a>
        </td>
      </tr>
      <?php
      }
      ?>
      
    </tbody>
  </table>
  </div>
</div>
</div>