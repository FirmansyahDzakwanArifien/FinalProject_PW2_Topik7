<x-layout>
    <x-slot name="page_name">Halaman Pegawai / Show</x-slot>
    <x-slot name="page_title">Berikut adalah tampilan Detail Pegawai yang dipilih :</x-slot>
    <x-slot name="page_content">
        @if($pegawai !== null)
        <div class="table-responsive">
            <table class="table table-bordered ">
                <tr class="table-info">
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>No.Handphone</th>
                    <th>Alamat</th>
                    <th>Divisi</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
                <tr>
                    <td>{{ $pegawai->nip}}</td>
                    <td>{{ $pegawai->nama}}</td>
                    <td>{{ $pegawai->gender }}</td>
                    <td>{{ $pegawai->tmp_lahir }}</td>
                    <td>{{ $pegawai->tgl_lahir }}</td>
                    <td>{{ $pegawai->telpon}}</td>
                    <td>{{ $pegawai->alamat }}</td>
                    <td>{{ $pegawai->divisi_id }}</td>
                    <td>{{ $pegawai->created_at }}</td>
                    <td>{{ $pegawai->updated_at }}</td>
                </tr>
            </table>
        </div>
        @else <p>Pegawai not found.</p> @endif
    </x-slot>
</x-layout>