<x-layout>
    <x-slot name="page_name">Halaman Divisi / Create</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/divisi') }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Kode</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan Kode">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Divisi</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Divisi">
                </div>
            </div>
            <div class="form-group row">
                <label for="kecamatan_nama" class="col-sm-4 col-form-label">Nama Manager</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="manager" name="manager" placeholder="Masukkan Nama Manager">
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