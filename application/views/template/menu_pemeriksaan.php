<?php
$pw_id = $this->input->get('pw_id');

?>
  <li class="nav-item">
     <a href="<?=base_url()?>pengawasan/detail/?pw_id=<?=$pw_id?>" class="nav-link">
      <i class="nav-icon fas fa-table"></i>
      <p>Data Pemeriksaan</p>
    </a>
  </li>
 

  <li class="nav-item has-treeview menu-open">
    <a href="#" class="nav-link active">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Persiapan
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?=base_url()?>nopen/?pw_id=<?=$pw_id?>" class="nav-link" >
                <i class="far fa-circle nav-icon"></i>
                <p>Nota Pengajuan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url()?>sutugas/?pw_id=<?=$pw_id?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Surat Tugas</p>
              </a>
            </li>
           <!--  <li class="nav-item" title="Anggaran Waktu Pemeriksaan">
              <a href="<?=base_url()?>km03" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kendali Mutu 3</p>
              </a>
            </li>
            <li class="nav-item" title="Kartu Penugasan Pemeriksaan">
              <a href="<?=base_url()?>km04" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kendali Mutu 4</p>
              </a>
            </li>
            <li class="nav-item" title="Rencana Pelaksanaan Kegiatan Harian">
              <a href="<?=base_url()?>km05" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kendali Mutu 5</p>
              </a>
            </li>
            <li class="nav-item" title="Laporan Rekap Jam Penugasan">
              <a href="<?=base_url()?>km06" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kendali Mutu 6</p>
              </a>
            </li><li class="nav-item" title="Laporan Rekap Jam Penugasan">
              <a href="<?=base_url()?>km07" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kendali Mutu 7</p>
              </a>
            </li>
            <li class="nav-item" title="Laporan Pemeriksaan">
              <a href="<?=base_url()?>km08" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kendali Mutu 8</p>
              </a>
            </li> -->
            <li class="nav-item" title="Laporan Pemeriksaan">
              <a href="<?=base_url()?>km09/?pw_id=<?=$pw_id?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kendali Mutu 9</p>
              </a>
            </li>
            <li class="nav-item" title="Program Kerja Pemeriksaan">
              <a href="<?=base_url()?>km10/?pw_id=<?=$pw_id?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kendali Mutu 10</p>
              </a>
            </li>
            <li class="nav-item" title="Notulen Kesepakatan">
              <a href="<?=base_url()?>km11/?pw_id=<?=$pw_id?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kendali Mutu 11</p>
              </a>
            </li>

          </ul>
  </li>
 <li class="nav-item has-treeview menu-open">
    <a href="#" class="nav-link active">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Laporan
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
          <ul class="nav nav-treeview">
            <li class="nav-item" title="">
              <a href="<?=base_url();?>laporanharian/?pw_id=<?=$pw_id?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Laporan Harian</p>
              </a>
            </li>
            <li class="nav-item" title="">
              <a href="<?=base_url();?>konlap/?pw_id=<?=$pw_id?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Konsep Laporan</p>
              </a>
            </li>
            <li class="nav-item" title="">
              <a href="<?=base_url();?>reviusheet/?pw_id=<?=$pw_id?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Reviu Sheet</p>
              </a>
            </li>

            <li class="nav-item" title="Daftar Penilaian Kinerja Dan Kepribadian Auditor">
              <a href="<?=base_url();?>klhp/?pw_id=<?=$pw_id?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kelengkapan LHP</p>
              </a>
            </li>
            <li class="nav-item" title="">
              <a href="<?=base_url();?>bastdist/?pw_id=<?=$pw_id?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>BAST dan Distribusi</p>
              </a>
            </li>
          </ul>
  </li>
 
 <li class="nav-item has-treeview menu-open">
    <a href="<?=base_url();?>penilaian" class="nav-link active">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Penilaian
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
          <ul class="nav nav-treeview">
            <li class="nav-item" title="Daftar Penilaian Kepribadian Auditor">
              <a href="<?=base_url();?>nilai1/?pw_id=<?=$pw_id?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>N.1</p>
              </a>
            </li>
            <li class="nav-item" title="Daftar Penilaian Kinerja Dan Kepribadian Auditor">
              <a href="<?=base_url();?>nilai2/?pw_id=<?=$pw_id?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>N.2</p>
              </a>
            </li>
          </ul>
  </li>
