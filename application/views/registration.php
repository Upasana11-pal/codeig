<?php
?>
<html>
<head>
</head>
<body>
<div><?php if($this->uri->segment(3)=="success"){ echo "Welcome To ".$this->uri->segment(4); }?> </div>
<div id="row" style="height:200px; width:300px; background-color:gray;">
<form action="<?php echo base_url();?>/index.php/welcome/savevalue" method="post">
<input type="text" placeholder="Name" name="name" >      NAME
</br>
</br>
<input type="text" placeholder="FName" name="fname" >   FATHER'S NAME
</br>
</br>
<input type="text" placeholder="Mobile" name="mobile">      MOBILE NO.
</br>
</br>


<input type="submit" placeholder="Submit">
</form>
</div>
<div id="row">
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>FName</th>
<th>Mobile</th>
<th>Date</th>
</tr>
<?php if($rty->num_rows()>0){
foreach($rty->result() as $row):
	?>
 <tr>
     <td><?php echo $row->id;?></td>                                     
    <td><?php echo $row->name; ?></td>
     <td><?php echo $row->fname; ?></td>
      <td><?php echo $row->mobile; ?></td>
       <td><?php echo $row->date; ?></td>
      </tr>
     <?php endforeach; } ?> 
</table>


</div>

</body>
</html>