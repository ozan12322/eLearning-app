<x-app-layout>
    <section
        class="flex flex-col w-full px-6 pt-10 pb-5 md:justify-between md:items-center md:flex-row"
    >
        <div>
            <h2 class="text-2xl font-semibold text-gray-600">Tugas</h2>
        </div>
    </section>
    <hr />

    <section class="pt-16">
        <div class="pb-16">
            <div x-data="{ isOpen: false }" class="relative flex">
                <button
                    @click="isOpen = true"
                    class="group relative inline-block text-sm font-medium text-green-600 focus:outline-none focus:ring active:text-green-500"
                >
                    <span class="absolute inset-0 border border-current"></span>
                    <span
                        class="block border border-current bg-white px-12 py-3 transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1"
                    >
                        Tambah Tugas
                    </span>
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
                            class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-lime-200 rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:w-full sm:max-w-sm sm:p-6 sm:align-middle"
                        >
                            <h3
                                class="text-lg font-medium leading-6 text-gray-800 capitalize dark:text-white"
                                id="modal-title"
                            >
                                Tambah Tugas Baru
                            </h3>

                            <form
                                class="mt-4"
                                action=""
                                method="post"
                                enctype="multipart/form-data"
                            >
                                @csrf
                                <label
                                    for="nama_tugas"
                                    class="text-sm text-gray-700 dark:text-gray-200"
                                >
                                    Judul Tugas
                                </label>

                                <label class="block mt-3" for="nama_tugas">
                                    <input
                                        type="text"
                                        name="nama_tugas"
                                        id="nama_tugas"
                                        value="{{ old('nama_tugas') }}"
                                        placeholder="isikan nama tugas..."
                                        class="block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300"
                                    />
                                </label>

                                <label
                                    for="deskripsi_tugas"
                                    class="text-sm text-gray-700 dark:text-gray-200"
                                    >Deskripsi Tugas</label
                                >
                                <label class="block mt-3" for="nama_tugas">
                                    <textarea
                                        id="deskripsi_tugas"
                                        name="deskripsi_tugas"
                                        value="{{ old('deskripsi_tugas') }}"
                                        rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="isikan deskripsi tugas..."
                                    ></textarea>
                                </label>

                                <label
                                    for="mapels_id"
                                    class="text-sm text-gray-700 dark:text-gray-200"
                                    >Mapel</label
                                >
                                <label class="block mt-3" for="mapels_id">
                                    <input
                                        type="text"
                                        name="mapels_id"
                                        id="mapels_id"
                                        value="{{ old('mapels_id') }}"
                                        placeholder="isikan nama tugas..."
                                        class="block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300"
                                    />
                                    </select>
                                </label>

                                <div
                                    class="mt-4 sm:flex sm:items-center sm:-mx-2"
                                >
                                    <button
                                        type="button"
                                        @click="isOpen = false"
                                        class="w-full px-4 py-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:w-1/2 sm:mx-2 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-lime-800 hover:bg-lime-100 focus:outline-none focus:ring focus:ring-lime-300 focus:ring-opacity-40"
                                    >
                                        Cancel
                                    </button>

                                    <button
                                        type="submit"
                                        class="w-full px-4 py-2 mt-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-teal-600 rounded-md sm:mt-0 sm:w-1/2 sm:mx-2 hover:bg-teal-500 focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-40"
                                    >
                                        Buat
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8">
            <div
                class="w-full max-w-sm px-4 py-3 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 rounded-md shadow-lg"
            >
                <div class="flex items-center justify-between">
                    <span
                        class="text-sm font-light text-gray-900 dark:text-gray-400"
                        >Tugas 1</span
                    >
                    <span
                        class="px-3 py-1 text-xs text-blue-900 uppercase bg-blue-200 rounded-full dark:bg-blue-300 dark:text-blue-900"
                        >matematika</span
                    >
                </div>

                <div>
                    <h1
                        class="mt-2 text-lg font-semibold text-gray-900 dark:text-white"
                    >
                        Lorem ipsum dolor sit amet.
                    </h1>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Odio eligendi similique exercitationem optio
                        libero vitae accusamus cupiditate laborum eos.
                    </p>
                </div>

                <div
                    class="flex items-center mt-2 text-gray-700 dark:text-gray-200"
                >
                    <a
                        class="mx-auto text-teal-500 cursor-pointer dark:text-teal-400 hover:underline"
                        tabindex="0"
                        role="link"
                        >buka tugas</a
                    >
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
