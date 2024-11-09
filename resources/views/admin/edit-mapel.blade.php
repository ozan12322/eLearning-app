<x-app-layout>
    <section
        class="flex flex-col w-full px-6 pt-10 pb-5 md:justify-between md:items-center md:flex-row"
    >
        <div>
            <h2 class="text-2xl font-semibold text-gray-600">Edit Mapel</h2>
        </div>
    </section>

    <hr />

    <section class="pt-16">
        <form
            class="max-w-md mx-auto"
            action="{{ route('admin.update-mapel', $id->id) }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf @method('put')
            <div class="mb-5">
                <label
                    for="nama_mapel"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Nama</label
                >
                <input
                    type="text"
                    id="nama_mapel"
                    name="nama_mapel"
                    value="{{ $id->nama_mapel }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
            </div>
            <div class="mb-5">
                <label
                    for="slug"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Slug</label
                >
                <input
                    type="text"
                    id="slug"
                    name="slug"
                    value="{{ $id->slug }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
