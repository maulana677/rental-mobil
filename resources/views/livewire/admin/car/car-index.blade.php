<div>
    <div class="d-flex align-items-center justify-content-between mb-5">
        <h2 class="text-dark fw-semibold">Daftar Mobil</h2>
        <a wire:navigate href="{{ route('admin.daftar-mobil.create') }}" class="btn btn-primary">
            <i class="bx bx-plus"></i>Tambah Mobil
        </a>
    </div>

    <div class="card border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Merek</th>
                            <th>Model</th>
                            <th>Warna</th>
                            <th>Tahun Pembuatan</th>
                            <th>Kapasitas Penumpang</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle">
                            <td>1</td>
                            <td>
                                <img src="{{ url('assets/images/cars/agya_lrg.jpg') }}" alt="Mobil 1"
                                    class="rounded-md" style="width: 80px;">
                            </td>
                            <td>Agya</td>
                            <td>Avanza</td>
                            <td>Merah</td>
                            <td>2020</td>
                            <td>5 Kursi</td>
                            <td>Rp. 760.000/hari</td>
                            <td><span class="badge bg-primary">On Going</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-light rounded-circle p-2" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"
                                        style="width: 40px; height: 40px;">
                                        <i class="bx bx-dots-horizontal"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>2</td>
                            <td>
                                <img src="{{ url('assets/images/cars/avanza_lrg.jpg') }}" alt="Mobil 1"
                                    class="rounded-md" style="width: 80px;">
                            </td>
                            <td>Agya</td>
                            <td>Avanza</td>
                            <td>Merah</td>
                            <td>2020</td>
                            <td>5 Kursi</td>
                            <td>Rp. 760.000/hari</td>
                            <td><span class="badge bg-primary">On Going</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-light rounded-circle p-2" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"
                                        style="width: 40px; height: 40px;">
                                        <i class="bx bx-dots-horizontal"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
