<?php

namespace App\Http\Livewire;
use App\Models\Mahasiswa;
use Livewire\Component;

class CreateMahasiswa extends Component
{
    public $nama; 
    public $nim; 
    public $alamat;

    public function render()
    {
        return view('livewire.create-mahasiswa');
    }

    public function createMahasiswa() 
    {
        Mahasiswa::create([
            'nama' => $this->nama, 
            'nim' => $this->nim, 
            'alamat' => $this->alamat
        ]);
        $this->nama = "";
        $this->nim = "";
        $this->alamat = "";
    }
}

// class CreateMahasiswa extends Component
// {
//     public $mahasiswas, $nama, $nim, $alamat, $mahasiswa_id;
//     public $isOpen = 0;
  
//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
//     public function render()
//     {
//         $this->mahasiswas = Mahasiswa::all();
//         return view('dashboard');
//     }
  
//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
//     public function create()
//     {
//         $this->resetInputFields();
//         $this->openModal();
//     }
  
//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
//     public function openModal()
//     {
//         $this->isOpen = true;
//     }
  
//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
//     public function closeModal()
//     {
//         $this->isOpen = false;
//     }
  
//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
//     private function resetInputFields(){
//         $this->nama = "";
//         $this->nim = "";
//         $this->alamat = "";
//         $this->mahasiswa_id = '';
//     }
     
//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
//     public function store()
//     {
//         $this->validate([
//             'nama' => 'required',
//             'nim' => 'required',
//             'alamat' => 'required',
//         ]);
   
//         Mahasiswa::updateOrCreate(['id' => $this->mahasiswa_id], [
//             'nama' => $this->title,
//             'nim' => $this->nim,
//             'alamat' => $this->alamat
//         ]);
  
//         session()->flash('message', 
//             $this->mahasiswa_id ? 'Updated Successfully.' : 'Created Successfully.');
  
//         $this->closeModal();
//         $this->resetInputFields();
//     }
//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
//     public function edit($id)
//     {
//         $mahasiswa = Mahasiswa::findOrFail($id);
//         $this->mahasiswa_id = $id;
//         $this->nama = $mahasiswa->nama;
//         $this->nim = $mahasiswa->nim;
//         $this->nama = $mahasiswa->nama;
    
//         $this->openModal();
//     }
     
//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
//     public function delete($id)
//     {
//         Mahaiswa::find($id)->delete();
//         session()->flash('message', 'Deleted Successfully.');
//     }
// }