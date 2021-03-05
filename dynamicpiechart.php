<?php 
include "connection.php";
?>
<table  class="table table-bordered table-striped table-responsive" style="width:100%">
<thead>
<tr>
<th style="width:40%">Pie chart</th>
<th style="width:60%">Bar Chart</th>
</tr>
</thead>
<tbody>

<!-------------- Pie chart Start------------------->

<?php
//$yid='2021';
//$cccot='';
$yid   = TRIM($_GET['yid']);
$cccot = TRIM($_GET['country']);

$shown12 = "select name,CountryID from w3_state where status ='Y' AND CountryID='".$cccot."'";
$rsn12 = mysql_query($shown12);
$arrn12= mysql_fetch_assoc($rsn12);
$Countryname =  $arrn12['name'];

if($Countryname != '')
{
$result = $db->query("SELECT distinct country_name FROM `documents`WHERE documents.status = 'Y' AND YEAR(documents.date_of_issue) = '".$yid."' AND documents.country_name in ('".$Countryname."')");
}
else
{
  $result = $db->query("SELECT distinct country_name FROM `documents`WHERE documents.status = 'Y' AND YEAR(documents.date_of_issue) = '".$yid."'");
}
?>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Country', 'Total'],
      <?php
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
			  
		
    		
    $shown1 = "select count( sr_no) as candid from documents where  en_number in ('ECR') AND YEAR(documents.date_of_issue) =  '".$yid."' AND country_name='".$row['country_name']."'";
    $rsn1 = mysql_query($shown1);
    $arrn1= mysql_fetch_assoc($rsn1);
    $ECR =  $arrn1['candid'];
  
    $shown2 = "select count(sr_no) as candid from documents where  en_number in ('ECNR') AND YEAR(documents.date_of_issue) =  '".$yid."' AND country_name='".$row['country_name']."'";
    $rsn2 = mysql_query($shown2);
    $arrn2= mysql_fetch_assoc($rsn2);
    $ECNR =  $arrn2['candid'];
    $PeopleCount = $ECR + $ECNR; 
			  
			  
			  
			  
			  
            echo "['".$row['country_name']." ".$PeopleCount."', ".$PeopleCount."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'Total Data Country Wise',
        width: '100%',
        is3D: true,
        height: 600,
		"legend": {"position":"bottom"},
		"chartArea": {"width": "90%", "height": "70%",left:5,right:5,bottom:20,top:20}
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>



<!-------------- Pie chart End------------------->

<!-------------- Bar chart Start------------------->
<?php

if($Countryname != '')
{
$result1 = $db->query("SELECT distinct country_name FROM `documents`WHERE documents.status = 'Y' AND YEAR(documents.date_of_issue) = '".$yid."' AND documents.country_name in ('".$Countryname."')");
}
else
{
  $result1 = $db->query("SELECT distinct country_name FROM `documents`WHERE documents.status = 'Y' AND YEAR(documents.date_of_issue) = '".$yid."'");
}
?>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Country', 'ECR', 'ECNR'],
      <?php
      if($result1->num_rows > 0){
          while($row1 = $result1->fetch_assoc()){
			  
		
    		
    $shown1 = "select count( sr_no) as candid from documents where  en_number in ('ECR') AND YEAR(documents.date_of_issue) =  '".$yid."' AND country_name='".$row1['country_name']."'";
    $rsn1 = mysql_query($shown1);
    $arrn1= mysql_fetch_assoc($rsn1);
    $ECR =  $arrn1['candid'];
  
    $shown2 = "select count(sr_no) as candid from documents where  en_number in ('ECNR') AND YEAR(documents.date_of_issue) =  '".$yid."' AND country_name='".$row1['country_name']."'";
    $rsn2 = mysql_query($shown2);
    $arrn2= mysql_fetch_assoc($rsn2);
    $ECNR =  $arrn2['candid'];
    $PeopleCount = $ECR + $ECNR; 
			  
			  
			  
			  
			  
            echo "['".$row1['country_name']." ".$PeopleCount."', ".$ECR.", ".$ECNR."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'Total Country Data  ECR, ECNR Wise',
        width: '100%',
        height: 600,
		"legend": {"position":"bottom"},
		"chartArea": {"width": "70%", "height": "70%",top:20}
    };
    
    var chart = new google.visualization.BarChart(document.getElementById('BarChart'));
    
    chart.draw(data, options);
}
</script>



<!-------------- Bar chart End------------------->



<tr>
<td style="width:40%"><div id="piechart" ></div></td>
<td style="width:60%"><div id="BarChart"></div></td>

</tr>

</tbody>
</table>
