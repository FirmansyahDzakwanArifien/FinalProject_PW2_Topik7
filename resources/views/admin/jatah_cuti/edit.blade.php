<x-layout>
    <x-slot name="page_name">Halaman Edit / Edit</x-slot>
    <x-slot name="page_title">Silakan Perbarui Data Anda dengan Teliti :</x-slot>

    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/jatah_cuti/update', $jatah_cuti->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="tahun" class="col-sm-4 col-form-label">Tahun</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Masukkan Tahun" value="{{ $jatah_cuti->tahun }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-sm-4 col-form-label">Jumlah</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah" value="{{ $jatah_cuti->jumlah }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                <div class="col-sm-8">
                    <select class="form-control" id="nip" name="nip">
                        <option value="">Pilih NIP</option>
                        @foreach($pegawais as $pegawai)
                        <option value="{{ $pegawai->nip }}" {{ $jatah_cuti->nip == $pegawai->nip ? 'selected' : '' }}>{{ $pegawai->nip }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
        
    </x-slot>
</x-layout>