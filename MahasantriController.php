<?php 
    namespace App\Http\Controllers;
    use Illuminate\Http\request;
    class MahasantriController extends Controller
    {
        public function dataMahasantri(){
            $mhs1 = ' Fawwaz'; $asal1 = 'Jakarta';
            $mhs2 = ' Inaya' ; $asal2 = 'Depok';
            $mhs3 = ' Zidan' ; $asal3 = 'Binjai';
            $mhs4 = ' Bambang' ; $asal4 = 'Mojokerto';
            $mhs5 = ' Unyil' ; $asal5 = 'Bandung';
            return view('nilai_Mahasantri',
                compact('mhs1','mhs2','mhs3','mhs4','mhs5','asal1','asal2','asal3','asal3','asal4','asal5')
            );
        }
    }
?> 