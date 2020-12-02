<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title>SHOPLIB.COM Mockup</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/fontawesome-all.js"></script>
</head>
<body>
     <!-- NAVBAR  -->
     <nav class="navbar navbar-expand-lg navbar-light bg-primary py-3">
        <div class="container">
                <a class="navbar-brand text-white" href="/">SHOPLIB.COM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="login.html" class="btn btn-warning mr-3">Login <span><i class="fas fa-sign-in-alt"></i></span> </a>
                    </li>
                    <li class="nav-item">
                        <a href="signup.html" class="btn btn-success">Signup <span><i class="fas fa-user-plus"></i></span></a>
                    </li>
                            
                </div> -->
        </div>
      </nav>
      <!-- NAVABAR END -->

      <!-- SELLER VIEW BEGINS HERE -->
      <section id="product-edit-section">
         <div class="container">

          <div class="row mt-2">
              <div class="col">
                <h4 class="text-center">Your Products</h4>
            </div>
        </div>
<!-- ================ Add Product form ==================== -->
                <form action="{{route('products.save')}}" method="post" id="upload_mutiple_images" enctype="multipart/form-data">
                    <div class="form-group">
                        {{csrf_field()}}
                            <div class="row my-2">
                                <div class="col-md-6">
                                       <div class="input-group control-group increment">
                                            <span class="input-group-btn">
                                                <span class="btn btn-info btn-file">
                                                    <input type="file" name="images[]" multiple>
                                                </span>
                                            </span>
                                        </div>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group row mt-4">
                                    <label for="title" class="col-sm-4 col-form-label">Product Name:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label for="description" class="col-sm-4 col-form-label">Description:</label>
                                    <div class="col-sm-8">
                                        <textarea name="product_description" id="" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label for="price" class="col-sm-4 col-form-label">Prices:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="product_price">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label for="seller_name" class="col-sm-4 col-form-label">Upload By:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="seller_name" value="{{Auth::user()->firstname}}">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label for="location" class="col-sm-4 col-form-label">Address:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label for="seller_contact" class="col-sm-4 col-form-label">Telephone No:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="seller_contact" placeholder="Enter Contact here" value="{{Auth::user()->telephone}}">
                                    </div>
                                </div>
                             </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product<span>
                        <i class="far fa-hand-point-right"></i>
                        </span>
                    </button>
                </form>
        </div>   

                    </div>
                </div>   
          
        </div>
      </section>
      <!-- SELLER VIEW ENDS HERE -->
<br >
     <!-- FOOTER -->
    <footer  class="bg-primary py-2">
       <p class="text-center py-2 text-white">LIBER-TECH &copy; 2019</p>
    </footer>

</body>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- script for toggle sidebar button -->
<script>
    // $(document).ready(function () {

    //     $('#sidebarCollapse').on('click', function () {
    //         $('#sidebar').toggleClass('active');
    //         $('#content').toggleClass('active');
    //      });

    // });
     var $imageupload = $('.imageupload');
    $imageupload.imageupload({
 
        maxWidth: 200,

        maxHeight: 200,

        // maxFileSizeKb: 3048

        });

</script>

<!--[if lt IE 9]--/>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</html>