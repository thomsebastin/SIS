<?php
session_start();

$sub1_int=$_POST["si1"];
$sub1_ext=$_POST["se1"];

$sub1_tot=$sub1_int+$sub1_ext;

$sub1_res="FAIL";

if(($sub1_ext>=35)&&($sub1_tot>=50))
{
	$sub1_res="PASS";

}

$sub2_int=$_POST["si2"];
$sub2_ext=$_POST["se2"];

$sub2_tot=$sub2_int+$sub2_ext;

$sub2_res="FAIL";

if(($sub2_ext>=35)&&($sub2_tot>=50))
{
	$sub2_res="PASS";

}

$sub3_int=$_POST["si3"];
$sub3_ext=$_POST["se3"];

$sub3_tot=$sub3_int+$sub3_ext;

$sub3_res="FAIL";

if(($sub3_ext>=35)&&($sub3_tot>=50))
{
	$sub3_res="PASS";

}

$sub4_int=$_POST["si4"];
$sub4_ext=$_POST["se4"];

$sub4_tot=$sub4_int+$sub4_ext;


$sub4_res="FAIL";

if(($sub4_ext>=35)&&($sub4_tot>=50))
{
	$sub4_res="PASS";

}

$sub5_int=$_POST["si5"];
$sub5_ext=$_POST["se5"];

$sub5_tot=$sub5_int+$sub5_ext;

$sub5_res="FAIL";

if(($sub5_ext>=35)&&($sub5_tot>=50))
{
	$sub5_res="PASS";

}


$sub6_int=$_POST["si6"];
$sub6_ext=$_POST["se6"];

$sub6_tot=$sub6_int+$sub6_ext;

$sub6_res="FAIL";

if(($sub6_ext>=35)&&($sub6_tot>=50))
{
	$sub6_res="PASS";

}

$sub7_int=$_POST["si7"];
$sub7_ext=$_POST["se7"];

$sub7_tot=$sub7_int+$sub7_ext;

if(($sub7_ext>=20)&&($sub7_tot>=30))
{
	$sub7_res="PASS";

}

$sub8_int=$_POST["si8"];
$sub8_ext=$_POST["se8"];

$sub8_tot=$sub8_int+$sub8_ext;

$sub8_res="FAIL";

if(($sub8_ext>=20)&&($sub8_tot>=30))
{
	$sub8_res="PASS";

}

$total=$sub1_tot+$sub2_tot+$sub3_tot+$sub4_tot+$sub5_tot+$sub6_tot+$sub7_tot+$sub8_tot;

$res="FAIL";
if(($sub1_res=="PASS")&&($sub2_res=="PASS")&&($sub3_res=="PASS")&&($sub4_res=="PASS")&&($sub5_res=="PASS")&&($sub6_res=="PASS")&&($sub7_res=="PASS")&&($sub8_res=="PASS"))
{
	if($total>=630)
$res="FCD";
elseif($total>=540 && $total<630)
$res="FC";
elseif($total<540)
$res="SC";
else
$res="PASS";
}

$college=$_SESSION['college1'];
$name=$_SESSION['name1'];
$usn=$_SESSION['usn1'];
$sem=$_SESSION['sem1'];

	mysql_connect('localhost', 'root', '') or die('Error connecting to mysql');
mysql_select_db("student");
	//mysql_connect('localhost', 'root', '') or die('Error connecting to mysql');
//$con=mysql_select_db("snet");
//echo $con;


