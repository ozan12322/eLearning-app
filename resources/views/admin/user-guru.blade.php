<x-app-layout>
    <section
        class="flex flex-col w-full px-6 pt-10 pb-5 md:justify-between md:items-center md:flex-row"
    >
        <div>
            <h2 class="text-2xl font-semibold text-gray-600">Daftar Guru</h2>
        </div>
    </section>

    <hr />

    <section class="pt-16">
        <div class="relative overflow-x-auto shadow-lg sm:rounded-lg">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8">
                <div class="flex">
                    <!-- modal tambah data guru -->
                    <button
                        data-modal-target="crud-modal"
                        data-modal-toggle="crud-modal"
                        class="block text-white mb-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button"
                    >
                        Tambah Data Guru
                    </button>
                    <!-- Main modal -->
                    <div
                        id="crud-modal"
                        tabindex="-1"
                        aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
                    >
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div
                                class="relative bg-white rounded-lg shadow dark:bg-gray-700"
                            >
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600"
                                >
                                    <h3
                                        class="text-lg font-semibold text-gray-900 dark:text-white"
                                    >
                                        Tambah Data Guru Baru
                                    </h3>
                                    <button
                                        type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="crud-modal"
                                    >
                                        <svg
                                            class="w-3 h-3"
                                            aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 14 14"
                                        >
                                            <path
                                                stroke="currentColor"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                                            />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form
                                    class="p-4 md:p-5"
                                    action="{{
                                        route('admin.tambah-data-guru')
                                    }}"
                                    method="POST"
                                    enctype="multipart/form-data"
                                >
                                    @csrf
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-2">
                                            <label
                                                for="nama_guru"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                >Nama</label
                                            >
                                            <input
                                                type="text"
                                                name="nama_guru"
                                                id="nama_guru"
                                                value="{{ old('nama_guru') }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Masukan nama..."
                                            />
                                        </div>
                                        <div class="col-span-2">
                                            <label
                                                for="email_guru"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                >Email</label
                                            >
                                            <input
                                                type="email"
                                                name="email_guru"
                                                id="email_guru"
                                                value="{{ old('email_guru') }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Masukan email..."
                                            />
                                        </div>
                                        <div class="col-span-2">
                                            <label
                                                for="kelas_guru"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                >Kelas</label
                                            >
                                            <select
                                                id="kelas_guru"
                                                name="kelas_guru"
                                                value="{{ old('kelas_guru') }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            >
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>
                                        <div class="col-span-2">
                                            <label
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="foto_guru"
                                                >Upload Foto Profil</label
                                            >
                                            <input
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                aria-describedby="foto_guru"
                                                id="foto_guru"
                                                name="foto_guru"
                                                value="{{ old('foto_guru') }}"
                                                type="file"
                                            />
                                        </div>
                                    </div>
                                    <button
                                        type="submit"
                                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    >
                                        <svg
                                            class="me-1 -ms-1 w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        Tambah
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex">
                    <!-- modal tambah user guru -->
                    <div
                        x-data="{ isOpen: false }"
                        class="relative flex ml-auto"
                    >
                        <button
                            @click="isOpen = true"
                            class="block text-white mb-5 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800"
                        >
                            Tambah User Guru
                        </button>

                        <div
                            x-show="isOpen"
                            x-transition:enter="transition duration-300 ease-out"
                            x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                            x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
                            x-transition:leave="transition duration-150 ease-in"
                            x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
                            x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                            class="fixed inset-0 z-10 overflow-y-auto"
                            aria-labelledby="modal-title"
                            role="dialog"
                            aria-modal="true"
                        >
                            <div
                                class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0"
                            >
                                <span
                                    class="hidden sm:inline-block sm:h-screen sm:align-middle"
                                    aria-hidden="true"
                                    >&#8203;</span
                                >

                                <div
                                    class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:w-full sm:max-w-sm sm:p-6 sm:align-middle"
                                >
                                    <h3
                                        class="text-lg font-medium leading-6 text-gray-800 capitalize dark:text-white"
                                        id="modal-title"
                                    >
                                        Tambah User Guru
                                    </h3>

                                    <form
                                        class="p-4 md:p-5"
                                        action="{{
                                            route('admin.tambah-user-guru')
                                        }}"
                                        method="POST"
                                        enctype="multipart/form-data"
                                    >
                                        @csrf
                                        <div
                                            class="grid gap-4 mb-4 grid-cols-2"
                                        >
                                            <div class="col-span-2">
                                                <label
                                                    for="name"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                    >Nama</label
                                                >
                                                <input
                                                    type="text"
                                                    name="name"
                                                    id="name"
                                                    value="{{ old('name') }}"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="Masukan nama..."
                                                />
                                            </div>
                                            <div class="col-span-2">
                                                <label
                                                    for="email"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                    >Email</label
                                                >
                                                <input
                                                    type="email"
                                                    name="email"
                                                    id="email"
                                                    value="{{ old('email') }}"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="Masukan email..."
                                                />
                                            </div>
                                            <div class="col-span-2">
                                                <label
                                                    for="password"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                    >Password</label
                                                >
                                                <input
                                                    type="password"
                                                    name="password"
                                                    id="password"
                                                    value="{{
                                                        old('password')
                                                    }}"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="Masukan password..."
                                                />
                                            </div>
                                        </div>
                                        <div
                                            class="mt-4 sm:flex sm:items-center sm:-mx-2"
                                        >
                                            <button
                                                type="button"
                                                @click="isOpen = false"
                                                class="w-full px-4 py-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:w-1/2 sm:mx-2 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                            >
                                                Cancel
                                            </button>

                                            <button
                                                type="submit"
                                                class="w-full px-4 py-2 mt-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md sm:mt-0 sm:w-1/2 sm:mx-2 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                                            >
                                                Tambah
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table Guru -->
            <table
                class="w-full text-sm text-left border rtl:text-right text-gray-500 dark:text-gray-400"
            >
                <thead
                    class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400"
                >
                    <tr>
                        <th scope="col" class="px-10 py-3 text-center">Foto</th>
                        <th scope="col" class="px-10 py-3 text-center">Nama</th>
                        <th scope="col" class="px-16 py-3 text-center">
                            Email
                        </th>
                        <th scope="col" class="px-10 py-3 text-center">
                            Kelas
                        </th>
                        <th scope="col" class="py-3"></th>
                        <th scope="col" class="py-3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($guru as $guru)
                    <tr
                        class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"
                    >
                        <td class="px-10 py-4">
                            @empty($guru->foto_guru)
                            <img
                                src="{{ url('img/guru/') }}"
                                class="w-32 mx-auto"
                            />
                            @else
                            <img
                                src="{{
                                    url('img/guru')
                                }}/{{ $guru->foto_guru }}"
                                class="w-32 mx-auto"
                            />
                            @endempty
                        </td>
                        <th
                            scope="row"
                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                        >
                            {{ $guru->nama_guru }}
                        </th>
                        <td class="px-16 py-4">{{ $guru->email_guru }}</td>
                        <td class="px-10 py-4">{{ $guru->kelas_guru }}</td>
                        <td class="py-4">
                            <a
                                href="{{ route('admin.edit-guru', $guru->id) }}"
                                class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                            >
                                Edit
                            </a>
                        </td>
                        <td class="py-4">
                            <div class="relative flex justify-center">
                                <button
                                    data-modal-target="popup-modal"
                                    data-modal-toggle="popup-modal"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                    type="button"
                                >
                                    Hapus
                                </button>

                                <div
                                    id="popup-modal"
                                    tabindex="-1"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
                                >
                                    <div
                                        class="relative p-4 w-full max-w-md max-h-full"
                                    >
                                        <div
                                            class="relative bg-white rounded-lg shadow dark:bg-gray-700"
                                        >
                                            <button
                                                type="button"
                                                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="popup-modal"
                                            >
                                                <svg
                                                    class="w-3 h-3"
                                                    aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 14 14"
                                                >
                                                    <path
                                                        stroke="currentColor"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                                                    />
                                                </svg>
                                                <span class="sr-only"
                                                    >Close modal</span
                                                >
                                            </button>
                                            <div class="p-4 md:p-5 text-center">
                                                <svg
                                                    class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                    aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 20 20"
                                                >
                                                    <path
                                                        stroke="currentColor"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                                                    />
                                                </svg>
                                                <h3
                                                    class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400"
                                                >
                                                    Are you sure you want to
                                                    delete this data?
                                                </h3>
                                                <form
                                                    action="{{ route('admin.delete-guru', $guru->id) }}"
                                                    method="POST"
                                                    class="pb-2"
                                                >
                                                    @csrf @method('DELETE')
                                                    <button
                                                        data-modal-hide="popup-modal"
                                                        type="submit"
                                                        class="mx-auto text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center"
                                                    >
                                                        Yes, I'm sure
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-app-layout>
