<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "penduduk";

	function __construct(){
		$conn = mysqli_connect($this->host, $this->uname, $this->pass);
		mysqli_select_db($conn, $this->db);
	}

    function tampil_data(){
        $conn = mysqli_connect('localhost','root','','penduduk');
		$data = mysqli_query($conn, "select * from penduduk");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

    function input($nik,$nama,$jenis,$alamat,$status,$pekerjaan,$kewarganegaraan,$tempat,$tgl,$golDarah){
        $conn = mysqli_connect('localhost','root','','penduduk');
		mysqli_query($conn, "insert into penduduk values('','$nik','$nama','$jenis','$alamat','$status','$pekerjaan','$kewarganegaraan','$tempat','$tgl','$golDarah')");
	}

    function hapus($id){
        $conn = mysqli_connect('localhost','root','','penduduk');
		mysqli_query($conn,"delete from penduduk where id='$id'");
	}

    function edit($id){
        $conn = mysqli_connect('localhost','root','','penduduk');
        $data = mysqli_query($conn,"select * from penduduk where id='$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id,$nik,$nama,$jenis,$alamat,$status,$pekerjaan,$kewarganegaraan,$tempat,$tgl,$golDarah){
        $conn = mysqli_connect('localhost','root','','penduduk');
        mysqli_query($conn, "update penduduk set nik='$nik', nama='$nama', jenis='$jenis', alamat='$alamat', status='$status', 
                    pekerjaan='$pekerjaan', kewarganegaraan='$kewarganegaraan', tempat='$tempat', tgl='$tgl', golDarah='$golDarah' where id='$id'");
    }

} 

?>