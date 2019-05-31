<?php 
echo form_open('Data/proses_input_data_daftarservice','class="form-horizontal" role="form"');
echo form_hidden('id', $this->uri->segment(3));

?>

<script>
    function get_data_noplat(){
        var nama_pelanggan = $("#nama_pelanggan").val();
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Data/ambil_data_noplat');?>",
            data:"nama_pelanggan="+nama_pelanggan,
            success: function(msg){
                //$("#div_daftarservice").html(msg);
                $("#noplat").html(msg);
                get_data_mobil();
            }
        });
    }

    function get_data_mobil(){
        var nama_pelanggan = $("#nama_pelanggan").val();
        var noplat = $("#noplat").val();
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Data/ambil_data_mobil');?>",
            data:"nama_pelanggan="+nama_pelanggan+"&noplat="+noplat,
            success: function(msg){
                //$("#div_daftarservice").html(msg);
                $("#jenismobil").html(msg);
            }
        });
    }

    function get_data_nohp(){
        var nama_pelanggan = $("#nama_pelanggan").val();
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Data/ambil_data_nohp');?>",
            data:"nama_pelanggan="+nama_pelanggan,
            success: function(msg){
                //$("#div_daftarservice").html(msg);
                //$("#nohp").html(msg);
                document.getElementById('nohp').value=msg;
                //get_data_mobil();
            }
        });
    }

    function get_data_email(){
        var nama_pelanggan = $("#nama_pelanggan").val();
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Data/ambil_data_email');?>",
            data:"nama_pelanggan="+nama_pelanggan,
            success: function(msg){
                //$("#div_daftarservice").html(msg);
                //$("#email").html(msg);
                document.getElementById('email').value=msg;
                //get_data_mobil();
            }
        });
    }

    function get_data_alamat(){
        var nama_pelanggan = $("#nama_pelanggan").val();
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Data/ambil_data_alamat');?>",
            data:"nama_pelanggan="+nama_pelanggan,
            success: function(msg){
                //$("#div_daftarservice").html(msg);
                //$("#alamat").html(msg);
                document.getElementById('alamat').value=msg;
                //et_data_mobil();
            }
        });
    }
</script>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Input Data Daftar Service</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
                         <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Nama Pelanggan</label>
                            <div class="col-md-10">
                                <select name="nama_pelanggan" id="nama_pelanggan" required="" onchange="get_data_noplat(); get_data_nohp(); get_data_email(); get_data_alamat();">
                                    <option value="">Pilih Pelanggan</option>
                                <?php
                                    foreach ($data_pelanggan as $data) {  
                                       echo "<option value='".$data->id_user."'>".$data->nama_pengguna."</option>";
                                    }
                                ?>
                                </select> 
                            </div>
                         </div>

                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">No Hp</label>
                            <div class="col-md-10">
                                <input type="text" name="nohp" class="form-control" id="nohp" value="" required="" readonly="">
                            </div>
                         </div>
                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">No Plat</label>
                            <div class="col-md-10">
                                <!-- <input type="text" name="noplat" class="form-control" id="exampleInputEmail1" value="" required=""> -->
                                <select name="noplat" id="noplat" required="" onchange="get_data_mobil();">
                                <option value="">Pilih</option>
                                <?php
                                    // foreach ($data_user as $data) {
                                    //     echo "<option value='$data->id_user'>$data->nama_user</option>";
                                    // }
                                ?>
                            </select>
                            </div>
                         </div>
                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Jenis mobil</label>
                            <div class="col-md-10">
                                <!--<input type="text" name="jenismobil" class="form-control" id="exampleInputEmail1" value="" required=""> -->
                                <select name="jenismobil" id="jenismobil" required="" onchange="">
                                <?php
                                    // foreach ($data_user as $data) {
                                       // echo "<option value='$data->id_user'>$data->nama_user</option>";
                                     // }
                                ?>
								</select>
                            </div>
                         </div>

                         <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Email</label>
                            <div class="col-md-10">
                                <input type="text" name="email" class="form-control" id="email" value="" required="" readonly="">
                            </div>
                         </div>

                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Alamat</label>
                            <div class="col-md-10">
                                <input type="text" name="alamat" class="form-control" id="alamat" value="" required="" readonly="">
                            </div>
                         </div>

                         <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Kerusakan Mobil</label>
                            <div class="col-md-10">
                                <input type="text" name="kerusakan_mobil" class="form-control" id="exampleInputEmail1" value="" required="">
                            </div>
                         </div>

                         <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Tgl Service</label>
                            <div class="col-md-10">
                                <input type="date" name="tgl_service" class="form-control" id="tgl_service" value="" required="">
                            </div>
                         </div>
                        

                        
                        
                        
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
            <div id='div_daftarservice'>
                            
                        </div>
        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>

<?php echo form_close(); ?>
