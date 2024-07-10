<x-layout>
    <x-slot name="page_name">Halaman Pengajuan Cuti / Show</x-slot>
    <x-slot name="page_title">Berikut adalah tampilan Detail Pengajuan Cuti yang dipilih :</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered ">
            <tr class="table-info">
                <th>No</th>
                <th>NIP</th>
                <th>Tanggal Awal</th>
                <th>Tanggal Akhir</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
            <tr>
                <td>{{ $pengajuan_cuti->id}}</td>
                <td>{{ $pengajuan_cuti->nip }}</td>
                <td>{{ $pengajuan_cuti->tgl_awal }}</td>
                <td>{{ $pengajuan_cuti->tgl_akhir }}</td>
                <td>{{ $pengajuan_cuti->jumlah }}</td>
                <td>{{ $pengajuan_cuti->ket }}</td>
                <td>{{ $pengajuan_cuti->status }}</td>
                <td>{{ $pengajuan_cuti->created_at }}</td>
                <td>{{ $pengajuan_cuti->updated_at }}</td>

            </tr>
        </table>
    </x-slot>
</x-layout>