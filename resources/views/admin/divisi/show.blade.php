<x-layout>
    <x-slot name="page_name">Halaman Divisi / Show</x-slot>
    <x-slot name="page_title">Berikut adalah tampilan Detail Divisi yang dipilih :</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered ">
            <tr class="table-info">
                <th>No</th>
                <th>Kode</th>
                <th>Nama Divisi</th>
                <th>Nama Manager</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
            <tr>
                <td>{{ $divisi->id}}</td>
                <td>{{ $divisi->kode }}</td>
                <td>{{ $divisi->name }}</td>
                <td>{{ $divisi->manager }}</td>
                <td>{{ $divisi->created_at }}</td>
                <td>{{ $divisi->updated_at }}</td>

            </tr>
        </table>
    </x-slot>
</x-layout>