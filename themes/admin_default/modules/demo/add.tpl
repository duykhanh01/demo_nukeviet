<!-- BEGIN: main  -->

<div class="table-responsive">
<form action="" method="post">
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<tfoot>
				<tr>
					<td>&nbsp;</td>
					<td><input name="submit1" type="submit" value="{LANG.save}" class="btn btn-primary w100" /></td>
				</tr>
			</tfoot>
			<tbody>
            <!-- BEGIN: show  -->

				<tr>
					<td class="text-right"><strong>Name: </strong></td>
					<td><input class="form-control w500" name="name" type="text" value="{DATA.name}" maxlength="255" /></td>
				</tr>
				<tr>
					<td class="text-right"><strong>Birth day: </strong></td>
					<td><input class="form-control w500" name="birthday" type="text" value="{DATA.birthday}" maxlength="255" /></td>
				</tr>
                <tr>
					<td class="text-right"><strong>Address: </strong></td>
					<td><input class="form-control w500" name="address" type="text" value="{DATA.address}" maxlength="255" /></td>
				</tr>
            <!-- END: show -->

			</tbody>
	</table>
</div>
</form>
</div>
<!-- END: main -->
