<?php
class Gen_model extends CI_Model {


	public function __construct() {
		// $this -> load -> database();
	}

	function is_logged_in() {
		$is_logged_in = $this -> session -> userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in != true) {
			// echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';
			echo '<center>Anda tidak memiliki akses untuk masuk ke halaman ini. <a href="' . base_url('login') . '">Login</a></center>';
		//FOOTER
			die();
			//$this->load->view('login_form');
		}
	}


	function nama_bulan($bulan=0) {
		$nama_bln = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
		);
		return $nama_bln[$bulan];
	}

	function urai_tgl($awal=0,$akhir=0) {
		if($awal==0) {
			$data = "";
			return $data;
		} else
		{
				if($akhir==0) {$akhir=$awal;}
				$hasil="";	
				$awal_ex=explode('-',$awal);
				$tanggal_awal = (int)$awal_ex[2];
				$bulan_awal = (int)$awal_ex[1];
				$tahun_awal = (int)$awal_ex[0];
		
		
				$akhir_ex=explode('-',$akhir);
				$tanggal_akhir = (int)$akhir_ex[2];
				$bulan_akhir = (int)$akhir_ex[1];
				$tahun_akhir = (int)$akhir_ex[0];
		
				if($tahun_akhir == $tahun_awal)
				{
					if ($bulan_akhir == $bulan_awal) {
						if ($tanggal_akhir == $tanggal_awal) 	
						{
							$hasil = $tanggal_awal.' '.$this->nama_bulan($bulan_akhir).' '.$tahun_akhir;
						}
						else
						{
							$hasil = $tanggal_awal.' - '.$tanggal_akhir.' '.$this->nama_bulan($bulan_akhir).' '.$tahun_akhir;
						}
					}
					else
					{
						$hasil = $tanggal_awal.' '.$this->nama_bulan($bulan_awal).' - '.$tanggal_akhir.' '.$this->nama_bulan($bulan_akhir).' '.$tahun_akhir;
					}
				}
				else
				{
					$hasil = $tanggal_awal.' '.$this->nama_bulan($bulan_awal).' '.$tahun_awal.' - '.$tanggal_akhir.' '.$this->nama_bulan($bulan_akhir).' '.$tahun_akhir;
				}
		
				return $hasil;
		}


	}


	function hari_tgl($tgl=0){
	$hari = date ('D',strtotime($tgl));
 
	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}
 
	return "<b>" . $hari_ini . "</b>";
 
}
 

// 	function select_all($id, $tabel, $kunci) {
// 	$query = $this -> db -> query("
// 			SELECT 
// 				*
// 			FROM 
// 				$tabel
// 			WHERE $kunci = $id
// 				");
// 		return $query -> row_array();
// 		// return $query -> result();

