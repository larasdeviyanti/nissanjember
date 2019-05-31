<?php 
echo form_open('Data/proses_edit_data_daftarservice','class="form-horizontal" role="form"');
echo form_hidden('id', $this->uri->segment(3));

?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Edit Data Service</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1" >ID Data Service</label>
                            <div class="col-md-10">
                                <input type="text" name="id_daftar_service" class="form-control" id="exampleInputEmail1" value="<?php echo $list['id_daftar_service'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Tgl Service</label>
                            <div class="col-md-10">
                                <input type="text" name="tgl_service" class="form-control" id="exampleInputEmail1" value="<?php echo $list['tgl_service'] ?>" readonly>
                            </div>
                         </div>
                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">No Antri</label>
                            <div class="col-md-10">
                                <input type="text" name="no_antri" class="form-control" id="exampleInputEmail1" value="<?php echo $list['no_antri'] ?>" readonly>
                            </div>
                         </div>
                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">No Hp</label>
                            <div class="col-md-10">
                                <input type="text" name="nohp" class="form-control" id="exampleInputEmail1" value="<?php echo $list['nohp'] ?>" readonly>
                            </div>
                         </div>
                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">No Plat</label>
                            <div class="col-md-10">
                                <input type="text" name="noplat" class="form-control" id="exampleInputEmail1" value="<?php echo $list['noplat'] ?>" readonly>
                            </div>
                         </div>
                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Jenis mobil</label>
                            <div class="col-md-10">
                                <input type="text" name="jenismobil" class="form-control" id="exampleInputEmail1" value="<?php echo $list['jenismobil'] ?>" readonly>
                            </div>
                         </div>
                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Alamat</label>
                            <div class="col-md-10">
                                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" value="<?php echo $list['alamat'] ?>" readonly>
                            </div>
                         </div>
                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Status Service</label>
                            <div class="col-md-10">
                                <?php
                                if ($list['status_service']==0){
                                echo "<input type='text' name='status_service' class='form-control' id='exampleInputEmail1' value='Belum' readonly>";
                                }else{
                                echo "<input type='text' name='status_service' class='form-control' id='exampleInputEmail1' value='Selesai' readonly>";
                                }
                                ?>
                            </div>
                         </div>
                         <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Kerusakan Mobil</label>
                            <div class="col-md-10">
                                <input type="text" name="kerusakan_mobil" class="form-control" id="exampleInputEmail1" value="<?php echo $list['kerusakan_mobil'] ?>" readonly>
                            </div>
                         </div>
                         <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Jawaban Costumer</label>
                            <div class="col-md-10">
                                <input type="text" name="astimasi_kerusakan" class="form-control" id="exampleInputEmail1" value="<?php echo $list['astimasi_kerusakan'] ?>" readonly>
                            </div>
                         </div>
                        

                         <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Nama Mekanik</label>
                            <div class="col-md-10">
                                <!-- <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" value="<?php echo $list['alamat'] ?>" readonly> -->
                                <select name="nama_mekanik">
                                    <option value="">Pilih Mekanik</option>
                                <?php
                                if($list['id_user_mekanik']==0){
                                    foreach ($data_mekanik as $data) {  
                                       echo "<option value='".$data->id_user_mekanik."'>".$data->nama_mekanik."</option>";
                                    }
                                }else{
                                    foreach ($data_mekanik as $data) {  
                                       if($data->id_user_mekanik==$list['id_user_mekanik']){
                                       echo "<option value='".$data->id_user_mekanik."' selected>".$data->nama_mekanik."</option>"; 
                                    }else{
                                       echo "<option value='".$data->id_user_mekanik."'>".$data->nama_mekanik."</option>";
                                    }
                                    }
                                }
                                ?>
                    </select> 
                            </div>
                         </div>

                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Astimasi Kerusakan</label>
                            <div class="col-md-10">
                                <input type="text" name="kerusakan" class="form-control" id="exampleInputEmail1" value="<?php echo $list['kerusakan'] ?>">
                            </div>
                         </div>
                         <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Final Pengerjaan</label>
                            <div class="col-md-10">
                                <input type="text" name="final_kerusakan" class="form-control" id="exampleInputEmail1" value="<?php echo $list['final_kerusakan'] ?>">
                            </div>
                         </div>
                         <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Status Service</label>
                            <div class="col-md-10">
                                <!-- <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" value="<?php echo $list['alamat'] ?>" readonly> -->
                                <select name="status_service" required="">
                                    <option value="">Pilih Status Service</option>
                                <?php
                                if($list['status_service']==0){
                                    echo "<option value='0'selected>"."Belum"."</option>";
                                    echo "<option value='1'>"."Sudah"."</option>"; 
                                }else{
                                    echo "<option value='0'>"."Belum"."</option>";
                                    echo "<option value='1' selected>"."Sudah"."</option>"; 
                                }
                                ?>
                        </select> 
                                </div>
                             </div>
                        <!-- <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Astimasi Kerusakan</label>
                            <div class="col-md-10">
                                <input type="text" name="astimasi_kerusakan" class="form-control" id="exampleInputEmail1" value="<?php echo $list['astimasi_kerusakan'] ?>" >
                            </div>
                         </div> -->
                        <div class="form-group">
                        
                        
                         <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1"></label>
                            <div class="col-md-10">
                                
                                <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
                                <a href="<?php echo site_url('Data/data_daftarservice/');?>">
                                    <button style="margin-top: 20px;" type="button"  class="btn btn-warning waves-effect waves-light">Back</button>
                                </a>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
<?php echo form_close(); ?>