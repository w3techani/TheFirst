<!DOCTYPE html> 
<html> 
  
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title> 
      tt
    </title> 
	<style>
	<style>
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
   width: 37mm;
    height: 46mm;
  padding-bottom: 1.4mm;
  padding-top: 1.3mm;
padding-right : 1mm;
padding-left : 2mm;
  /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */

.row{
	padding-left : 2.5mm;
	padding-right : 2.5mm;
	padding-top : 0mm;
	padding-bottom : 0mm;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
	</style>
</head> 
   
<body style="padding-top:2mm"> 
    <div class=""> 

<div class="row">


<?php
require('inc/connect.php');
$chalan_id_ngrer = $_GET['id'];
$invoiceid_ngrer  = $_GET['id1'];
	
$jgg = 1;
 $sql = "select * from barcode where invoice_id='".$invoiceid_ngrer."' ";
$data = mysql_query($sql);
while($row= mysql_fetch_array($data)){
	
	$vccv = $row['id'];
	
	
	/*
   $str = "select * from barcode where invoice_id=".$vccv." and products.category=category.id  AND products.status='Y' order by products.id desc";

$rs = mysql_query($str);

$row = mysql_fetch_assoc($rs);


*/


	$id=$row['id'];
	$billno=$row['billno'];
	$pid=$row['pid'];
	$pname=$row['pname'];
	$qty=$row['qty'];
	$mrp=$row['mrp'];
	$unit_price=$row['unit_price'];
	$discount=$row['discount'];
	$disc_by_cust=$row['disc_by_cust'];
	$total=$row['total'];
	$user=$row['user'];
	$bill_time=$row['bill_time'];
	$hsn=$row['hsn'];
	$pcgst = $row['pcgst'];
	//$cost_price=$row['cost_price'];
	$psgst=$row['psgst'];
	$pcess=$row['pcess'];
	$cgst=$row['cgst'];
	$sgst=$row['sgst'];
	$igst=$row['igst'];
	$cess=$row['cess'];
	$totalbt=$row['totalbt'];
	$shop_id=$row['shop_id'];
	$pigst=$row['pigst'];
	$invoice1=$row['invoice1'];
	$inew=$row['inew'];
	$ishop=$row['ishop'];
	$inis=$row['inis'];
	$date1=$row['date1'];
	$type1=$row['type1'];
	$mrp=$row['mrp'];
	$barcode1=$row['barcode1'];
	$color=$row['color'];
	$siz=$row['siz'];
	$dno=$row['dno'];
	$mfname=$row['mfname'];
	$adds=$row['adds'];
	$qty1=$row['qty1'];
	$pprice=$row['pprice'];
	$tk=$row['tk'];
	$invoice_id=$row['invoice_id'];
	$create_date=$row['create_date'];
	$chalan_id=$row['chalan_id'];
	$mfg_date=$row['mfg_date'];
		$shop_id=$row['shop_id'];
	$splitTimeStamp = explode(" ",$created_on);
$date = $splitTimeStamp[0];
$time = $splitTimeStamp[1];
if($barcode_type=='Y'){
	$displybarcode=$catcode.$barcode;
}
else{
	$displybarcode=$barcode;
}

	
 for($j=1;$j<=$qty;$j++)
	{	


     $string = $barcode1;
                   $type='code128';
                    $orientation='horizontal';
                    $size='20';
                    $print='true';

 

//$txt = "Jane Doe\n";
//fwrite($myfile, $txt);
				//	echo 'hello';	
				
                        echo '<div class="column"><img class="barcode" style="align: justify;width:32mm;height:9mm;" alt="'.$string.'" src="barcode.php?text='.$string.'&codetype='.$type.'&orientation='.$orientation.'&size='.$size.'&print='.$print.'"/></center>
						<STRONG><p style="color:#000;font-size:10px;margin-top:-8px;">DESC  &nbsp;: '.$pname.'<br>COLOUR&nbsp;: '.$color.'<br>Size&nbsp;&nbsp;&nbsp; :   '.$siz.'</STRONG><br><span style="color:#000;font-size:8px">MFG DT :  '.$mfg_date.'<br>QTY&nbsp;&nbsp;:   1</span><br><STRONG>MRP  &nbsp;&nbsp;&nbsp;:   '.$mrp.'</STRONG><br><span style="color:#000;font-size:7px">(Inclusive Of All Taxes)</br>MFG.MKD By AREENA INC.</br>19 (B-13),Shree Odhavram Market, Bardan Gali,<br>
						Kherani Road, J.M. Road, Ghatkopar (W),<br>
MUMBAI - 400 086.C.C.NO:9821107475<br>
E-MAIL:areenainc@gmail.com</span></p>
	
	</div>';
	
	if($jgg % 5 == 0)
				{
echo '</div><div class="row">';					
				}	
					
	$jgg++;
	
                    } 					
					
				
					
	

	
	
	
	
	}
	
	
	
	
	
	
	
	
	
	
	?>
	
	 </div> 
</body> 
  
</html> 