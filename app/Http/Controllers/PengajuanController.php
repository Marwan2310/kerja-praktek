<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use App\Models\users;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        //
        $data = pengguna::orderBy("id", "desc")->paginate(10);

        return view("pengajuan.index")->with("data", $data);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pengajuan.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation Rules
        $request->validate([
            "nama" => "required",
            "alamat" => "required",
            "asaluniv" => "required",
            "jurusan" => "required",
            "tglawal" => "required|date",
            "tglakhir" => "required|date",
            "file" => "required|mimes:pdf"
        ], [
            // Validation Messages
            "nama.required" => "Nama wajib diisi",
            "alamat.required" => "Alamat wajib diisi",
            "asaluniv.required" => "Asal Universitas wajib diisi",
            "jurusan.required" => "Jurusan wajib diisi",
            "tglawal.required" => "Tanggal awal wajib diisi",
            "tglakhir.required" => "Tanggal akhir wajib diisi",
            "file.required" => "File PDF wajib diunggah",
            "file.mimes" => "Hanya dapat mengunggah file PDF"
        ]);

        // File Handling
        $pdf_file = $request->file('file');
        $pdf_ekstensi = $pdf_file->extension();
        $pdf_nama = date('ymdhis') . "." . $pdf_ekstensi;
        $pdf_file->move(public_path('pdf_files'), $pdf_nama);

        // Create Data Array
        $data = [
            "nama" => $request->input("nama"),
            "alamat" => $request->input("alamat"),
            "asaluniv" => $request->input("asaluniv"),
            "jurusan" => $request->input("jurusan"),
            "tglawal" => $request->input("tglawal"),
            "tglakhir" => $request->input("tglakhir"),
            "status" => "Berkas telah diterima, Mohon Tunggu",
            "total_earnings" => 0,
            "file" => $pdf_nama
        ];

        // Create Pengguna Record
        Pengguna::create($data);

        // Redirect with Success Message
        return redirect("pengajuan")->with("success", "Berhasil di Ajukan");
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show(Request $request)
     {

         // Get all data initially (without filtering)
    $query = Pengguna::orderBy('id', 'desc');

    // Check if 'status' parameter is present in the request
    if ($request->has('status')) {
        // If 'status' parameter is provided, filter the data accordingly
        $status = $request->input('status');
        $query->where('status', $status);
    }

    // Check if 'search' parameter is present in the request
    if ($request->has('search')) {
        // If 'search' parameter is provided, filter the data accordingly
        $search = $request->input('search');
        $query->where(function ($q) use ($search) {
            $q->where('nama', 'like', '%' . $search . '%')
              ->orWhere('asaluniv', 'like', '%' . $search . '%');
        });
    }

    $data = $query->paginate(10);

    return view('admin.show')->with('data', $data);
     }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = pengguna::where("id", $id)->first();
        return view("admin.edit")->with("data", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "nama" => "required",
            "alamat" => "required",
            "asaluniv" => "required",
            "jurusan" => "required",
            "tglawal" => "required",
            "tglawal" => "required|date",
            "tglakhir" => "required|date",

            "file" => "sometimes|mimes:pdf"
        ], [
            "nama.required" => "Nama wajib diisi",
            "alamat.required" => "Alamat wajib diisi",
            "asaluniv.required" => "Asal Universitas wajib diisi",
            "jurusan.required" => "Jurusan wajib diisi",
            "tglawal" => "Tanggal awal wajib diisi",
            "tglakhir" => "Tanggal akhir wajib diisi",
            "status" => "status wajib diisi",
            "file.mimes" => "Hanya dapat mengunggah file PDF"
        ]);

        $data = [
            "nama" => $request->input("nama"),
            "alamat" => $request->input("alamat"),
            "asaluniv" => $request->input("asaluniv"),
            "jurusan" => $request->input("jurusan"),
            "tglawal" => $request->input("tglawal"),
            "tglakhir" => $request->input("tglakhir"),

            "status" => $request->input("status"),
        ];

        if ($request->hasFile('file')) {
            $pdf_file = $request->file('file');
            $pdf_ekstensi = $pdf_file->extension();
            $pdf_nama = date('ymdhis') . "." . $pdf_ekstensi;
            $pdf_file->move(public_path('pdf_files'), $pdf_nama);

            $data_pdf = Pengguna::where("id", $id)->first();
            File::delete(public_path('pdf_files').'/'.$data_pdf->file_pdf);

            $data['file'] = $pdf_nama;
        }

        Pengguna::where("id", $id)->update($data);
        return redirect("admin/show")->with("success", "Berhasil melakukan update");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = pengguna::where("id", $id)->first();
        File::delete(public_path('pdf_files') . '/' . $data->file);

        pengguna::where("id", $id)->delete();
        return redirect("admin/show")->with("success", "Berhasil Hapus Data");
    }
}
