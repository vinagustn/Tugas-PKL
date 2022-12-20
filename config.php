<?php
    //connect to database
    $connect = mysqli_connect('localhost','root','','rekap_data');

    //Query to database
    function query($query){
        global $connect;

        $put = mysqli_query($connect, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($put)){
            $rows[] = $row;
        }
        return $rows;
    }

    //save data
    function dataSave($data){
        global $connect;

        $tanggal = htmlspecialchars($data['tanggal']);
        $no_registrasi = htmlspecialchars($data['no_registrasi']);
        $nik = htmlspecialchars($data['nik']);
        $nama_pemohon = htmlspecialchars($data['nama_pemohon']);
        $ktp = htmlspecialchars($data['ktp']);
        $kk = htmlspecialchars($data['kk']);
        $akel = htmlspecialchars($data['akel']);
        $akem = htmlspecialchars($data['akem']);
        $akawin = htmlspecialchars($data['akawin']);
        $keterangan = htmlspecialchars($data['keterangan']);

        $saving ="INSERT INTO legalisir VALUES ('','$tanggal','$no_registrasi',$nik,'$nama_pemohon','$ktp','$kk','$akel','$akem','$akawin','$keterangan')";

        mysqli_query($connect, $saving);

        return mysqli_affected_rows($connect);
    }

    //edit data
    function edit($data){
        global $connect;

        $id = $data['id'];

        $tanggal = htmlspecialchars($data['tanggal']);
        $no_registrasi = htmlspecialchars($data['no_registrasi']);
        $nik = htmlspecialchars($data['nik']);
        $nama_pemohon = htmlspecialchars($data['nama_pemohon']);
        $ktp = htmlspecialchars($data['ktp']);
        $kk = htmlspecialchars($data['kk']);
        $akel = htmlspecialchars($data['akel']);
        $akem = htmlspecialchars($data['akem']);
        $akawin = htmlspecialchars($data['akawin']);
        $keterangan = htmlspecialchars($data['keterangan']);

        $editing = "UPDATE legalisir SET 
                         tanggal = '$tanggal',
                         no_registrasi = '$no_registrasi',
                         nik = $nik,
                         nama_pemohon = '$nama_pemohon',
                         ktp = $ktp,
                         kk = '$kk',
                         akel = '$akel',
                         akem = '$akem',
                         akawin = '$akawin',
                         keterangan = '$keterangan'
                    WHERE id = '$id'";

        mysqli_query($connect,$editing);

        return mysqli_affected_rows($connect);
    }
?>