// 	}

	function penyebut($nilai=0) {
		$nilai = abs($nilai);
		$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = $this->penyebut($nilai - 10). " belas";
		} else if ($nilai < 100) {
			$temp = $this->penyebut($nilai/10)." puluh". $this->penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " seratus" . $this->penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = $this->penyebut($nilai/100) . " ratus" . $this->penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " seribu" . $this->penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = $this->penyebut($nilai/1000) . " ribu" . $this->penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = $this->penyebut($nilai/1000000) . " juta" . $this->penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = $this->penyebut($nilai/1000000000) . " milyar" . $this->penyebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = $this->penyebut($nilai/1000000000000) . " trilyun" . $this->penyebut(fmod($nilai,1000000000000));
		}     
		return $temp;
	}
 
	function terbilang($nilai=0) {
		if($nilai<0) {
			$hasil = "minus ". trim($this->penyebut($nilai));
		} else {
			$hasil = trim($this->penyebut($nilai));
		}     		
		return $hasil;
	}
 


        public function get_golongan()
        {
            $this->db->order_by('gol_id', 'asc');
            return $this->db->get('kode_golongan')->result();
        }

        public function get_provinsi()
        {
            $this->db->order_by('provinsi_nama', 'asc');
            return $this->db->get('kode_provinsi')->result();
        }

        public function get_kabupaten()
        {
            // kita joinkan tabel kota dengan provinsi
            $this->db->order_by('kabupaten_nama', 'asc');
            $this->db->join('kode_provinsi', 'kode_kabupaten.provinsi_id = kode_provinsi.provinsi_id');
            return $this->db->get('kode_kabupaten')->result();
        }

        public function get_kecamatan()
        {
		$query = $this -> db -> query("
			SELECT 
				C.* 
			FROM 
				kode_kecamatan C
			WHERE
				C.kabupaten_id = '".KABUPATEN_ID."'
			order by 
			C.kecamatan_nama DESC
				");
		return $query -> result();
        }


        public function get_desa()
        {

			$query = $this -> db -> query("
				SELECT 
					D.*,
					C.kecamatan_nama
				FROM 
					kode_kecamatan C
					left join kode_desa D
						on D.kecamatan_id = C.kecamatan_id
				WHERE
					C.kabupaten_id = '".KABUPATEN_ID."'
				order by 
				D.desa_nama ASC
					");
		//	return $query -> row_array();
			return $query -> result();


        }




 	function get_lokasi($lokasi_id=0) {

		$query = $this -> db -> query("
			SELECT 
				A.provinsi_id, 
				A.provinsi_nama, 
				B.kabupaten_id, 
				B.kabupaten_nama, 
				C.kecamatan_id, 
				C.kecamatan_nama, 
				D.desa_id, 
				D.desa_nama
			FROM 
				kode_provinsi A
				left join kode_kabupaten B
					on A.provinsi_id = B.provinsi_id
				left join kode_kecamatan C
					on B.kabupaten_id = C.kabupaten_id
				left join kode_desa D
					on D.kecamatan_id = C.kecamatan_id
			WHERE
				A.provinsi_id = '$lokasi_id'
				OR B.kabupaten_id = '$lokasi_id'
				OR C.kecamatan_id = '$lokasi_id'
				OR D.desa_id = '$lokasi_id'
			order by 
			D.desa_id DESC, C.kecamatan_id DESC, B.kabupaten_id DESC, A.provinsi_id DESC
			limit 1 
				");
		return $query -> row_array();
		// return $query -> result();
	}



    public function get_biaya_kode()
    {

		$query = $this -> db -> query("
			SELECT 
				D.*
			FROM 
				biaya_kode D
			order by D.bk_id ASC
				");
	//	return $query -> row_array();
		return $query -> result();


    }

        public function get_biaya_data($sppd_id=0)
        {

			$query = $this -> db -> query("
				SELECT 
					C.*, D.*
				FROM 
					biaya_data C
					left join biaya_kode D
						on D.bk_id = C.bk_id
				WHERE
					C.sppd_id = '$sppd_id'
				order by 
				C.bk_id ASC
					");
		//	return $query -> row_array();
			return $query -> result();


        }



    public function get_laporan($st_id=0)
    {

		$query = $this -> db -> query("
			SELECT 
				D.*
			FROM 
				sppd_laporan D
				WHERE D.st_id = '$st_id'
			order by D.lap_id ASC
				");
	//	return $query -> row_array();
		return $query -> result();


    }

	function balik_tgl($tgl=0) {
		if($tgl!=0) {
		$tgl = explode('-', $tgl);
		$tgl_baru = $tgl[2] . '-' . $tgl[1] . '-' . $tgl[0];
		} else
		{
		$tgl_baru = "";			
		}
		return $tgl_baru;
	}


	function select_all($id, $tabel, $kunci) {
	$query = $this -> db -> query("
			SELECT 
				*
			FROM 
				$tabel
			WHERE $kunci = $id
				");
		return $query -> row_array();
		// return $query -> result();

	}


	function edit($id, $data, $tabel, $kunci) {
		$this -> db -> where($kunci, $id);
		$result = $this -> db -> update($tabel, $data);
		return $result;
	}

	function tambah($data, $tabel) {
		$result = $this -> db -> insert($tabel, $data);
		return $result;
	}

	function delete($id, $tabel, $kunci) {
        // $data_log['del_tgl'] = date("Y-m-d");
        $data_log['del_tabel'] = $tabel;
        $data_log['del_user'] = $this -> session -> userdata('nip');
		$data_log['del_log'] = json_encode($this -> select_all($id, $tabel, $kunci));

		if(isset($_SERVER['HTTP_REFERER']))
		{$data_log['del_url'] = htmlspecialchars($_SERVER['HTTP_REFERER']);} else
		{$data_log['del_url']="#";}

		$result1 = $this -> tambah($data_log, 'log_del');



		// echo br(); print_r($data_log);
			$this -> db -> where($kunci, $id);
		$result = $this -> db -> delete($tabel);
		return $result;
	}

}