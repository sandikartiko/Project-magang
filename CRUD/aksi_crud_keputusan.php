<?php
include "../koneksi.php";

// uji tombol simpan
if(isset($_POST['bsimpan'])){
    $namaFile = $_FILES['kpfile']['name'];
    $namaSementara = $_FILES['kpfile']['tmp_name'];
    
    // tentukan lokasi file akan dipindahkan
    $dirUpload = "../dokumen/";
    
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    
    if ($terupload) {
        echo "Upload berhasil!<br/>";
        echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    } else {
        echo "Upload Gagal!";
    }


    // simpan data
    $simpan = mysqli_query($kon, "INSERT INTO suratkeputusan (Tgl_Keputusan, Tentang, Uraian, Tgl_Laporan, Keterangan, File_Document)
                                    VALUES ('$_POST[kptgl_kep]',
                                             '$_POST[kptentang]',
                                             '$_POST[kpuraian]',
                                             '$_POST[kptgl_lap]',
                                             '$_POST[kpketerangan]',
                                             '$namaFile ') ");

    //jika sukses
    if($simpan){
        echo "<script>alert('Simpan Data Sukses')
            document.location='../DAFTAR ARSIP/tampilsuratkeputusan.php';
            </script>";
    }else{
        echo "<script>alert('Simpan Data Gagal')
        document.location='../DAFTAR ARSIP/tampilsuratkeputusan.php';
        </script>";
    }

}
if(isset($_POST['bubah'])){
    $namaFile = $_FILES['kpfile']['name'];
    $namaSementara = $_FILES['kpfile']['tmp_name'];
    
    // tentukan lokasi file akan dipindahkan
    $dirUpload = "../dokumen/";
    
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    
    if ($terupload) {
        $ubah = mysqli_query($kon, "UPDATE suratkeputusan SET
        Tgl_Keputusan = '$_POST[kptgl_kep]',
        Tentang = '$_POST[kptentang]',
        Uraian = '$_POST[kpuraian]',
        Tgl_Laporan = '$_POST[kptgl_lap]',
        Keterangan = '$_POST[kpketerangan]',
        File_Document = '$namaFile'
        WHERE id = '$_POST[id]'
         ");
        echo "Upload berhasil!<br/>";
        echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    } else {
        $ubah = mysqli_query($kon, "UPDATE suratkeputusan SET
        Tgl_Keputusan = '$_POST[kptgl_kep]',
        Tentang = '$_POST[kptentang]',
        Uraian = '$_POST[kpuraian]',
        Tgl_Laporan = '$_POST[kptgl_lap]',
        Keterangan = '$_POST[kpketerangan]'
        WHERE id = '$_POST[id]'
         ");
        echo "Upload Gagal!";
    }


    // ubahdata suratmasuk
   

    //jika sukses
    if($ubah){
        echo "<script>alert('Ubah Data Sukses')
            document.location='../DAFTAR ARSIP/tampilsuratkeputusan.php';
            </script>";
    }else{
        echo "<script>alert('Ubah Data Gagal')
        document.location='../DAFTAR ARSIP/tampilsuratkeputusan.php';
        </script>";
    }
}
if(isset($_POST['bhapus'])){

    // Hapus Data Suratmasuk
    $hapus = mysqli_query($kon, " DELETE FROM suratkeputusan WHERE id ='$_POST[id]' ");

    //jika sukses
    if($hapus){
        echo "<script>alert('Hapus Data Sukses')
            document.location='../DAFTAR ARSIP/tampilsuratkeputusan.php';
            </script>";
    }else{
        echo "<script>alert('Hapus  Data Gagal')
        document.location='../DAFTAR ARSIP/tampilsuratkeputusan.php';
        </script>";
    }
}

?>