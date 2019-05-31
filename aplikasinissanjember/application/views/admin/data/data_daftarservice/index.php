<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
                        
                <h2 class="m-t-0 header-title"><b>Data Daftar Service</b></h2>
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<div class="row">
    <div class="col-sm-12">
        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending" style="width: 50px;">No.
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 250px;">Nama Pelanggan
                    </th>
					<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 250px;">Alamat
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 150px;">Tgl Daftar Service
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">No Antri
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">Status Service
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
                        <td><?php echo $data->nama_pengguna ?></td>
						<td><?php echo $data->alamat ?></td>
                        <td><?php echo $data->tgl_service ?></td>
                        <td><?php echo $data->no_antri ?></td>
                        <td><?php 
                            if($data->status_service==0){
                                echo "Belum";
                            }else{
                                echo "Sudah";
                            }
                        ?></td>
                        <td>
                            <?php
                            echo anchor('Data/edit_data_daftarservice/'.$data->id_daftar_service,'Edit','id="btnTest" type="button" class="btn btn-warning btn-bordered waves-effect w-md waves-light" style="margin-bottom:5px;"');
                            echo anchor('Data/hapus_data_daftarservice/'.$data->id_daftar_service,'Hapus','id="btnTest" type="button" class="btn btn-danger btn-bordered waves-effect w-md waves-light"');
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