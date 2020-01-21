<?php include('inc/conn.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Green Eats - Get Your Foods</title>

 
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.3.1.js"></script>

	  <?php require('header.php'); ?>   
	  <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          
			<div class="container">
				 <div class="text-capitalize"><hr><h3 style=color:red>*Location Numbers</h3>
			  <h4>Hostel Canteen: 41</h4>
			  <h4>Nungu: 43</h4>
			  <h4>Natura: 44</h4>
			  <h4>Hela Bojung: 45</h4>
			  <h4>Hostel Canteen: 46</h4>	
				  <hr>
			  </div>
	<h1 class="page-header text-center">ORDER</h1>
	<form method="POST" action="admin/purchase.php">
		<table class="table table-striped table-bordered">
			<thead>
				<th class="text-center"><input type="checkbox" id="checkAll"></th>
				<th>Category</th>
				<th>Canteen(Location)</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
			</thead>
			<tbody>
				<?php 
					$sql="select * from product left join category on category.categoryid=product.categoryid order by product.categoryid asc, productname asc";
					$query=$conn->query($sql);
					$iterate=0;
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td class="text-center"><input type="checkbox" value="<?php echo $row['productid']; ?>||<?php echo $iterate; ?>" name="productid[]" style=""></td>
							<td><?php echo $row['catname']; ?></td>
	                        <td><?php echo $row['canteenid']; ?></td>
							<td><?php echo $row['productname']; ?></td>
							<td class="text-right">&#x20A8; <?php echo number_format($row['price'], 2); ?></td>
							<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
						</tr>
						<?php
						$iterate++;
					}
				?>
			</tbody>
		</table>
		
		<div class="row">
			<div class="col-md-3">
				<input type="name" name="customer" class="form-control" placeholder="Your Name" required>
			</div>
			<div class="col-md-2" style="margin-left:-20px;">
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Order</button>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#checkAll").click(function(){
	    	$('input:checkbox').not(this).prop('checked', this.checked);
		});
	});
</script>
        </div>
      </div>
    </div>
    <?php require('footer.php'); ?>   
	</body>
</html>
