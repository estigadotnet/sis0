  <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Kode <?php echo form_error('Kode') ?></label>
            <input type="text" class="form-control" name="Kode" id="Kode" placeholder="Kode" value="<?php echo $Kode; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('Nama') ?></label>
            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Db <?php echo form_error('Db') ?></label>
            <input type="text" class="form-control" name="Db" id="Db" placeholder="Db" value="<?php echo $Db; ?>" />
        </div>
	    <input type="hidden" name="idsklh" value="<?php echo $idsklh; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('s02_sklh') ?>" class="btn btn-default">Cancel</a>
	</form>
