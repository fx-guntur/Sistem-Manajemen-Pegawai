<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon.png') }}" />
    <title>Employee Management System</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="{{ asset('/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />
</head>

<body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>
    <!-- sidenav  -->
    <aside
        class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
        aria-expanded="false">
        <div class="h-19">
            <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden"
                sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700"
                href="{{ route('employees.index') }}">
                <img src="{{ asset('/img/logo-ct-dark.png') }}"
                    class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"
                    alt="main_logo" />
                <img src="{{ asset('/img/logo-ct.png') }}"
                    class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8"
                    alt="main_logo" />
                <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Manajemen Karyawan</span>
            </a>
        </div>

        <hr
            class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="{{ route('employees.index') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-badge"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Karyawan</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="{{ route('contracts.index') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-folder-17"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Kontrak</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                        href="{{ route('positions.index') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-folder-17"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Jabatan</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- end sidenav -->

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        <!-- Navbar -->
        <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
            navbar-main navbar-scroll="false">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                <nav>
                    <!-- breadcrumb -->
                    <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                        <li class="text-sm leading-normal">
                            <a class="text-white opacity-50" href="javascript:;">Pages</a>
                        </li>
                        <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
                            aria-current="page">Jabatan</li>
                    </ol>
                    <h6 class="mb-0 font-bold text-white capitalize">Jabatan</h6>
                </nav>
            </div>
        </nav>
        <!-- end navbar -->

        <div class="w-full px-6 py-6 mx-auto">
            <!-- table 1 -->

            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div
                            class="flex items-center justify-between p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6 class="dark:text-white">Daftar Jabatan Karyawan</h6>
                            <a href="javascript:;"
                                class="text-xs font-semibold leading-tight text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-lg transition-all"
                                onclick="openCreateSwal()">
                                Add
                            </a>

                        </div>

                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table id="positionTable"
                                    class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Jabatan Karyawan
                                            </th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Description
                                            </th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($positions as $position)
                                            <tr>
                                                <td
                                                    class="px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                        {{ $position->name }}</h6>
                                                </td>
                                                <td
                                                    class="px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                        {{ $position->description }}</h6>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <a href="javascript:;"
                                                        onclick="openEditSwal('{{ $position->id }}', '{{ $position->name }}', '{{ $position->description }}')"
                                                        class="text-blue-500">Edit</a> |
                                                    <button type="button" onclick="confirmDelete({{ $position->id }})"
                                                        class="text-red-500 hover:underline">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mt-4">
                                    {{ $positions->links() }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<!-- plugin for charts  -->
<script src="{{ asset('/js/plugins/chartjs.min.js') }}" async></script>
<!-- plugin for scrollbar  -->
<script src="{{ asset('/js/plugins/perfect-scrollbar.min.js') }}" async></script>
<!-- main script file  -->
<script src="{{ asset('/js/argon-dashboard-tailwind.js?v=1.0.1') }}" async></script>
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function openCreateSwal() {
        Swal.fire({
            title: 'Tambah Tipe Posisi',
            html: `
            <input id="swal-input-name" class="swal2-input" placeholder="Nama Jabatan">
            <input id="swal-input-description" class="swal2-input" placeholder="Deskripsi">
        `,
            showCancelButton: true,
            confirmButtonText: 'Simpan',
            cancelButtonText: 'Batal',
            customClass: {
                confirmButton: 'bg-blue-500 hover:bg-blue-600 text-white font-medium px-4 py-2 rounded',
                cancelButton: 'bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium px-4 py-2 rounded'
            },
            buttonsStyling: false,
            preConfirm: () => {
                const position_name = document.getElementById('swal-input-name').value.trim();
                const position_description = document.getElementById('swal-input-description').value.trim();

                if (!position_name) {
                    Swal.showValidationMessage('Nama jabatan tidak boleh kosong');
                    return false;
                }

                return fetch(`{{ route('positions.store') }}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        name: position_name,
                        description: position_description
                    })
                }).then(response => {
                    if (!response.ok) {
                        throw new Error('Gagal menyimpan');
                    }
                    return response.json();
                }).catch(error => {
                    Swal.showValidationMessage(`Gagal menyimpan: ${error.message}`);
                });
            }
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Jabatan berhasil ditambahkan.',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'bg-blue-500 hover:bg-blue-600 text-white font-medium px-4 py-2 rounded'
                    },
                    buttonsStyling: false
                }).then(() => {
                    location.reload();
                });
            }
        });
    }


    function openEditSwal(id, position_name, position_description) {
        Swal.fire({
            title: 'Edit Jabatan',
            html: `
            <input id="swal-input-name" class="swal2-input" value="${position_name}" placeholder="Nama Jabatan">
            <input id="swal-input-description" class="swal2-input" value="${position_description}" placeholder="Deskripsi">
        `,
            showCancelButton: true,
            confirmButtonText: 'Simpan',
            cancelButtonText: 'Batal',
            customClass: {
                confirmButton: 'bg-blue-500 hover:bg-blue-600 text-white font-medium px-4 py-2 rounded',
                cancelButton: 'bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium px-4 py-2 rounded'
            },
            buttonsStyling: false,
            preConfirm: () => {
                const name = document.getElementById('swal-input-name').value.trim();
                const description = document.getElementById('swal-input-description').value.trim();

                if (!name) {
                    Swal.showValidationMessage('Nama jabatan tidak boleh kosong');
                    return false;
                }

                if (!description) {
                    Swal.showValidationMessage('Deskripsi tidak boleh kosong');
                    return false;
                }

                return fetch(`/positions/${id}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        _method: 'PUT',
                        name: name,
                        description: description
                    })
                }).then(response => {
                    if (!response.ok) {
                        throw new Error('Gagal menyimpan');
                    }
                    return response.json();
                }).catch(error => {
                    Swal.showValidationMessage(`Gagal menyimpan: ${error.message}`);
                });
            }
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Jabatan berhasil diperbarui.',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'bg-blue-500 hover:bg-blue-600 text-white font-medium px-4 py-2 rounded'
                    },
                    buttonsStyling: false
                }).then(() => {
                    location.reload();
                });
            }
        });
    }

    function confirmDelete(positionId) {
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data jabatan akan dihapus permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal',
            customClass: {
                confirmButton: 'bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600',
                cancelButton: 'bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400'
            },
            buttonsStyling: false
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(`/positions/${positionId}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({
                            _method: 'DELETE'
                        })
                    })
                    .then(response => {
                        if (response.ok) {
                            Swal.fire({
                                title: 'Terhapus!',
                                text: 'Data jabatan berhasil dihapus.',
                                icon: 'success',
                                confirmButtonText: 'OK',
                                customClass: {
                                    confirmButton: 'bg-blue-500 hover:bg-blue-600 text-white font-medium px-4 py-2 rounded'
                                },
                                buttonsStyling: false
                            }).then(() => location.reload());
                        } else {
                            Swal.fire('Gagal!', 'Tidak dapat menghapus data.', 'error');
                        }
                    })
                    .catch(() => {
                        Swal.fire('Gagal!', 'Terjadi kesalahan jaringan.', 'error');
                    });
            }
        });
    }
</script>

</html>
