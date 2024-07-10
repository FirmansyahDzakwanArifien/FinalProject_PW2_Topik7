@use(App\Models\User)

<x-layout>
  <x-slot name="page_name">Halaman Pegawai</x-slot>
  <x-slot name="page_title">Berikut adalah data pegawai :</x-slot>
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

      @Auth
      @if (Auth::user()->role == User:: ROLE_ADMIN)
      <a href="{{ url('dashboard/pegawai/create')}}" class="btn btn-primary">+ Tambah Pegawai</a>
      @endif
      @endauth

      <br><br>
      <table class="table table-bordered">
          <tr class="table-success">
              <th>NIP</th>
              <th>Nama</th>
              <th>Gender</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>No.Handphone</th>
              <th>Alamat</th>
              <th>Divisi</th>
              <th>Aksi</th>
          </tr>
          @foreach ($list_pegawai as $pegawai)
          <tr>
              <td>{{ $pegawai->nip}}</td>
              <td>{{ $pegawai->nama}}</td>
              <td>{{ $pegawai->gender}}</td>
              <td>{{ $pegawai->tmp_lahir}}</td>
              <td>{{ $pegawai->tgl_lahir}}</td>
              <td>{{ $pegawai->telpon}}</td>
              <td>{{ $pegawai->alamat}}</td>
              <td>{{ $pegawai->divisi_id}}</td>
              <td><a href="{{ route('pegawai.show', $pegawai->nip) }}" class="btn btn-primary text-light"> <i class="far fa-eye"></i> Lihat </a> 
                @Auth
              @if (Auth::user()->role == User:: ROLE_ADMIN)
                <button type="submit" class="btn btn-warning"><a href="{{url('dashboard/pegawai/edit', $pegawai->nip) }}" class="text-dark"><i class="far fa-edit"></i> Edit</a></button> 
                <form action="{{url('dashboard/pegawai/destroy', $pegawai->nip)}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="far fa-trash-alt"></i> Hapus</button>
              </form>
              @endif
              @endauth

              </td>
          </tr>
          @endforeach
      </table>
  </x-slot>
</x-layout>

