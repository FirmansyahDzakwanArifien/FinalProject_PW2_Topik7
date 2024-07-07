<x-layout>
    <x-slot name="page_name">Halaman Divisi / Edit</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/divisi/update', $divisi->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="kode" class="col-sm-4 col-form-label">Kode</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan Kode" value="{{ $divisi->kode }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">Nama Divisi</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Kecamatan" value="{{ $divisi->name }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="manager" class="col-sm-4 col-form-label">Nama Manager</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="manager" name="manager" placeholder="Masukkan Nama Kecamatan" value="{{ $divisi->manager }}">
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