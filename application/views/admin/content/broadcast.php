
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Broadcast E-Mail pada Subscriber
                        </h1>
                        <form role="form" class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/admin/SMTPMail/insertBroadcast" enctype="multipart/form-data">

                        
                             <div class="form-group">
                                <label for="inputSubject" class="control-label col-xs-4">Subject Broadcast</label>
                                <div class="col-xs-4">
                                    <input name="subject_broadcast" type="text" class="form-control" id="inputNama" placeholder="Subject Broadcast">
                                </div>
                            </div>

                            <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message Broadcast</label>
                                <textarea name="message_broadcast" rows="5" class="form-control" placeholder="Message Broadcast" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>

                            <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Receiver :</label>
                                <textarea name="receiver_broadcast" rows="5" class="form-control" placeholder="Receiver Broadcast" id="message" required data-validation-required-message="" value=""></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>




                            <div class="form-group">
                                <label for="inputGambar" class="control-label col-xs-4">Upload Gambar</label>
                                <div class="col-xs-4">
                                    <input name="path" type="file" id="uploadGambar" placeholder="Gambar" required accept="image/*">
                            </div>

                            <div class="form-group">
                                <div class="col-xs-offset-4 col-xs-9">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
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