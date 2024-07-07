<x-layout>
    <x-slot name="page_name">Halaman Pengajuan Cuti / Edit</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/pengajuan_cuti/update', $pengajuan_cuti->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="tgl_awal" class="col-sm-4 col-form-label">Tanggal Awal</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgl_awal" name="tgl_awal" placeholder="Masukkan Tanggal Awal" value="{{ $pengajuan_cuti->tgl_awal }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_akhir" class="col-sm-4 col-form-label">Tanggal Akhir</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" placeholder="Masukkan Tanggal Akhir" value="{{ $pengajuan_cuti->tgl_akhir }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-sm-4 col-form-label">Jumlah</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah" value="{{ $pengajuan_cuti->jumlah }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="ket" class="col-sm-4 col-form-label">Keterangan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="ket" name="ket" placeholder="Masukkan Keterangan" value="{{ $pengajuan_cuti->ket }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-4 col-form-label">Status</label>
                <div class="col-sm-8">
                    <select class="form-control" id="status" name="status">
                        <option value="">Pilih Status</option>
                        <option value="Disetujui" {{ $pengajuan_cuti->status == 'Disetujui' ? 'selected' : '' }}>Disetujui</option>
                        <option value="Tidak Disetujui" {{ $pengajuan_cuti->status == 'Tidak Disetujui' ? 'selected' : '' }}>Tidak Disetujui</option>
                        <option value="Lupakan" {{ $pengajuan_cuti->status == 'Lupakan' ? 'selected' : '' }}>Lupakan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                <div class="col-sm-8">
                    <select class="form-control" id="nip" name="nip">
                        <option value="">Pilih NIP</option>
                        @foreach($pegawais as $pegawai)
                        <option value="{{ $pegawai->nip }}" {{ $pengajuan_cuti->nip === $pegawai->nip? 'selected' : '' }}>{{ $pegawai->nip }}</option>
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
