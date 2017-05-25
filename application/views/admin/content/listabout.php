
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            About
                        </h1>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Isi About</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $enum = 1;
                                    foreach($data as $row)
                                    {
                                        echo '<tr>
                                            <td>'. $enum .'</td>
                                            <td>'. $row['isi_about'] .'</td>
                                            <td>
                                            <a href='. base_url()."index.php/admin/about/editAbout/".$row['id_about'].' class="btn btn-warning fa fa-edit" title="Edit"></a>
                                            </td>
                                            </tr>';
                                            $enum +=1;
                                    }
                                    ?>
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