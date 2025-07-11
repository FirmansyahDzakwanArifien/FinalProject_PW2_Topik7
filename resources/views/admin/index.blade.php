@use(App\Models\User)
<x-layout>
    <x-slot name="page_name">Dashboard</x-slot>
    <x-slot name="page_title">Selamat Datang di Dashboard Cuti</x-slot>
    <x-slot name="page_content">
        <div class="row">
            @Auth
            @if (Auth::user()->role == User:: ROLE_ADMIN)
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $divisiCount }}<sup style="font-size: 20px"></sup></h3>
                        <p>Divisi</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <a href="{{ url('dashboard/divisi') }}" class="small-box-footer">Lihat Data Divisi <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            @endif
            @endauth
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $pegawaiCount }}<sup style="font-size: 20px"></sup></h3>
                        <p>Pegawai</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <a href="{{ url('dashboard/pegawai') }}" class="small-box-footer">Lihat Data Pegawai <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $pengajuan_cutiCount }}<sup style="font-size: 20px"></sup></h3>
                        <p>Pengajuan Cuti</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon fas fa-edit"></i>
                    </div>
                    <a href="{{ url('dashboard/pengajuan_cuti') }}" class="small-box-footer">lihat Pengajuan <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            @Auth
            @if (Auth::user()->role == User:: ROLE_ADMIN)
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $jatahcutiCount }}</h3>
                        <p>Jatah Cuti</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <a href="{{ url('dashboard/jatah_cuti') }}" class="small-box-footer">Lihat jatah Cuti <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            @endif
            @endauth    
        </div>
    </x-slot>
</x-layout>