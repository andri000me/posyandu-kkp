<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Data Anak</h3>
        </div>
    </div>
    <div class="flash-dataw" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
    <?php if ($this->session->flashdata('msg')) : ?>

    <?php endif; ?>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <button type="button" class="btn btn-primary">Tambah Data Anak</button>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama lengkap</th>
                                            <th>Tempat/Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Nama Ibu</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($anak as $n) : ?>
                                            <tr>
                                                <th scope="row">
                                                    <center><?= $i; ?></center>
                                                </th>
                                                <td><?= $n['nama_anak']; ?></td>
                                                <td><?= $n['tempat_lahir'] . ', ' . $n['tgl_lahir']; ?></td>
                                                <td><?= $n['jenis_kelamin']; ?></td>
                                                <td><?= $n['nama_ibu']; ?></td>
                                                <td>
                                                    <a data-toggle="modal" data-target="#newViewAnakModal<?= $n['id_anak']; ?>" href="<?= base_url(); ?>anak/viewData/<?= $n['id_anak']; ?>" class="btn btn-info btn-circle btn-sm">
                                                        <i class="fa fa-sticky-note"></i>
                                                    </a>
                                                    <a data-toggle="modal" data-target="#newEditAnakModal<?= $n['id_anak']; ?>" href="<?= base_url(); ?>anak/editData/<?= $n['id_anak']; ?>" class="btn btn-warning btn-circle btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?= base_url(''); ?>anak/deleteData/<?= $n['id_anak']; ?>" class="btn btn-danger btn-circle btn-sm tbl-hapus">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>