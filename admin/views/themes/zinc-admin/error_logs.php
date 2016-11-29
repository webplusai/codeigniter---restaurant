<?php echo get_header(); ?>
<div class="container-fluid container-fixed-lg">
<div class="panel panel-default">
<div class="panel-body">

<div class="row">
	<div class="col-md-12">
		<form role="form" id="list-form" accept-charset="utf-8" method="POST" action="<?php echo current_url(); ?>">
			<textarea name="logs" wrap="off" readonly="readonly" class="form-control" rows="20" style="width:100%">
				<?php echo $logs; ?>
			</textarea>
		</form>
	</div>
</div>

</div>
</div>
</div>
<?php echo get_footer(); ?>
