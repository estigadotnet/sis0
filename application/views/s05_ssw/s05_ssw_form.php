  <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">NIS <?php echo form_error('NIS') ?></label>
            <input type="text" class="form-control" name="NIS" id="NIS" placeholder="NIS" value="<?php echo $NIS; ?>" readonly />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('Nama') ?></label>
            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
        </div>
	    <input type="hidden" name="idssw" value="<?php echo $idssw; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('s05_ssw') ?>" class="btn btn-default">Cancel</a>
	</form>
