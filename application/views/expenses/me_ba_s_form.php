<?php
?>
<?php $attributes = array('name'=>'me_ba_s_form','id'=>'me_ba_s_form', )?>
<?=form_open('expenses/me_form',$attributes);?>
	<input type="hidden" id="allocated_expense_id" name="allocated_expense_id" value="<?=$expense["id"]?>" >
	<table style="margin-left:30px;">
		<tr>
			<td style="width:185px;">Holding Account</td>
			<td>
				<?php echo form_dropdown('holding_account_id',$holding_options,'Select','id="holding_account_id" onChange="" style="" class="left_bar_input"');?>
			</td>
		</tr>
	</table>
</form>