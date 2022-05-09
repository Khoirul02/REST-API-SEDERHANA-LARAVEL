<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PegawaiModel;

class apicontroller extends Controller
{
    public function get_all_pegawai(){
        return response()->json(PegawaiModel::all(), 200);
    }

    public function insert_data_pegawai(Request $request){
        $insert_pegawai = new PegawaiModel;
        $insert_pegawai-> nip_pegawai = $request-> nipPegawai;
        $insert_pegawai-> nama_pegawai = $request-> namaPegawai;
        $insert_pegawai-> tempat_lahir_pegawai = $request-> tempatLahirPegawai;
        $insert_pegawai-> tanggal_lahir_pegawai = $request-> tanggalLahirPegawai;
        $insert_pegawai-> jenis_kelamin_pegawai = $request-> jenisKelaminPegawai;
        $insert_pegawai-> agama_pegawai = $request-> agamaPegawai;
        $insert_pegawai-> alamat_pegawai = $request-> alamatPegawai;
        $insert_pegawai-> no_hp_pegawai = $request-> noHpPegawai;
        $insert_pegawai->save();
        return response([
            'status' => 'Berhasil',
            'message' => 'Pegawai Disimpan',
            'data' => $insert_pegawai
        ], 200);
    }
    public function update_data_pegawai(Request $request, $id){
        $check_pegawai = PegawaiModel::firstWhere('id', $id);
        if($check_pegawai){
            $data_pegawai = PegawaiModel::find($id);
            $data_pegawai-> nip_pegawai = $request-> nipPegawai;
            $data_pegawai-> nama_pegawai = $request-> namaPegawai;
            $data_pegawai-> tempat_lahir_pegawai = $request-> tempatLahirPegawai;
            $data_pegawai-> tanggal_lahir_pegawai = $request-> tanggalLahirPegawai;
            $data_pegawai-> jenis_kelamin_pegawai = $request-> jenisKelaminPegawai;
            $data_pegawai-> agama_pegawai = $request-> agamaPegawai;
            $data_pegawai-> alamat_pegawai = $request-> alamatPegawai;
            $data_pegawai-> no_hp_pegawai = $request-> noHpPegawai;
            $data_pegawai->save();
            return response([
                'status' => 'Berhasil',
                'message' => 'Pegawai Diedit',
                'data' => $data_pegawai
            ], 200);
        } else {
            return response([
                'status' => 'Not Found',
                'message' => 'Data Pegawai Tidak Ditemukan',
            ], 404);
        }
    }
    public function delete_data_pegawai($id){
        $check_pegawai = PegawaiModel::firstWhere('id', $id);
        if($check_pegawai){
            PegawaiModel::destroy($id);
            return response([
                'status' => 'Berhasil',
                'message' => 'Pegawai Dihapus',
            ], 200);
        } else {
            return response([
                'status' => 'Not Found',
                'message' => 'Data Pegawai Tidak Ditemukan',
            ], 404);
        }
    }
}
