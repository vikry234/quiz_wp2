<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiswaModel extends CI_Model {

    public function simpanDataSiswa($data)
    {
        // Proses simpan data ke database atau lakukan operasi lain sesuai kebutuhan
        // Misalnya, Anda dapat mengubah kode di bawah ini untuk menyimpan data ke file atau melakukan operasi lainnya.
        
        // Simpan data ke dalam array atau file
        $data_siswa = array(
            'nama' => $data['nama'],
            'nis' => $data['nis'],
            'kelas' => $data['kelas'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'tempat_lahir' => $data['tempat_lahir'],
            'alamat' => $data['alamat'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'agama' => $data['agama']
        );
    }

}
