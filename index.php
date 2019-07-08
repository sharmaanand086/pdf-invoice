<html>
<title></title>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

</head>
<body>
<div class="container">
  <h1>Arfeen Khan With GST</h1>
   	<form action = "preview.php"  enctype = "multipart/form-data" name = "form1" id ="form1" method = "POST">
        <div class="form-group">
		<label for="exampleInputEmail1">Email :</label>
		<input type="text" class="form-control" autocomplete = "off" placeholder="Enter Email Id" name="tag" id="tag" value="" >
             <label for="name">Name :</label>
		<input type="text"  class="form-control" autocomplete = "off" placeholder="" name="name" id="name" >
 <label>Phone:</label>
		<input type="text" class="form-control" autocomplete = "off" placeholder="" name="phone" id="phone" value="" >
		<label>Enter GST Number:</label>
		 <input type="text" id="gstnumber" value="" class="form-control" autocomplete = "off" placeholder="" name="gstnumber"  required>
               <input type="hidden" name="contactid" id="contactid" value="" >
  
<br><br>
                    <label>Products:</label><br>
                   <?php 
                    $conn = mysqli_connect('localhost', 'world_hello', 'Mumbai@123', 'stftitle');
                     
 	            $sql1 = "SELECT `id`, `pname`, `amount` FROM `products`";
            	    $results =$conn->query($sql1);
            	    
            	    foreach($results as $result1)
            	    {
                    ?>
                 <input type="radio" id="<?php echo $result1['pname']; ?>_<?php echo $result1['amount']; ?>" name="product" onClick="selectproduct(this.id)">   
                    <label class="lead" ><?php echo $result1['pname']; ?>  <span class="badge badge-success badge-pill"> <?php echo $result1['amount']; ?></span></label>  <br>

                   
                        
                  <?php  }  ?>
                  
                 <input type="hidden" id="product" value="" name="product" >
                   <label>PRICE: &nbsp; </label><input type="text" id="price" value="" name="price"><br>
                  <label>GST: &nbsp; &nbsp;</label> <input type="text" id="gst" value="" disabled="disabled">
		<button class="btn btn-primary" type ="submit" name ="submit">Submit</button></section>
        </div>
	</form>
 </div>
</body>
<script>

$('input[name=tag]').change(function()
 {
  //alert('sfaf');
  var tagname = document.getElementById('tag').value;
  //alert(tagname);
    $.ajax({  
        url : "actionget.php",
        data : {tagname: tagname},
        type : "POST",
        dataType: 'json',
        success : function(data) {
                  console.log(data);
                 // alert(data);                          
                  var name = $('#name').val(data.name);
                  //alert(name);
                  $('#phone').val(data.phone);  
                  $('#contactid').val(data.contactid);
                          
        },
        error : function() {
        }
    });


});

function selectproduct(nameprice){ 
  var p1 = nameprice.split("_");
  var ogpd = p1[0];
  var ofpr = p1[1];
  var gstcal = ofpr*18/100;
  
//alert(ogpd);
//alert(ofpr);
   document.getElementById('product').value= ogpd;
   document.getElementById('price').value = ofpr;
   document.getElementById('gst').value = gstcal;    
  
}

$(document).ready(function() {
$('#price').keyup(function(ev){
var totalgst = $('#price').val() * 18/100; 
var gst2= document.getElementById('gst');
gst2.value = totalgst;
});
});
</script>

</html>
