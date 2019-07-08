<?php 
 $name = $_POST['name'];
 $phone = $_POST['phone']; 
 $gstnumber = $_POST['gstnumber'];
 $email = $_POST['tag'];
 $productname = $_POST['product'];
var_dump($productname);
 $price = $_POST['price'];
 $SGST= $price*9/100;
 $CGST= $price*9/100;
  $totamt = $price + (int)$SGST+(int)$CGST;
 $time = date('i');
 $date = date("Ymd");
$date1 = date("Y-m-d");

?>

<html>
  <head>
<style>#items {
    clear: both;
    width: 100%;
    margin: 10px 0 0 0;
    border: 1px solid black;
}
.itemrow{
border-right: 1px solid black;
    border-bottom: 1px solid black;}
.itemrow1{
border-right: 1px solid black;
border-top: 1px solid black;
border-left: 1px solid black;
  }
  </style>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  </head>
  <body cz-shortcut-listen="true">
      <div class="container">
	<div id="page-wrap">
	<div style="text-align:center;padding: 18px 5px;">
	    <?php
	    if($productname == "Speak to fortune "){
	        
	        ?>
	        <img src="images/stf.png" style="width:20%;">
	        	<p style="width:100%;text-align:center;font-size:24px;border-bottom: 1px solid #000;height: 35px;">Speak To a Fortune-Invoice	</p>
	        <?php
	    }
	    if($productname == "Coach To a Fortune "){
	        ?>
	        <img src="images/CoachToaFortune.jpg" style="width:20%;">
	        	<p style="width:100%;text-align:center;font-size:24px;border-bottom: 1px solid #000;height: 35px;">Coach To a Fortune-Invoice	</p>
	        <?php
	    }
	    
	     if($productname == "Incredible You"){
	        ?>
	         <img src="images/Hello_2019_07_08_11_23_37.jpg  " style="width:20%;">
	        	<p style="width:100%;text-align:center;font-size:24px;border-bottom: 1px solid #000;height: 35px;">Incredible you-Invoice	</p>
	        <?php
	    }
	    ?>
		
	
	</div>
	<table id="mainTable" style="width: 800px;">
		<tbody>
		<tr>
			<td style="font-family: Tahoma, Arial, Verdana, sans-serif;font-size:
			12px;color: #000000;">
			<table style="width: 100%;">
				<tbody>
				<tr>
					<td nowrap="nowrap" style="font-family: Tahoma, Arial, Verdana, sans-serif;font-size: 12px;color: #000000;">
						<p style="height: 60px;width: 100%;">Arfeen Khan<br>
B-1,003 Chandivali Farm Road, Powai,<br>
Chandivali, Yadav Nagar, Mumbai,<br>
Maharashtra 400072<br>
India<br>
GST:27AAZCS3006J1ZW
						</p>
					</td>
					<td align="right" valign="top" style="font-family: Tahoma,Arial, Verdana, sans-serif;font-size: 12px;color: #000000;">
						<table cellpadding="5" cellspacing="0" id="infoTable" style="border: 2px solid #000000;">
						<tbody>
							<tr>
								<td class="info" style="font-size: 12px;color: #000000;text-align: center;border: 2px solid #000000;">Date</td>
								<td class="info" style="font-size: 12px;color: #000000;text-align:center;border: 2px solid #000000;">Invoice No. #</td>
							</tr>
							<tr>
								<td class="info" style="padding:3px;font-size: 12px;color: #000000;text-align: center;border: 2px solid #000000;">
									<p id="date" style="text-align: center; margin-top: 0px; margin-bottom: 0px; height: 31px;"><?php echo $date1 ?></p>
								</td>
								<td class="info" style="padding:3px;font-size: 12px;color: #000000;text-align:center;border: 2px solid #000000;">
									<p style="text-align:center;margin-top: 0px; margin-bottom: 0px; height: 31px;"><?php echo $date.''.$time ?></p>
								</td>
							</tr>
						</tbody>
						</table>
					</td>
				</tr>
                </tbody>
            </table>
            </td>
        </tr>
        <tr>
            <td class="spacer" style="font-family: Tahoma, Arial, Verdana,sans-serif;font-size: 12px;color: #000000;height: 15px;"></td>
        </tr>
        <tr>
            <td style="font-family: Tahoma, Arial, Verdana, sans-serif;font-size:12px;color: #000000;">
                <table cellpadding="0" cellspacing="0" style="width: 100%;">
                    <tbody>
                        <tr>
                          <td width="200" style="font-family: Tahoma, Arial, Verdana,sans-serif;font-size: 12px;color: #000000;">TO:</td>
						   
                        </tr>
                    </tbody>
                </table>
                <table style="width: 100%;">
                    <tbody>
                        <tr>
							<td width="50%" style="font-family: Tahoma, Arial, Verdana,sans-serif;font-size: 12px;color: #000000;">
								<p style="height: 60px;width: 100%;"><?php echo $name ?><br>
