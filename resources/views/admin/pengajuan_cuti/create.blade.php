<x-layout>
    <x-slot name="page_name">Halaman Pengajuan Cuti / Create</x-slot>
    <x-slot name="page_title">Lengkapi Data Anda dengan Teliti di Bawah Ini :</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/pengajuan_cuti') }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="tgl_awal" class="col-sm-4 col-form-label">Tanggal Awal</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgl_awal" name="tgl_awal" placeholder="Masukkan Tanggal Awal">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_akhir" class="col-sm-4 col-form-label">Tanggal Akhir</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" placeholder="Masukkan Tanggal Akhir">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-sm-4 col-form-label">Jumlah</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah">
                </div>
            </div>
            <div class="form-group row">
                <label for="ket" class="col-sm-4 col-form-label">Keterangan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="ket" name="ket" placeholder="Masukkan Keterangan">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-4 col-form-label">Status</label>
                <div class="col-sm-8">
                    <select class="form-control" id="status" name="status">
                        <option value="">Pilih Status</option>
                        <option value="Disetujui">Disetujui</option>
                        <option value="Tidak Disetujui">Tidak Disetujui</option>
                        <option value="Lupakan">Lupakan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-4 col-form-label">NIP</label>
                <div class="col-sm-8">
                    <select class="form-control" id="nip" name="nip">
                        <option value="">Pilih NIP</option>
                        @foreach($pengajuan_cuti as $pengajuan)
                        <option value="{{ $pengajuan->nip }}">{{ $pengajuan->nip }}</option>
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

