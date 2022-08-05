<!-- Content Wrapper. Ini adalah Page Konten -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pendaftaran Pasien</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Data Pasien</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pasien</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">...</option>
                                <option>BPJS</option>
                                <option>Umum</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nomor Identitas</label>
                            <input type="text" class="form-control" id="nik-input" placeholder="Nomor Identitas">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" id="alamat-input" placeholder="Alamat">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Poliklinik</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">...</option>
                                <option>FISIOTHERAPHY</option>
                                <option>HEMODIALISA</option>
                                <option>IGD</option>
                                <option>KLINIK ANAK</option>
                                <option>KLINIK BEDAH ORTHOPEDI</option>
                                <option>KLINIK BEDAH SYARAF</option>
                                <option>KLINIK BEDAH UMUM</option>
                                <option>KLINIK BEDAH UROLOGI</option>
                                <option>KLINIK GIGI DAN MULUT</option>
                                <option>KLINIK JANTUNG</option>
                                <option>KLINIK JIWA</option>
                                <option>KLINIK KEBIDANAN DAN PENYAKIT KANDUNGAN</option>
                                <option>KLINIK MATA</option>
                                <option>KLINIK PARU</option>
                                <option>KLINIK PENYAKIT DALAM</option>
                                <option>KLINIK PENYAKIT KULIT DAN KELAMIN</option>
                                <option>KLINIK SARAF</option>
                                <option>KLINIK THT</option>
                                <option>LABORATORIUM</option>
                                <option>MEDICAL CHECK UP</option>
                                <option>RADIOLOGI</option>
                                <option>SKIN CARE</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama-input" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">...</option>
                                <option>Laki - Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
    </div>
</div>
<!-- /.content-wrapper -->