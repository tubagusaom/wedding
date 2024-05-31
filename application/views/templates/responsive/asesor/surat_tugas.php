<link href="<?= base_url() ?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Surat Tugas</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div><?= tgl_indo(date('Y-m-d')) ?>
                    <i class="icon-calendar"></i>&nbsp;
                    <span class="thin uppercase hidden-xs"></span>&nbsp;
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 10px;">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject bold uppercase"> Surat Tugas Asesor</span>
                        </div>

                    </div>
                    <div class="portlet-body table-responsive">

                        <table class="table table-striped table-bordered table-hover " >
                            <thead>
                                <tr>
                                    <th> Nama Jadwal </th>
                                    <th> Tanggal </th>
                                    <th> Tempat Uji Kompetensi </th>
                                    <th> Asesi</th>
                                    <th> Nama Asesor</th>
                                    <th> Cetak</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($surat_tugas_asesor as $value) { ?>
                                    <tr class="odd gradeX">

                                        <td> <?= $value->jadual ?> </td>
                                        <td>
                                            <?= tgl_indo($value->tanggal) ?>
                                        </td>
                                        <td>
                                          <?= $value->tuk ?>
                                        </td>

                                        <td>
                                            <?= $value->jumlah_asesi ?>
                                        </td>

                                        <td><?= $value->nama_asesor ?></td>
                                        <td>
                                          <a href="<?= base_url() ?>surat_tugas/cetak/<?= $value->jadwal_id ?>" target="_blank"> <i class="icon-printer"></i></a>
                                        </td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div></div>


<script src="<?= base_url() ?>assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?= base_url() ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= base_url() ?>assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
