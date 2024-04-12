 <div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formodal">
                Tambah Data Mahasiswa
            </button>
    </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
    <div class="input-group ">
        <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplete="off">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
        </div>
    </div>
    </form>
        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
        <?php foreach( $data['mhs'] as $mhs ) : ?>
            <li class="list-group-item">
                <?= $mhs['nama'] ?>
            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right " onclick="return confirm('yakin?');">hapus</a>
            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right tampilModalUbah " data-toggle="modal" data-target="#formodal" data-id="<?= $mhs['id']; ?>">ubah</a>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ">detail</a>
            </li>
            <?php endforeach; ?>
        </ul>
         
         </div>
    </div>

 </div>

<!-- Modal --> 
 <div class="Modal fade" id="forModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="forModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <input type="hidden" name="id" id="id">
            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post"> 

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="from-control" id="nama" name="nama">
            </div>

            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="number" class="from-control" id="nrp" name="nrp">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="from-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-contorl" id="jurusan" name="jurusan">
                    <option value="Teknologi Komputer">Teknologi Komputer</option>
                    <option value="Teknologi Infomasi">Teknologi Imfomasi</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                    <option value="Manajemen Rekayasa">Manajemen Rekayasa</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknologi Rekayasa Perangkat Lunak">Teknologi Rekayasa Perangkat Lunak</option>
                     </select>
            </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
 </div>

