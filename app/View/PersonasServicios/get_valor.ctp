<style type="text/css">
#valor{
width: 200px;
}
</style>
<?php 	foreach ($subcategories as $value): ?> 
<strong>precio:</strong> <INPUT id="valor" type="text" value="<?php echo $value['valor']; ?>" name="data[PersonasServicio][valor]" >
<?php endforeach; ?>
