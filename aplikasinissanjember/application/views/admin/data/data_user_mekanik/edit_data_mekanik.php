<?php 
echo form_open('Data/proses_edit_data_mekanik','class="form-horizontal" role="form"');
// echo form_hidden('id', $this->uri->segment(3));

?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Edit Data Mekanik</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
                        <input type="hidden" name="id_user_mekanik" class="form-control" id="exampleInputEmail1" value="<?php echo $list['id_user_mekanik'] ?>">        
                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1" >Nama Mekanik</label>
                            <div class="col-md-10">
                                <input type="text" name="nama_mekanik" class="form-control" id="exampleInputEmail1" value="<?php echo $list['nama_mekanik'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">Alamat</label>
                            <div class="col-md-10">
                                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" value="<?php echo $list['alamat'] ?>">
                            </div>
                         </div>
                        <div class="form-group">
                        <label class="col-md-2 control-label" for="exampleInputEmail1">No Telp</label>
                            <div class="col-md-10">
                                <input type="text" name="no_telp" class="form-control" id="exampleInputEmail1" value="<?php echo $list['no_telp'] ?>">
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

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
<?php echo form_close(); ?>