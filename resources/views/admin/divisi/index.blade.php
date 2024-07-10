<x-layout>
    <x-slot name="page_name">Halaman Divisi</x-slot>
    <x-slot name="page_title">Berikut adalah data Divisi Perusahaan:</x-slot>
    <x-slot name="page_content">

        @if (session('pesan'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @if (session('update'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('update') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @if (session('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        <a href="{{ url('dashboard/divisi/create')}}" class="btn btn-primary">+ Tambah Divisi</a>
        <br><br>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Id</th>
                <th>Kode</th>
                <th>Nama Divisi</th>
                <th>Nama Manager</th>
                <th>Aksi</th>
            </tr>
            @foreach ($list_divisi as $divisi)
            <tr>
                <td>{{ $divisi->id }}</td>
                <td>{{ $divisi->kode }}</td>
                <td>{{ $divisi->name }}</td>
                <td>{{ $divisi->manager }}</td>
                <td><a href="{{ route('divisi.show', $divisi->id) }}" class="btn btn-primary text-light"> <i class="far fa-eye"></i> Lihat </a> |
                    <button type="submit" class="btn btn-warning"><a href="{{url('dashboard/divisi/edit', $divisi->id) }}" class="text-dark"><i class="far fa-edit"></i> Edit</a></button> |
                    <form action="{{url('dashboard/divisi/destroy', $divisi->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="far fa-trash-alt"></i>Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>