<?php echo $email ?><br>
<?php echo $phone ?><br>
 GSTIN-<?php echo$gstnumber?>
								</p>
							</td>
							 
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>                           
		</tbody>
	</table>
	<table id="items" style="border: 1px solid black;width: 100%;">
		<tbody><tr>
		    <th style="border: 1px solid;">Item</th>
		     <th style="border: 1px solid;">Description</th>
		    <th style="border: 1px solid;">HSN/SAC</th>
		    <th style="border: 1px solid;">Quantity</th>
		    
		    <th colspan="3" style="border: 1px solid;">Price</th>
		</tr>
		<tr class="item-row">
			<td class="item-name"><div class="delete-wpr"><p><?php echo $productname ?></p></div></td>
			<td class="item-name"><div class="delete-wpr"><p><?php echo $productname ?> Program By Arfeen Khan </p></div></td>
			<td class="description"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;999293</p></td>
			<td class="description"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1</p></td>
			
			<td colspan="3"><p class="price" style="text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.<?php echo $price ?></p></td>
		</tr>
		 
	
		<tr id="hiderow">
		    <td colspan="8" style="border-top: 1px solid;"></td>
		</tr>
		<tr>
			<td colspan="2" class="blank"> </td>
			<td colspan="2" class="blank"> </td>
			
		    <td colspan="2" class="total-line"  style="border: 1px solid;">Amount</td>
		    <td class="total-value" style="border: 1px solid;text-align:center;"><p id="paid" >Rs. <?php echo $price ?></p></td>
		</tr>
		<tr>
			<td colspan="2" class="blank"> </td>
			<td colspan="2" class="blank"> </td>
			
		    <td colspan="2" class="total-line"  style="border: 1px solid;"><p id="paid" style="width: 65px;height: 22px;" >SGST(9%)</p></td>
		    <td class="total-value"  style="border: 1px solid;text-align:center;"><p id="paid">Rs.<?php echo $SGST ?></p></td>
		</tr>
		<tr>
			<td colspan="2" class="blank"> </td>
			<td colspan="2" class="blank"> </td>
		
		    <td colspan="2" class="total-line"  style="border: 1px solid;"><p id="paid" style="width: 65px;height: 22px;">CGST(9%)</p></td>
		    <td class="total-value"  style="border: 1px solid;text-align:center;"><p id="paid">Rs.<?php echo $CGST ?></p></td>
		</tr>
		
		<tr>
			<td colspan="2" class="blank"> </td>
			<td colspan="2" class="blank"> </td>
			
		    <td colspan="2" class="total-line"  style="border: 1px solid;">Total Amount</td>
		    <td class="total-value"  style="border: 1px solid;text-align:center;"><p id="paid">Rs.<?php echo $totamt ?></p></td>
		</tr>
		<tr>
		    <td colspan="2" class="blank"> </td>
		    <td colspan="2" class="blank"> </td>
		   
		    <td colspan="2" class="total-line"  style="border: 1px solid;">Amount Paid</td>
			<td class="total-value"  style="border: 1px solid;text-align:center;"><p id="paid">Rs.<?php echo $totamt ?></p></td>
		</tr>
	</tbody></table>
		<div style="float:left;padding: 50px 5px 5px 5px;">
			<img src="images/Fevicon.jpg"><br>
Thanks,	<br>	
Smashx Strategies Pvt.Ltd.<br>		
<u>www.arfeenkhan.com</u><br>

		</div>
		<div style="clear:both;" <="" div="">
		<div style="font-weight:500;font-size:12px;text-align:center;padding: 10px 0 20px 0;border-top: 1px solid #000;">Note : Money is non-refundable.</div>
	</div>
</div>
<form action="sendpdf.php"  enctype="multipart/form-data"  id ="myForm" method="POST">
    <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>" >
    <input type="hidden" name="tag"  value="<?php echo $_POST['tag']; ?>" >
    <input type="hidden" name="phone"  value="<?php echo $_POST['phone'];  ?>" >
    <input type="hidden" name="gstnumber" value="<?php echo $_POST['gstnumber']; ?>" >
    <input type="hidden" name="product" value="<?php echo $_POST['product']; ?>" >
    <input type="hidden" name="price" value="<?php echo $_POST['price']; ?>" >
        <input class="btn btn-primary"  type ="submit" name ="submit" onclick="myFunction()" value="Final Submit">
</form>

</body>
<script>
function myFunction() {
  document.getElementById("myForm").submit();
}
</script>
</html>