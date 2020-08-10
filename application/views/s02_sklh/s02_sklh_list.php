        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('s02_sklh/create'),'Create', 'class="btn btn-primary"'); ?> <?php echo $this->db->database; ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('s02_sklh/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('s02_sklh'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
            		<th>Kode</th>
            		<th>Nama</th>
            		<th>Db</th>
            		<th>Action</th>
            </tr><?php
            foreach ($s02_sklh_data as $s02_sklh)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $s02_sklh->Kode ?></td>
			<td><?php echo $s02_sklh->Nama ?></td>
			<td><?php echo $s02_sklh->Db ?></td>
			<td style="text-align:left" width="200px">
				<?php
				echo anchor(site_url('s02_sklh/read/'.$s02_sklh->idsklh),'Read');
				echo ' | ';
				echo anchor(site_url('s02_sklh/update/'.$s02_sklh->idsklh),'Update');
				echo ' | ';
				echo anchor(site_url('s02_sklh/delete/'.$s02_sklh->idsklh),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
        if ($this->session->userdata('idsklh') != $s02_sklh->idsklh) {
        echo ' | ';
				echo anchor(site_url('s02_sklh/set_aktif/'.$s02_sklh->idsklh),'Aktifkan');
        }
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('s02_sklh/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('s02_sklh/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
