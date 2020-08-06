  <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Idthaj <?php echo form_error('idthaj') ?></label>
            <input type="text" class="form-control" name="idthaj" id="idthaj" placeholder="Idthaj" value="<?php echo $idthaj; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Idsklh <?php echo form_error('idsklh') ?></label>
            <input type="text" class="form-control" name="idsklh" id="idsklh" placeholder="Idsklh" value="<?php echo $idsklh; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Idkls <?php echo form_error('idkls') ?></label>
            <input type="text" class="form-control" name="idkls" id="idkls" placeholder="Idkls" value="<?php echo $idkls; ?>" />
        </div>
	    <input type="hidden" name="iddkls" value="<?php echo $iddkls; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('d01_kls') ?>" class="btn btn-default">Cancel</a>
	</form>
