<x-app-layout>
    <section
        class="flex flex-col w-full px-6 pt-10 pb-5 md:justify-between md:items-center md:flex-row"
    >
        <div>
            <h2 class="text-2xl font-semibold text-gray-600">Daftar Kelas</h2>
        </div>
    </section>

    <hr />

    <section class="pt-16">
        <div
            class="relative overflow-x-auto w-40 mx-auto shadow-lg sm:rounded-lg"
        >
            <!-- Table Kelas -->
            <table
                class="w-40 text-sm text-center border rtl:text-right text-gray-500 dark:text-gray-400"
            >
                <thead
                    class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400"
                >
                    <tr>
                        <th scope="col" class="px-10 py-3">Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kelas as $kelas)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"
                    >
                        <td class="px-10 py-4">{{ $kelas->nama_kelas }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-app-layout>
