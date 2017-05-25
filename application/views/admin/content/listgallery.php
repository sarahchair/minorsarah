
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            List Gallery
                        </h1>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Gallery</th>
                                        <th>Keterangan</th>
                                        <th>Gambar</th>
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
                                            <td>'. $row['judul_gallery'] .'</td>
                                            <td>'. $row['isi_gallery'] .'</td>
                                            <td><img src="'.base_url().$row['path'] .'" width="100px"/></td>
                                            <td>
                                            <a href='. base_url()."index.php/admin/gallery/editGallery/".$row['id_gallery'].' class="btn btn-warning fa fa-edit" title="Edit"></a>
                                            <a href='. base_url()."index.php/admin/gallery/hapusGallery/".$row['id_gallery'].' class="btn btn-danger fa fa-trash" title="Hapus"></a>

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