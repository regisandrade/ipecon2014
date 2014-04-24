<select name="ano" class="txtInscricaoMini" id="ano">
<?php
for($i = 2003; $i <= date('Y')+1; $i++){
?>
	<option value="<?=$i; ?>" <?php if($i == date('Y')){ echo 'selected'; }?>><?=$i; ?></option>
<?php
}
?>
</select>
