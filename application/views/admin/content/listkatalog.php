
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            List Katalog
                        </h1>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Katalog</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
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
                                            <td>'. $row['nama_katalog'] .'</td>
                                            <td>'. $row['harga_katalog'] .'</td>
                                            <td>'. $row['deskripsi_katalog'] .'</td>
                                            <td><img src="'.base_url().$row['path'] .'" width="100px"/></td>
                                            <td>
                                            <a href='. base_url()."index.php/admin/katalog/editKatalog/".$row['id_katalog'].' class="btn btn-warning fa fa-edit" title="Edit"></a>
                                            <a href='. base_url()."index.php/admin/katalog/hapusKatalog/".$row['id_katalog'].' class="btn btn-danger fa fa-trash" title="Hapus"></a>

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