$qry=mysql_query("insert into 3cs values('$college','$name','$usn',$sub1_tot,$sub2_tot,$sub3_tot,$sub4_tot,$sub5_tot,$sub6_tot,$sub7_tot,$sub8_tot,$total,'$res')");	
	
	
	if($qry)
	
	{
	
	echo "Record successfully added to the database";
	
	?>
	
	<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body  bgcolor="#FFCCCC">

<table width="576" border="0" align="center">
  <tr>
    <td width="215" height="36"><strong>
      <label><font size="4"> College Name</font></label>
    </strong></td>
    <td width="351">
      <label>        </label>
		 <input type="hidden" name="college" value='$college'/>
		 <?php echo $college
		?> </td>
  </tr>
  <tr>
    <td height="42"><font size="4"> Student Name</font></td>
    <td>
      <label>
	  
	  <input type="hidden" name="name" value='$name'/>
 <?php echo $name
		?>        </label>    </td>
  </tr>
  <tr>
    <td height="43"><font size="4"> USN </font></td>
    <td>
      <label>
        <input type="hidden" name="usn" value='$sem'/>
 <?php echo $usn
		?>      </label>	  </td>
  </tr>
  <tr>
    <td height="48"><font size="4"> Semester</font></td>
    <td>
	<input type="hidden" name="sem" value='$examtype'/>
	
	<?php echo $sem
		?></td>
  </tr>
</table>
<table width="588" border = "5" align="center">

<br>
<tr>
<th colspan="6">3rd Sem</th>
</tr>

<tr>
  
  <th width="88">Subject Code</th>
  <th width="200">Subject Name</th>
  <th width="67">Internal Marks</th>
  <th width="107">External Marks</th>
  <th width="85">Total Marks</th>
  <th width="68">Result</th>
  </tr>
<tr>
 <th>10MAT31</th>
 <th>Engineering Mathematics - III</th>
 <td>
  <input type="hidden" name="usn" value='sub1_int'/>
 <?php echo $sub1_int
		?> 
 <td>
  <input type="hidden" name="usn" value='sub1_ext'/>
 <?php echo $sub1_ext
		?> 
 <td>
  <input type="hidden" name="usn" value='$sub1_tot'/>
 <?php echo $sub1_tot
		?> </td>

<td>   <input type="hidden" name="usn" value='$sub1_res'/>
 <?php echo $sub1_res
		?>   &nbsp;</td>
</tr>

<!--2nd subject-->
<tr>
 <th>10CS32</th>
 <th>Electronic Circuits</th>


 <td>
 <input type="hidden" name="usn" value='sub2_int'/>
 <?php echo $sub2_int
		?> 
 <td>
 <input type="hidden" name="usn" value='sub2_ext'/>
 <?php echo $sub2_ext
		?> 
 <td>
 <input type="hidden" name="usn" value='sub2_tot'/>
 <?php echo $sub2_tot
		?> 
	</td>

<td>   <input type="hidden" name="usn" value='$sub2_res'/>
 <?php echo $sub2_res
		?>   &nbsp;</td>
<!-- 3rd subject-->
<tr>
 <th>10CS33</th>
 <th>Logic Design</th>
 <
 <td>
 <input type="hidden" name="usn" value='sub3_int'/>
 <?php echo $sub3_int
		?> 
 <td>
 <input type="hidden" name="usn" value='sub3_ext'/>
 <?php echo $sub3_ext
		?> 
 <td>
 <input type="hidden" name="usn" value='sub3_tot'/>
 <?php echo $sub3_tot
		?> </td>

<td>   <input type="hidden" name="usn" value='$sub3_res'/>
 <?php echo $sub3_res
		?>   &nbsp;</td>
</tr>

<!--4th subject-->
<tr>
 <th>10CS34</th>
 <th>Discrete Mathematical Structures</th>

  <td>
 <input type="hidden" name="usn" value='sub4_int'/>
 <?php echo $sub4_int
		?> 
 <td>
 <input type="hidden" name="usn" value='sub4_ext'/>
 <?php echo $sub4_ext
		?> 
 <td>
<input type="hidden" name="usn" value='sub4_tot'/>
 <?php echo $sub4_tot
		?> 
	</td>

<td>   <input type="hidden" name="usn" value='$sub4_res'/>
 <?php echo $sub4_res
		?>   &nbsp;</td>
</tr>

<!--5th subject-->
<tr>
 <th>10CS35</th>
 <th>Data Structures with C</th>
 
 <td>
<input type="hidden" name="usn" value='sub5_int'/>
 <?php echo $sub5_int
		?>  <td>
<input type="hidden" name="usn" value='sub5_ext'/>
 <?php echo $sub5_ext
		?> 
 <td>
<input type="hidden" name="usn" value='sub5_tot'/>
 <?php echo $sub5_tot
		?> </td>

<td>   <input type="hidden" name="usn" value='$sub5_res'/>
 <?php echo $sub5_res
		?>   &nbsp;</td>
</tr>


<!--6th subject-->
<tr>
 <th>10CS36</th>
 <th>Object Oriented Programming with C++</th>
 
 <td>
<input type="hidden" name="usn" value='sub6_int'/>
 <?php echo $sub6_int
		?> 
 <td>
<input type="hidden" name="usn" value='sub6_ext'/>
 <?php echo $sub6_ext
		?> 
 <td>
<input type="hidden" name="usn" value='sub6_tot'/>
 <?php echo $sub6_tot
		?> </td>

<td>   <input type="hidden" name="usn" value='$sub6_res'/>
 <?php echo $sub6_res
		?>   &nbsp;</td>
</tr>

<!--7th subject-->
<tr>
 <th>10CSL37</th>
 <th>Data Structures with C/C++ Laboratory</th>

  <td>
<input type="hidden" name="usn" value='sub7_int'/>
 <?php echo $sub7_int
		?> 
 <td>
<input type="hidden" name="usn" value='sub7_ext'/>
 <?php echo $sub7_ext
		?> 
 <td>
<input type="hidden" name="usn" value='sub7_tot'/>
 <?php echo $sub7_tot
		?> 
</td>

<td>   <input type="hidden" name="usn" value='$sub7_res'/>
 <?php echo $sub7_res
		?>   &nbsp;</td>
</tr>

<!--8th subject-->
<tr>
 <th>10CSL38</th>
 <th>Electronic Circuits & Logic Design Laboratory</th>

  <td>
<input type="hidden" name="usn" value='sub8_int'/>
 <?php echo $sub8_int
		?> 
 <td>
<input type="hidden" name="usn" value='sub8_ext'/>
 <?php echo $sub8_ext
		?> 
 <td>
<input type="hidden" name="usn" value='sub8_tot'/>
 <?php echo $sub8_tot
		?> 
		
	</td>

<td>   <input type="hidden" name="usn" value='$sub8_res'/>
 <?php echo $sub8_res
		?>   &nbsp;</td>
</tr>

<tr>
 <th colspan="4">TOTAL</th>

  
  <td>
<input type="hidden" name="usn" value='$total'/>
 <?php echo $total
		?> 
		
	</td>

<td>   <input type="hidden" name="usn" value='$res'/>
 <?php echo $res
		?>   &nbsp;</td>
</tr>
</table>

</body>
</html>
<?php
	
	}
	else
	
	echo "Record already Found!!!";

	
?>

	<p> <a href="addmarks.html">Back To Home</a>   &nbsp;</p>
