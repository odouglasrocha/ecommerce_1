<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Invoice</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: #157ed2;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: #157ed2;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style>

</head>
<body>

  <table width="100%" style="background:#F7F7F7; padding:0 20px 0 20px;">
    <tr>
        <td valign="top">
          <!--  -->
          <h2 style="color: #157ed2; font-size: 26px;"><strong>EcomShop</strong></h2>
        </td>
        <td align="right">
            <pre class="font" >
               EasyShop Head Office
               Email:support@ecomshop.com <br>
               Mob: 1245454545 <br>
               Dehradun 07,India <br>
              
            </pre>
        </td>
    </tr>

  </table>


  <table width="100%" style="background:white; padding:2px;""></table>

  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
    <tr>
        <td>
          <p class="font" style="margin-left: 20px;">
          <strong>Name:</strong> <?php echo e($order->name); ?><br>
           <strong>Email:</strong> <?php echo e($order->email); ?> <br>
           <strong>Phone:</strong> <?php echo e($order->phone); ?> <br>
           <?php
            $div = $order->division->division_name;
            $dis = $order->district->district_name;
            $state = $order->state->state_name;
           ?>
            
           <strong>Address:</strong> <?php echo e($div); ?>,<?php echo e($dis); ?>.<?php echo e($state); ?> <br>
           <strong>Post Code:</strong> <?php echo e($order->post_code); ?>

         </p>
        </td>
        <td>
          <p class="font">
          <h3><span style="color: #157ed2;">Invoice:</span> #<?php echo e($order->invoice_no); ?></h3>
            Order Date: <?php echo e($order->order_date); ?> <br>
             Delivery Date: <?php echo e($order->delivered_date); ?> <br>
            Payment Type : <?php echo e($order->payment_method); ?> </span>
         </p>
        </td>
    </tr>
  </table>
  <br/>
<h3>Products</h3>


  <table width="100%">
    <thead style="background-color:#157ed2; color:#FFFFFF;">
   
    <tr class="font">
        <th>Image</th>
        <th>Product Name</th>
        <th>Size</th>
        <th>Color</th>
        <th>Code</th>
        <th>Quantity</th>
        <th>Unit Price </th>
        <th>Total </th>
      </tr>
    </thead>
    <tbody>

    <?php $__currentLoopData = $orderItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
      <tr class="font">
        <td align="center">
           <img src="<?php echo e(public_path($item->product->product_thumbnil)); ?>" height="50px;" width="50px;" alt="">
        </td>
        <td align="center"> <?php echo e($item->product->product_name_en); ?></td>
        <td align="center">
            <?php if($item->size == NULL): ?>
             ----
             <?php else: ?>
              <?php echo e($item->size); ?>

            <?php endif; ?>
        </td>
        <td align="center"><?php echo e($item->color); ?></td>
        <td align="center"><?php echo e($item->product->product_code); ?></td>
        <td align="center"><?php echo e($item->qty); ?></td>
        <td align="center"> <?php echo e($item->price); ?></td>
        <td align="center"><del>&#x20b9;</del> <?php echo e($item->price * $item->qty); ?> </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </tbody>   
  </table>
  <br>
  <table width="100%" style=" padding:0 10px 0 10px;">
    <tr>
        <td align="right" >
            <h2><span style="color:#157ed2;">Subtotal:</span><del> &#x20b9;</del> <?php echo e($order->amount); ?></h2>
            <h2><span style="color:#157ed2;">Total:</span><del> &#x20b9;</del> <?php echo e($order->amount); ?></h2>
            
        </td>
    </tr>
  </table>
  <div class="thanks mt-3">
    <p>Thanks For Buying Products..!!</p>
  </div>
  <div class="authority float-right mt-5">
      <p>-----------------------------------</p>
      <h5>Authority Signature:</h5>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/frontend/user/order/order_invoice.blade.php ENDPATH**/ ?>