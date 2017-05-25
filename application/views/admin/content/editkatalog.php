<?php
echo validation_errors();
?>
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit Katalog
                        </h1>
                        <form enctype="multipart/form-data" role="form" class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/admin/katalog/editKatalog/<?php echo $data['id_katalog']?>">
                             <div class="form-group">
                                <label for="inputNama" class="control-label col-xs-4">Nama Katalog</label>
                                <div class="col-xs-4">
                                    <input name="nama_katalog" type="text" class="form-control" id="inputNama" value="<?php echo $data['nama_katalog'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputHarga" class="control-label col-xs-4">Harga Katalog</label>
                                <div class="col-xs-4">
                                    <input name="harga_katalog" type="text" class="form-control" id="inputHarga" value="<?php echo $data['harga_katalog'];?>">
                                </div>
                            </div>
                           <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Deskripsi Katalog</label>
                                <textarea name="deskripsi_katalog" rows="5" class="form-control" placeholder="Deskripsi Katalog" id="message" required data-validation-required-message="Please enter a message."><?php echo $data['deskripsi_katalog'];?></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                             <div class="form-group">
                                <label for="inputGambar" class="control-label col-xs-4">Gambar Katalog</label>
                                <div class="col-xs-4">
                                    <input name="path" type="file" id="inputGambar" placeholder="Gambar" required accept="image/*">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-offset-4 col-xs-9">
                                    <button type="submit" class="btn btn-primary">Edit</button>
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