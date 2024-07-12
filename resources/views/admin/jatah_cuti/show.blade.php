<x-layout>
    <x-slot name="page_name">Halaman Divisi / Show</x-slot>
    <x-slot name="page_title">Berikut adalah tampilan Detail Jatah Cuti yang dipilih :</x-slot>
    <x-slot name="page_content">
        <div class="table-responsive">
            <table class="table table-bordered ">
                <tr class="table-info">
                    <th>No</th>
                    <th>Tahun</th>
                    <th>Jumlah</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
                <tr>
                    <td>{{ $jatah_cuti->id}}</td>
                    <td>{{ $jatah_cuti->tahun }}</td>
                    <td>{{ $jatah_cuti->jumlah }}</td>
                    <td>{{ $jatah_cuti->created_at }}</td>
                    <td>{{ $jatah_cuti->updated_at }}</td>
    
                </tr>
            </table>
        </div>
    </x-slot>
</x-layout>