<?php
include 'config.php';
?>
<table class="table table-striped">
<tr>
	<th>Serial</th>
	<th>Company Name</th>
	<th>Price</th>
</tr>
<?php
$tid=isset($_GET['tid'])?$_GET['tid']:NULL;
 $result=$obj->point_table($tid);
 if (!empty($result)) {
$i=0;
foreach($result as $values_reels){
extract($values_reels);
$i++;
?>
<tr>
	<td><span class="label label-primary"><?php echo $i; ?></span></td>
	<td><?php echo isset($_company_name)?$_company_name:NULL; ?></td>
	<td><?php echo isset($price)?$price:NULL; ?></td>
</tr>
<?php } } ?>
</table>