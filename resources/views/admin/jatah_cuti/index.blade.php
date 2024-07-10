<x-layout>
    <x-slot name="page_name">Halaman Jatah Cuti</x-slot>
    <x-slot name="page_title">Berikut adalah data Jatah Cuti Pegawai :</x-slot>
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


        <a href="{{ url('dashboard/jatah_cuti/create')}}" class="btn btn-primary">+ Tambah Jatah Cuti</a>
        <br><br>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Id</th>
                <th>Tahun</th>
                <th>Jumlah</th>
                <th>NIP</th>
                <th>Aksi</th>
            </tr>
            @foreach ($list_jatah as $jatah)
            <tr>
                <td>{{ $jatah->id }}</td>
                <td>{{ $jatah->tahun }}</td>
                <td>{{ $jatah->jumlah }}</td>
                <td>{{ $jatah->nip }}</td>
                <td><a href="{{ route('jatah_cuti.show', $jatah->id) }}" class="btn btn-primary text-light"> <i class="far fa-eye"></i> Lihat </a> |
                    <button type="submit" class="btn btn-warning"><a href="{{url('dashboard/jatah_cuti/edit', $jatah->id) }}" class="text-dark"><i class="far fa-edit"></i> Edit</a></button> |
                    <form action="{{url('dashboard/jatah_cuti/destroy', $jatah->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="far fa-trash-alt"></i> Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>