<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables, Auth, DB;
use Validator,Redirect,Response;

class DaftarDokumenController extends Controller
{
    public function index(){
        return view('master.dokumen.kategori');
    }

    public function findKateDoc(Request $request){
        $query['data'] = DB::table('kategori_dokumen')->where('kategori', 'like', '%'. $request->search . '%')->get();

        // return \Response::json($query);
        return $query;
    }

    public function listKategoriDokumen(Request $request){
        $params = $request->params;        
        $whereClause = $params['sac'];
        $query = DB::table('kategori_dokumen')->orderBy('id');
        return DataTables::queryBuilder($query)->toJson();
    }

    public function save(Request $req){
        // return $req;
        DB::beginTransaction();
        try{
            $kategori = $req['kategori'];

            $insertData = array();
            for($i = 0; $i < sizeof($kategori); $i++){
                $data = array(
                    'kategori'      => $kategori[$i],
                    'createdon'     => date('Y-m-d H:m:s'),
                    'createdby'     => Auth::user()->email ?? Auth::user()->username
                );
                array_push($insertData, $data);
            }
            insertOrUpdate($insertData,'kategori_dokumen');
            DB::commit();
            return Redirect::to("/master/kategoridok")->withSuccess('Kategori Berhasil dibuat');
        } catch(\Exception $e){
            DB::rollBack();
            return Redirect::to("/master/kategoridok")->withError($e->getMessage());
        }
    }

    public function update(Request $req){
        DB::beginTransaction();
        try{
            DB::table('kategori_dokumen')->where('id', $req['ktid'])->update([
                'kategori' => $req['kategori']
            ]);
            DB::commit();
            return Redirect::to("/master/kategoridok")->withSuccess('Kategori Dokumen Berhasil di update');
        } catch(\Exception $e){
            DB::rollBack();
            return Redirect::to("/master/kategoridok")->withError($e->getMessage());
        }
    }

    public function delete($id){
        DB::beginTransaction();
        try{
            DB::table('kategori_dokumen')->where('id', $id)->delete();
            DB::commit();
            return Redirect::to("/master/kategoridok")->withSuccess('Kategori Dokumen Berhasil di Hapus');
        } catch(\Exception $e){
            DB::rollBack();
            return Redirect::to("/master/kategoridok")->withError($e->getMessage());
        }
    }
}
