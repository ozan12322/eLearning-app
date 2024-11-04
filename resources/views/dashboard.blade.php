<x-app-layout>
    <section
        class="flex flex-col w-full px-6 pt-10 pb-5 md:justify-between md:items-center md:flex-row"
    >
        <div>
            <h2 class="text-2xl font-semibold text-gray-600">Dashboard</h2>
        </div>
    </section>
    <hr />

    <h3 class="py-5 font-medium text-xl text-gray-500 text-center">
        Hello {{ Auth::user()->name }}, Selamat Datang!
    </h3>

    @if(auth()->user()->hasRole('admin'))
    <section
        class="grid grid-cols-1 gap-8 px-6 pt-10 xl:grid-cols-3 2xl:grid-cols-4 md:grid-cols-2"
    >
        <div
            class="flex items-center px-6 py-8 bg-white rounded-lg shadow-lg border shadow-gray-200"
        >
            <div class="flex items-center -mx-2">
                <svg
                    class="mx-2"
                    width="70"
                    height="70"
                    viewBox="0 0 70 70"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <circle
                        cx="35"
                        cy="35"
                        r="35"
                        fill="#713BDB"
                        fill-opacity="0.05"
                    />
                    <path
                        d="M26 44C26 40.625 30.5 40.625 32.75 38.375C33.875 37.25 30.5 37.25 30.5 31.625C30.5 27.8754 31.9996 26 35 26C38.0004 26 39.5 27.8754 39.5 31.625C39.5 37.25 36.125 37.25 37.25 38.375C39.5 40.625 44 40.625 44 44"
                        stroke="#6F52ED"
                        stroke-width="2"
                        stroke-linecap="square"
                    />
                </svg>

                <div class="mx-2">
                    <h3 class="text-2xl font-medium text-gray-800">62</h3>
                    <p class="mt-1 text-sm text-gray-500">Guru</p>
                </div>
            </div>
        </div>

        <div
            class="flex items-center px-6 py-8 bg-white rounded-lg shadow-lg border shadow-gray-200"
        >
            <div class="flex items-center -mx-2">
                <svg
                    class="mx-2"
                    width="70"
                    height="70"
                    viewBox="0 0 70 70"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <circle
                        cx="35"
                        cy="35"
                        r="35"
                        fill="#713BDB"
                        fill-opacity="0.05"
                    />
                    <path
                        d="M26 44C26 40.625 30.5 40.625 32.75 38.375C33.875 37.25 30.5 37.25 30.5 31.625C30.5 27.8754 31.9996 26 35 26C38.0004 26 39.5 27.8754 39.5 31.625C39.5 37.25 36.125 37.25 37.25 38.375C39.5 40.625 44 40.625 44 44"
                        stroke="#6F52ED"
                        stroke-width="2"
                        stroke-linecap="square"
                    />
                </svg>

                <div class="mx-2">
                    <h3 class="text-2xl font-medium text-gray-800">62</h3>
                    <p class="mt-1 text-sm text-gray-500">Siswa</p>
                </div>
            </div>
        </div>

        <div
            class="flex items-center px-6 py-8 bg-white rounded-lg shadow-lg border shadow-gray-200"
        >
            <div class="flex items-center -mx-2">
                <svg
                    class="mx-2"
                    width="70"
                    height="70"
                    viewBox="0 0 70 70"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <circle
                        cx="35"
                        cy="35"
                        r="35"
                        fill="#713BDB"
                        fill-opacity="0.05"
                    />
                    <path
                        d="M26 44C26 40.625 30.5 40.625 32.75 38.375C33.875 37.25 30.5 37.25 30.5 31.625C30.5 27.8754 31.9996 26 35 26C38.0004 26 39.5 27.8754 39.5 31.625C39.5 37.25 36.125 37.25 37.25 38.375C39.5 40.625 44 40.625 44 44"
                        stroke="#6F52ED"
                        stroke-width="2"
                        stroke-linecap="square"
                    />
                </svg>

                <div class="mx-2">
                    <h3 class="text-2xl font-medium text-gray-800">62</h3>
                    <p class="mt-1 text-sm text-gray-500">Kelas</p>
                </div>
            </div>
        </div>
    </section>
    @endif
</x-app-layout>
