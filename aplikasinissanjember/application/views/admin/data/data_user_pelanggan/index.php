<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <?php
                            echo anchor('Data/input_data_pelanggan/','Tambah','id="btnTambah" type="button" class="btn btn-primary btn-bordered waves-effect w-md waves-light" style="margin-bottom:5px;"');
                ?>
            <h2 class="m-t-0 header-title"><b>Data Pelanggan</b></h2>
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<div class="row">
    <div class="col-sm-12">
        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending" style="width: 50px;">No.
                    </th>
					<th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending" style="width: 50px;">ID User
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 250px;">Nama Pengguna
                    </th>
					<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 250px;">No. KTP
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 150px;">Alamat
                    </th>
					<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 150px;">No. HP
                    </th>
					
					<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 150px;">Username
                    </th>
					<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 150px;">Password
                    </th>
                    </th>
                    <th style="width: 30px;">Aksi
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                        $no=1;
                        foreach($list as $data){ ?>
                        <td><?php echo $no; ?></td>
						<td><?php echo $data->id_user ?></td>
                        <td><?php echo $data->nama_pengguna ?></td>
						<td><?php echo $data->no_ktp ?></td>
						<td><?php echo $data->alamat ?></td>
						<td><?php echo $data->no_hp ?></td>
						
						<td><?php echo $data->username ?></td>
						<td><?php echo $data->password ?></td>
                        <td>
                            <?php
                            echo anchor('Data/edit_data_pelanggan/'.$data->id_user,'Edit','id="btnTest" type="button" class="btn btn-warning btn-bordered waves-effect w-md waves-light" style="margin-bottom:5px;"');
                            echo anchor('Data/hapus_data_pelanggan/'.$data->id_user,'Hapus','id="btnTest" type="button" class="btn btn-danger btn-bordered waves-effect w-md waves-light"');
                            ?>
                        </td>
                    </tr>
                        <?php 
                        $no++;
                        }
                        ?>
            </tbody>
        </table>
    </div>
</div>
</div>
        </div>
    </div>
</div>