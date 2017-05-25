
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tambah Katalog
                        </h1>
                        <form role="form" class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/admin/katalog/insertKatalog" enctype="multipart/form-data">
                             <div class="form-group">
                                <label for="inputNama" class="control-label col-xs-4">Nama Katalog</label>
                                <div class="col-xs-4">
                                    <input name="nama_katalog" type="text" class="form-control" id="inputNama" placeholder="Nama Katalog">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputHarga" class="control-label col-xs-4">Harga Katalog</label>
                                <div class="col-xs-4">
                                    <input name="harga_katalog" type="text" class="form-control" id="inputHarga" placeholder="Harga Katalog">
                                </div>
                            </div>
                           <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Deskripsi Katalog</label>
                                <textarea name="deskripsi_katalog" rows="5" class="form-control" placeholder="Deskripsi Katalog" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                       <div class="form-group">
                                <label for="inputGambar" class="control-label col-xs-4">Gambar Katalog</label>
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