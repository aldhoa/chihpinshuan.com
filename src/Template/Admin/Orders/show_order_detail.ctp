<?php 
	if(!empty($data)){
		foreach ($data as $item) {
?>
<tr>
  <td><?php echo $item['pr']['name']; ?></td>
  <td><?php echo $item['price']; ?></td>
  <td><?php echo $item['quantity']; ?></td>
</tr>
<?php
		}
	}
?>