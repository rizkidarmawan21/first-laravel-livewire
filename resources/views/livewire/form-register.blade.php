<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <form wire:submit.prevent="save">

        <x-inputs.text-group>
            <x-inputs.text placeholder="Masukkan nama santri" wire:model.live="namaSantri" />
            <x-slot name="icon">
                <span class="fas fa-user"></span>
            </x-slot>

            @slot('error')
                @error('namaSantri')
                    <x-inputs.text-error message="{{ $message }}" />
                @enderror
            @endslot

        </x-inputs.text-group>

        {{ $namaSantri }}
        <div class="my-2" />
        <x-inputs.text-group>
            <x-inputs.text placeholder="Masukkan nomor telepon" type="number" name="username"
                wire:model.live="username" />

            <x-slot name="icon">
                <span class="fas fa-user"></span>
            </x-slot>

            @slot('error')
                @error('username')
                    <x-inputs.text-error message="{{ $message }}" />
                @enderror
            @endslot
        </x-inputs.text-group>

        <x-inputs.text-group>
            <x-inputs.text placeholder="Masukkan password" wire:model.live="password" type="password" />
            <x-slot name="icon">
                <span class="fas fa-user"></span>
            </x-slot>

            @slot('error')
                @error('password')
                    <x-inputs.text-error message="{{ $message }}" />
                @enderror
            @endslot

        </x-inputs.text-group>
        <div class="my-2" />

        <x-inputs.label>
            Jenis Kelamin
        </x-inputs.label>
        <x-inputs.radio value="Laki-laki" id="Laki-laki" name="jenis_kelamin" wire:model.live="jenis_kelamin">
            Laki-laki
        </x-inputs.radio>
        <x-inputs.radio value="Perempuan" id="Perempuan" name="jenis_kelamin" wire:model.live="jenis_kelamin">
            Perempuan
        </x-inputs.radio>

        @error('jenis_kelamin')
            <x-inputs.text-error message="{{ $message }}" />
        @enderror

        <div class="my-2" />

        <x-inputs.label>
            Cabang
        </x-inputs.label>
        <x-inputs.dropdown wire:model.live="cabang_id" wire:change="handleSelectCabang($event.target.value)">
            <x-inputs.options value="">
                -- Pilih Cabang --
            </x-inputs.options>
            @foreach ($cabangOptions as $key => $cabang)
                <x-inputs.options value="{{ $key }}">
                    {{ $cabang }}
                </x-inputs.options>
            @endforeach
        </x-inputs.dropdown>

        @error('cabang_id')
            <x-inputs.text-error message="{{ $message }}" />
        @enderror

        @if ($programOptions != null)
            <div class="my-2" />
            <x-inputs.label>
                Program
            </x-inputs.label>
            <x-inputs.dropdown wire:model.live="program_id">
                @foreach ($programOptions as $key => $program)
                    <x-inputs.options value="{{ $key }}">
                        {{ $program }}
                    </x-inputs.options>
                @endforeach
            </x-inputs.dropdown>

            @error('program_id')
                <x-inputs.text-error message="{{ $message }}" />
            @enderror
        @endif

        <div class="row mt-5">
            <!-- /.col -->
            <div class="col-12">
                <x-buttons.primary>
                    Daftar Sekarang!
                </x-buttons.primary>
            </div>
            <!-- /.col -->
        </div>
    </form>
</div>
