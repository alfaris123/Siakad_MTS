<?php foreach($data_biodata as $data_profil){ ?><?php } ?>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Foto Guru</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Guru</a></li>
                            <li class="breadcrumb-item"><a href="#!">Profil Biodata</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
          <div class="row">
            <div class="col-lg-8">
              <div class="card">
                  <div class="card-header card-border-c-yellow">
                    <h5><i class="feather icon-home mr-1"></i>Identitas Guru</h5>
                  </div>

                    <div class="card-body">
                    <form role="form" action="<?php echo base_url() ?>guru/dashboard/updatebiodatafoto" novalidate method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id_guru"  value="<?php echo $data_profil->id_guru ?>">
                                </div>
                            </div>
                   

                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="card card-info">
                                      <div class="card-body">
                                        <center><img style="width:150px;150px;" src="<?php echo base_url(); ?>upload/fotoguru/<?php echo $data_profil->foto_guru; ?>" class="img-responsive img-thumbnail" /></center>
                                      </div>
                                    </div>
                                </div>
                            </div>


          
                            <div class="col-md-8">
                              <label class="form-label font-weight-bolder">Pilih Foto Baru</label>
                                <div class="card card-info">
                                  <div class="card-header">
                                    <center><h5 class="card-title"><i class="fa fa-hand-o-left"></i> <strong>Ganti Foto Pribadi</strong> </h5></center> 
                                  </div>
                                  <div class="input-group mt-4 mb-4">
                                    <div class="custom-file ml-4 mr-4">
                                      <input type="file" name="foto_guru" class="custom-file-input form-control" id="exampleInputFile">
                                      <label class="custom-file-label" for="exampleInputFile">Cari file..</label>
                                    </div>
                                  </div>
                                </div>
                            </div>

                         
                            

                            
                        </div>
                      <button type="submit" class="btn btn-info" id="pnotify-info"><i class="feather icon-save"></i> Simpan</button>
                    </form>
                  </div>
              
            </div>
          </div>



            <div class="col-lg-4">
                <div class="card hdd-right-inner">
                    <div class="card-header card-border-c-green">
                        <h5>Informasi Server</h5>
                    </div>
                    <div class="card-body">
                         <?php if($this->session->flashdata('pemberitahuan_berhasil')){ ?>  
                            <div class="alert alert-info">  
                              <a href="#" class="close" data-dismiss="alert">&times;</a>  
                              <strong></strong> <?php echo $this->session->flashdata('pemberitahuan_berhasil'); ?>  
                            </div>  
                          <?php } ?> 

                    </div>
                    <ul class="list-group list-group-flush">
                        
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <label class="mb-0 wid-100">Email</label>
                                <div class="media-body">
                                    <p class="mb-0"><i class="feather icon-mail mr-1"></i><a href="#"><?php echo $data_profil->email; ?></a></p>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <label class="mb-0 wid-100">Tanggal </label>
                                <div class="media-body">
                                    <p class="mb-0"><i class="feather icon-calendar mr-1"></i><label class="mb-0"> <?php echo date('d-m-Y'); ?></label></p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <label class="mb-0 wid-100">Waktu </label>
                                <div class="media-body">
                                    <p class="mb-0"><i class="feather icon-clock mr-1"></i><label class="mb-0"> <?php echo date('H:i:s'); ?></label></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

          
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>