<?php

namespace App\Livewire;

use App\Actions\Options\GetCabangOptions;
use App\Models\Program;
use App\Models\User;
use App\Services\CabangService;
use Livewire\Component;

class FormRegister extends Component
{

    public $namaSantri;
    public $username;
    public $password;
    public $jenis_kelamin;
    public $cabang_id;
    public $program_id;

    public $selectedCabang;

    public $programOptions;

    private $cabangService;

    protected function rules()
    {
        return [
            'namaSantri' => 'required|string',
            'username' => 'required|max:13|unique:users,username',
            'password' => 'required|min:6',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'cabang_id' => 'required|exists:cabangs,id',
            'program_id' => 'required|exists:programs,id',
        ];
    }

    // constructor
    public function boot(CabangService $cabangService)
    {
        $this->cabangService = $cabangService;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // function handler
    public function handleSelectCabang($id)
    {
        // check if id is null
        if (!$id) {
            $this->programOptions = null;
            return;
        }

        // get data cabang by id (for validate data cabang is exist)
        $cabang = $this->cabangService->getDataById($id);

        // get program where id cabang
        $program = Program::where('cabang_id', $cabang->id)->pluck('nama_program', 'id');

        // save cabang id to state
        $this->cabang_id = $cabang->id;

        // save program options to state
        $this->programOptions = $program;
    }

    public function save()
    {
        // validate data
        $this->validate();
        // save data to database
        $user = User::create([
            'name' => $this->namaSantri,
            'username' => $this->username,
            'password' => bcrypt($this->password),
            'jenis_kelamin' => $this->jenis_kelamin,
            'cabang_id' => $this->cabang_id,
            'program_id' => $this->program_id,
        ]);

        // auto login
        auth()->login($user);

        // redirect to dashboard
        return redirect()->route('dashboard');
    }

    public function render()
    {
        // get cabang options
        $cabangOptions = new GetCabangOptions();

        return view('livewire.form-register', [
            'cabangOptions' => $cabangOptions->handle(),
            'programOptions' => $this->programOptions ?? null,
        ]);
    }
}
