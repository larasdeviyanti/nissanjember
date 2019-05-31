<?php 
echo form_open('Data/proses_input_data_pelanggan','class="form-horizontal" role="form"');
// echo form_hidden('id', $this->uri->segment(3));

?>
<!--tambahan-->
<script>
    function get_data_type(){
        //scrip ini mengarah ke inputan desa sesuai id=desa / #desa setelah dipanggil melalui onchenge
        var nama_mobil = $("#nama_mobil").val();
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Data/ambil_data_type');?>",
            data:"nama_mobil="+nama_mobil,
            success: function(msg){
                //$("#div_daftarservice").html(msg);
                $("#type").html(msg);
                ambil_data_type();
            }
        });
    }
</script>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Input Data Pelanggan</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">        
                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1" >Nama Pelanggan</label>
                            <div class="col-md-10">
                                <input type="text" name="nama_pelanggan" class="form-control" id="exampleInputEmail1" value="" required="">
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">No KTP</label>
                            <div class="col-md-10">
                                <input type="text" name="no_ktp" class="form-control" id="exampleInputEmail1" value="" required="">
                            </div>
                         </div>

                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Tempat/Tanggal Lahir</label>
                            <div class="col-md-10">
                                <input type="text" name="tmpt_tgl" class="form-control" id="exampleInputEmail1" value="" required="">
                            </div>
                         </div>

                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Alamat</label>
                            <div class="col-md-10">
                                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" value="" required="">
                            </div>
                        </div>
						
                         <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">No hp</label>
                            <div class="col-md-10">
                                <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" value="" required="">
                            </div>
                         </div>
                         
                         <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Email</label>
                            <div class="col-md-10">
                                <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="" required="">
                            </div>
                         </div>

                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Username</label>
                            <div class="col-md-10">
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1" value="" required="">
                            </div>
                         </div>

                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Password</label>
                            <div class="col-md-10">
                                <input type="text" name="password" class="form-control" id="exampleInputEmail1" value="" required="">
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1"></label>
                        <div class="col-md-10">
                             <tr>
                            <td width="190px">
                                <input name="btn-tambah-form" id="btn-tambah-form" type="button" value="Tambah Mobil" class="btn btn-success">
                            </td>
                            <td>
                                <input name="btn-reset-form" id="btn-reset-form" type="button" value="Hapus Mobil" class="btn btn-danger">
                            </td>
                            </tr>
                        </div>
                        <tr>
                            <td>
                                <br>
                            </td>
                        </tr>
                        </div>
                       
						<div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">No Plat </label>
                            <div class="col-md-10">
                                <input type="text" name="no_plat" class="form-control" id="exampleInputEmail1" value="" required="">
                            </div>
                         </div>
						<div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">No BPKB Mobil </label>
                            <div class="col-md-10">
                                <input type="text" name="no_bpkb" class="form-control" id="exampleInputEmail1" value="" required="">
                            </div>
                         </div>
						
						<div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Jenis Mobil</label>
                            <div class="col-md-10">
							<select type="text" name="nama_mobil" class="form-control" id="nama_mobil" value="" required="" onchange="get_data_type();">
									<option value="">-Pilih-</option>
										<?php  $jenis=$this->db->get('tb_jenis_mobil');
											foreach ($jenis->result() as $d){?>
												<option value="<?php echo $d->id_jenis_mobil;?>"><?php echo $d->nama_mobil;?></option>
                                        <?php }?>
								</select>	                   
						</div>
						</div>
						
						 <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Type Mobil </label>
                            <div class="col-md-10">
								<select name="type" id="type" class="form-control">
									<option value="">-Pilih-</option>
										
								</select>                            
								</div>
                         </div>
						 <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">No Mesin Mobil </label>
                            <div class="col-md-10">
                                <input type="text" name="no_mesin" class="form-control" id="exampleInputEmail1" value="" required="">
                            </div>
                         </div>
						 <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">No Rangka Mobil </label>
                            <div class="col-md-10">
                                <input type="text" name="no_rangka" class="form-control" id="exampleInputEmail1" value="" required="">
                            </div>
                         </div>

                        <div id="insert-form"></div>
                        <input type="hidden" id="jumlah_mobil" name="jumlah_mobil" value="1">
                        
                        
                         <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1"></label>
                            <div class="col-md-10">
                                
                                <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
                                <a href="<?php echo site_url('Data/data_user_pelanggan/');?>">
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

            <script>  
            $(document).ready(function(){ // Ketika halaman sudah diload dan siap    
            $("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik      
            var jumlah = parseInt($("#jumlah_mobil").val()); // Ambil jumlah data form pada textbox jumlah-form      
            var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya            
            // Kita akan menambahkan form dengan menggunakan append      
            // pada sebuah tag div yg kita beri id insert-form      
            $("#insert-form").append(
                "<table>" +
                    "<div id='formgrup' class='form-group'>"+
                        "<label class='col-md-2 control-label' for='exampleInputEmail1'></label>"+
                        "<div class='col-md-10'>"+
                        "<tr>"+
                        "<td width='200px'><b><center>No Plat</center></b></td>"+
                        "<td>: &nbsp</td>"+
                        "<td><input type='text' name='no_plat[]' maxlength='30' required=''></td>"+
                        "<td width='200px'><b><center>No BPKB Mobil</center></b></td>"+
                        "<td>: &nbsp</td>"+
                        "<td><input type='text' name='no_bpkb[]' maxlength='14' required=''></td>"+
                        "</tr>"+
                        "</div>"+
                    "</div>"+
                "</table>" +

                "<table>" +
                    "<div id='formgrup' class='form-group'>"+
                        "<label class='col-md-2 control-label' for='exampleInputEmail1'></label>"+
                        "<div class='col-md-10'>"+
                        "<tr>"+
                        "<td width='200px'><b><center>Jenis Mobil</center></b></td>"+
                        "<td>: &nbsp</td>"+
                        "<td><input type='text' name='jenis_mobil[]' maxlength='30' required=''></td>"+
                        "<td width='200px'><b><center>No Mesin Mobil</center></b></td>"+
                        "<td>: &nbsp</td>"+
                        "<td><input type='text' name='no_mesin[]' maxlength='14' required=''></td>"+
                        "</tr>"+
                        "</div>"+
                    "</div>"+
                "</table>" +

                "<table>" +
                    "<div id='formgrup' class='form-group'>"+
                        "<label class='col-md-2 control-label' for='exampleInputEmail1'></label>"+
                        "<div class='col-md-10'>"+
                        "<tr>"+
                        "<td width='200px'><b><center>Type Mobil</center></b></td>"+
                        "<td>: &nbsp</td>"+
                        "<td><input type='text' name='type[]' maxlength='30' required=''></td>"+
                        "<td width='200px'><b><center>No Rangka Mobil</center></b></td>"+
                        "<td>: &nbsp</td>"+
                        "<td><input type='text' name='no_rangka[]' maxlength='14' required=''></td>"+
                        "</tr>"+
                        "</div>"+
                    "</div>"+
                "</table>" +


                "<br>"
            );

            $("#jumlah_mobil").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform    
            });        
            // Buat fungsi untuk mereset form ke semula    
            $("#btn-reset-form").click(function(){      
            //$("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
            if(parseInt($("#jumlah_mobil").val())==1){

            }else{
             $("#jumlah_mobil").val(parseInt($("#jumlah_mobil").val()-1)); // Ubah kembali value jumlah form menjadi 1   
             $("table:last").remove();
             $("br:last").remove();

             $('#insert-form > .form-group').last().remove();

            return false;   
            }     
            
            });  
            });  
        </script>
<?php echo form_close(); ?>