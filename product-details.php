<!DOCTYPE html>
<html lang="en">
<head>
<title>TECHPLY</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include_once("includes/links.php"); ?>
</head>
<body>
<?php include_once("includes/header2.php"); ?>
<?php include_once("includes/navbar.php"); ?>
<section class="page-section-header page-brochures">
  <h3 data-aos="zoom-in"> PRODUCT DETAILS</h3>
</section>
<!-- product details section-->
<section class="section-pro-detls">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-6 col-12 mx-auto">
        <div class="row">
           <div class="col-lg-5 col-md-12 col-sm-6 col-12">
             <img src="images/product/mply.jpg" class="img-fluid">
           </div>
           <div class="col-lg-7 col-md-7 col-sm-6 col-12">
              <div class="pro-detls-head">
               <h3 class="gn-head">MARINE PLYWOOD</h3>
               <p class="gn-pgh">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temf incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostr exercitation ullamco laboris nisi ut aliquip ex ea.</p>
               <div class="rateing">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
               </div>
               <div class="row">
                <div class="col-lg-6 col-md-7 col-sm-6 col-12">
                  <div class="des-detl">
                  <h5 class="gn-pgh"><b>DESCRIPTION</b></h5>
                  <hr class="solid">
                     <table class="table">
                      <tr>
                      <td>Face</td>
                      <td>Gurgen</td>
                      </tr>
                      <tr>
                      <td>Core</td>
                      <td>Gurgen</td>
                      </tr>
                      <tr>
                      <td>Resin</td>
                      <td>P.F</td>
                      </tr>
                    </table> 
                  <hr class="solidd">
                  </div>
                </div> 
               </div>
               <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                 <div class="qunty">
                  <h5 class="gn-pgh"><b>PRICE</b></h5>
                <h2>$400.00</h2>
                 </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                 <div class="price">
                  <h5 class="gn-pgh"><b>QUANTITY</b></h5>
                   <form id='myform' method='POST' class='quantity' action='#'>
                   <input type='button' value='-' class='qtyminus minus qty-minus' field='quantity' />
                   <input type='text' name='quantity' value='0' class='qty qty-no' />
                   <input type='button' value='+' class='qtyplus plus qty-plus' field='quantity' />
                   </form>
                 </div>
                </div>
               </div>
                <a href="product-details.php" class="btn btn-product">BUY NOW</a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include_once("includes/footer.php"); ?>
<?php include_once("includes/jsscript.php");?>
</body>
</html>
