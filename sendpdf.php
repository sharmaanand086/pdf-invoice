<h1 style="text-align: center;text-transform: capitalize;">Thank you You will received email 
 </h1> 
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script> 
$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "http://magicconversion.com/invoice/withgst";
    }, 1000);
});

</script> 
  
<?php 
session_start();  
require_once('class.phpmailer.php'); 
   
$message = '';
function fetch_customer_data()
{  
 
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


if($productname == "Speak to fortune "){
	        
	       
	          $stf= '<img src="images/stf.png" style="width:20%;">
	        	<p style="width:100%;text-align:center;font-size:24px;border-bottom: 1px solid #000;height: 35px;">Speak To a Fortune-Invoice	</p>';
	        
	    }
if($productname == "Coach To a Fortune "){
	       
	       $stf='<img src="images/CoachToaFortune.jpg" style="width:20%;">
	        	<p style="width:100%;text-align:center;font-size:24px;border-bottom: 1px solid #000;height: 35px;">Coach To a Fortune-Invoice	</p>';
	    
	    }
	    if($productname == "Incredible You"){
	       
	       $stf='<img src="images/Hello_2019_07_08_11_23_37.jpg" style="width:20%;">
	        	<p style="width:100%;text-align:center;font-size:24px;border-bottom: 1px solid #000;height: 35px;">Incredible you-Invoice	</p>';
	    
	    }
	    
 $output = '<html>
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
  </head>
  <body cz-shortcut-listen="true">
	<div id="page-wrap">
	<div style="text-align:center;padding: 18px 5px;">
	'.$stf.'
	 
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
						<!--<h1><textarea style="margin: 1px;color: #000000;">Invoice</textarea></h1>-->
						<table cellpadding="5" cellspacing="0" id="infoTable" style="border: 2px solid #000000;">
						<tbody>
							<tr>
								<td class="info" style="font-size: 12px;color: #000000;text-align: center;border: 2px solid #000000;">Date</td>
								<td class="info" style="font-size: 12px;color: #000000;text-align:center;border: 2px solid #000000;">Invoice No. #</td>
							</tr>
							<tr>
								<td class="info" style="padding:3px;font-size: 12px;color: #000000;text-align: center;border: 2px solid #000000;">
									<p id="date" style="text-align: center; margin-top: 0px; margin-bottom: 0px; height: 31px;">'.$date1.'</p>
								</td>
								<td class="info" style="padding:3px;font-size: 12px;color: #000000;text-align:center;border: 2px solid #000000;">
									<p style="text-align:center;margin-top: 0px; margin-bottom: 0px; height: 31px;">'.$date.''.$time.'</p>
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
								<p style="height: 60px;width: 100%;">'.$name.'<br>
'.$email.'<br>
'.$phone.'<br>
 GSTIN-'.$gstnumber.'
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
			<td class="item-name"><div class="delete-wpr"><p>'.$productname.'</p></div></td>
				<td class="item-name"><div class="delete-wpr"><p> '.$productname.' Program By Arfeen Khan </p></div></td>
			<td class="description"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;999293</p></td>
			<td class="description"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1</p></td>
			
			<td colspan="3"><p class="price" style="text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.'.$price.'</p></td>
		</tr>
		 
	
		<tr id="hiderow">
		    <td colspan="8" style="border-top: 1px solid;"></td>
		</tr>
		<tr>
			<td colspan="2" class="blank"> </td>
			<td colspan="2" class="blank"> </td>
			
		    <td colspan="2" class="total-line"  style="border: 1px solid;">Amount</td>
		    <td class="total-value" style="border: 1px solid;text-align:center;"><p id="paid" >Rs.'.$price.'</p></td>
		</tr>
		<tr>
			<td colspan="2" class="blank"> </td>
			<td colspan="2" class="blank"> </td>
			
		    <td colspan="2" class="total-line"  style="border: 1px solid;"><p id="paid" style="width: 65px;height: 22px;" >SGST(9%)</p></td>
		    <td class="total-value"  style="border: 1px solid;text-align:center;"><p id="paid">Rs.'.$SGST.'</p></td>
		</tr>
		<tr>
			<td colspan="2" class="blank"> </td>
			<td colspan="2" class="blank"> </td>
		
		    <td colspan="2" class="total-line"  style="border: 1px solid;"><p id="paid" style="width: 65px;height: 22px;">CGST(9%)</p></td>
		    <td class="total-value"  style="border: 1px solid;text-align:center;"><p id="paid">Rs.'.$CGST.'</p></td>
		</tr>
		
		<tr>
			<td colspan="2" class="blank"> </td>
			<td colspan="2" class="blank"> </td>
			
		    <td colspan="2" class="total-line"  style="border: 1px solid;">Total Amount</td>
		    <td class="total-value"  style="border: 1px solid;text-align:center;"><p id="paid">Rs.'. $totamt.'</p></td>
		</tr>
		<tr>
		    <td colspan="2" class="blank"> </td>
		    <td colspan="2" class="blank"> </td>
		   
		    <td colspan="2" class="total-line"  style="border: 1px solid;">Amount Paid</td>
			<td class="total-value"  style="border: 1px solid;text-align:center;"><p id="paid">Rs.'. $totamt.'</p></td>
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
</div></body></html>';
  
 
 return $output;
}

  if(isset($_POST['submit']))
{
 include('pdf.php');
 $file_name = 'pdfs/'.md5(rand()) . '.pdf';
 $html_code = ' ';
 $html_code .= fetch_customer_data($connect);
 $pdf = new Pdf();
 $pdf->load_html($html_code);
 $pdf->render();
 $file = $pdf->output();
 $dir = "invoicepdf"; 
 file_put_contents($file_name , $file);
 move_uploaded_file($file_name, "$dir".$file);
 
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 //$contactid =$_POST['contactid'];
 $email = $_POST['tag'];
 $productname = $_POST['product'];
 $price = $_POST['price'];
 //$gst = $_POST['gst];
 $currentDate = date("d-m-Y");
  //var_dump($currentDate);
 // var_dump($currentDate);
//var_dump($name);
//var_dump($phone);
//var_dump($email);
 $gstmp = $price*18/100;
 $gst = $gstmp;
 //var_dump($gst);
 $mainprice = $price + (int)$gst;
 $price1= $price;
//var_dump($price1);		
	//$price = $_SESSION['total'];
	
	 $conn = mysqli_connect('localhost', 'world_hello', 'Mumbai@123', 'stftitle');
                     
 	            $main = "SELECT `id`, `pname`, `amount` FROM `products`";
            	    $results =$conn->query($main);
            	    
            	    foreach($results as $result1)
            	    {
                     $p= $result1['amount'];
                    // var_dump('$p');
                     }

       
	   // $price1= 7500;
	   // $gst=1350;
	    $totap=$mainprice ;
	
	
	$mail = new PHPMailer(true); // the true param means it will throw exceptions on     errors, which we need to catch
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host = 'mail.arfeenkhan.com';  // Specify main and backup server
	$mail->Port = '26';
	$mail->SMTPAuth = 'true';                               // Enable SMTP authentication
	$mail->Username = 'arfeenkhan@arfeenkhan.com';                            // SMTP username
	$mail->Password = 'dsfgsgsdgdsgsd';                           // SMTP password
	$mail->SMTPSecure = 'SSL/TLS';

	try 
	{
		$mail->SetFrom('Arfeenkhan@arfeenkhan.com', 'Arfeen Khan');
		//$mail->AddAddress('avisingh.singh2011@gmail.com', '');
		//$mail->AddAddress($arr['Contact.Email'], $arr['Contact.FirstName']);
		$mail->AddAddress('info@arfeenkhan.com', '');
		$mail->AddAddress($_POST['tag'],$name);
		//$mail->AddAddress('bhavesh@arfeenkhan.com', '');
		//$mail->AddAddress('onlinepayment@arfeenkhan.com', '');
                 $mail->AddAttachment($file_name);    
		 $mail->Subject = ''.$productname.' - Invoice 2019';
		 $mail->Body = 'Hi,<br>Please find the invoice attached with this email for the payment made by you towards '.$productname.''; 
                 $mail->IsHTML(true);
		 $mail->Send();
				// window.location.href = 'http://magicconversion.com/test/invoice_sample.php';
			} 
			catch (phpmailerException $e) 
			{
				echo $e->errorMessage(); //Pretty error messages from PHPMailer
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage(); //Boring error messages from anything else!
			}   


     
}
echo"<script type=\"text/javascript\">alert(\"Please wait ....\");</script>"; 
  
 
