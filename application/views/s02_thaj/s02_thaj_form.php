        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">TahunAjaran <?php echo form_error('TahunAjaran') ?></label>
            <input type="text" class="form-control" name="TahunAjaran" id="TahunAjaran" placeholder="TahunAjaran" value="<?php echo $TahunAjaran; ?>" />
        </div>
	    <div class="form-group">
            <label for="float">SaldoAwal <?php echo form_error('SaldoAwal') ?></label>
            <input type="text" class="form-control" name="SaldoAwal" id="SaldoAwal" placeholder="SaldoAwal" value="<?php echo $SaldoAwal; ?>" />
        </div>
	    <input type="hidden" name="idthaj" value="<?php echo $idthaj; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('s02_thaj') ?>" class="btn btn-default">Cancel</a>
	</form>
