<?php
echo validation_errors();
?>
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit About (Welcome!)
                        </h1>
                        <form enctype="multipart/form-data" role="form" class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/admin/about/editAbout/<?php echo $data['id_about']?>">
                           <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Isi About</label>
                                <textarea name="isi_about" rows="5" class="form-control" placeholder="Konten" id="message" required data-validation-required-message="Please enter a message."><?php echo $data['isi_about'];?></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                            <div class="form-group">
                                <!-- <div class="col-xs-offset-3 col-xs-9"> -->
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                <!-- </div> -->
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