
<?php

echo "<pre>";
    print_r($data);
echo "</pre>";

?>


<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xl flex-grow-1 container-p-y">

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Basic Layout</h5>
                      <small class="text-muted float-end">Edit User</small>
                    </div>
                    <div class="card-body">
                        
                      <form method="post" enctype="multipart/form-data" action="update" >
                      
                        <input type="hidden" name="id" value="<?php echo $data[0]->id ?> ">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="username">username</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $data[0]->username ?>">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="email">email</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $data[0]->email ?>">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="mobile">mobile</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $data[0]->mobile ?>">
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="image">image</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control" id="image" name="image" >
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <div class="col-sm-10">
                            <img src="../upload/<?php echo $data[0]->image ?>" alt="no image found" height="100px" width="200px">
                            <input type="hidden" class="form-control" id="image_old" name="image_old" value="<?php echo $data[0]->image ?>" >
                          <!-- <input type="file" class="form-control" id="image" name="image"> -->
                          </div>
                        </div>

                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="password">password</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="password" name="password" value="<?php echo $data[0]->password ?>">
                          </div>
                        </div>
                        <!-- <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="image">image</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control" id="image" name="image">
                          </div>
                        </div> -->
                       
                        <div class="row mb-3">
                       
                        <div class="row mb-3">
                     
                       
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" name="update_btn" class="btn btn-primary">update</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Basic with Icons -->
             
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
         

            <div class="content-backdrop fade"></div>
          </div>



