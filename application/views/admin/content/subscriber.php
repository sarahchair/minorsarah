
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Subscriber
                        </h1>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                $no = 1;
                                foreach ($data as $row){
                                    ?>
                                    <tr>
                                            <td> <?php echo $no;?>
                                            <td> <?php echo $row['nama_subscriber'];?></td>
                                            <td> <?php echo $row['email_subscriber'];?></td>
                                            <td>
                                                <a href="<?php echo site_url('index.php/admin/SMTPMail/delete/'.$row['id_subscriber']);?>"><button type="submit" class = "btn btn-danger fa fa-trash" title="Hapus"></button></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $no++;
                                    }
                                    ?>
                                <tbody>

                                </tbody>
                            </table>
                            
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
