
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tambah Gallery
                        </h1>
                        <form role="form" class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/admin/gallery/insertGallery" enctype="multipart/form-data">
                             <div class="form-group">
                                <label for="inputJudul" class="control-label col-xs-4">Judul Gallery</label>
                                <div class="col-xs-4">
                                    <input name="judul_gallery" type="text" class="form-control" id="inputJudul" placeholder="Judul Gallery">
                                </div>
                            </div>
                           <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Keterangan Gallery</label>
                                <textarea name="isi_gallery" rows="5" class="form-control" placeholder="Keterangan" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                       <div class="form-group">
                                <label for="inputGambar" class="control-label col-xs-4">Gambar Gallery</label>
                                <div class="col-xs-4">
                                    <input name="path" type="file" id="inputGambar" placeholder="Gambar" required accept="image/*">
                            </div>
                
                            <div class="form-group">
                                <div class="col-xs-offset-4 col-xs-9">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->