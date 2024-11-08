<x-app-layout>
    <section
        class="flex flex-col w-full px-6 pt-10 pb-5 md:justify-between md:items-center md:flex-row"
    >
        <div>
            <h2 class="text-2xl font-semibold text-gray-600">Edit Data Siswa</h2>
        </div>
    </section>

    <hr />

    <section class="pt-16">
        <form
            class="max-w-md mx-auto"
            action="{{ route('admin.update-siswa', $id->id) }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf @method('put')
            <div class="mb-5">
                <label
                    for="nama_siswa"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Nama</label
                >
                <input
                    type="text"
                    id="nama_siswa"
                    name="nama_siswa"
                    value="{{ $id->nama_siswa }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
            </div>
            <div class="mb-5">
                <label
                    for="email_siswa"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Email</label
                >
                <input
                    type="email"
                    id="email_siswa"
                    name="email_siswa"
                    value="{{ $id->email_siswa }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
            </div>
            <div class="mb-5">
                <label
                    for="kelas_siswa"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Kelas</label
                >
                <input
                    type="text"
                    id="kelas_siswa"
                    name="kelas_siswa"
                    value="{{ $id->kelas_siswa }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
            </div>
            <div class="mb-5">
                <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    for="foto_siswa"
                    >Upload Foto Profil</label
                >
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="foto_siswa"
                    id="foto_siswa"
                    name="foto_siswa"
                    value="{{ $id->foto_siswa }}"
                    type="file"
                />
            </div>
            <button
                type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
                Edit
            </button>
        </form>
    </section>
</x-app-layout>
