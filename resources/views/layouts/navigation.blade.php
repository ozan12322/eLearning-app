<button
    data-drawer-target="default-sidebar"
    data-drawer-toggle="default-sidebar"
    aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
>
    <span class="sr-only">Open sidebar</span>
    <svg
        class="w-6 h-6"
        aria-hidden="true"
        fill="currentColor"
        viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg"
    >
        <path
            clip-rule="evenodd"
            fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
        ></path>
    </svg>
</button>

<aside
    id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar"
>
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-100 dark:bg-gray-800">
        <div class="mb-8 mt-3">
            <h2 class="font-bold text-2xl text-gray-600 text-center">
                E-Learning
            </h2>
        </div>

        <hr />

        <nav class="-mx-3 space-y-6 mt-3">
            <div class="flex flex-col items-center mt-6 -mx-2">
                <img
                    class="object-cover w-24 h-24 mx-2 rounded-full"
                    src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                    alt="avatar"
                />
                <h4
                    class="mx-2 mt-2 font-medium text-gray-800 dark:text-gray-200"
                >
                    {{ Auth::user()->name }}
                </h4>
                <p
                    class="mx-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-400"
                >
                    {{ Auth::user()->email }}
                </p>
            </div>
            <div class="space-y-3">
                <a
                    class="{{ request()->is('dashboard') ? 'bg-gray-200 text-gray-800' : 'text-gray-600 hover:bg-gray-200 hover:text-gray-700' }} flex items-center px-3 py-2  transition-colors duration-300 transform rounded-lg dark:text-gray-200  dark:hover:bg-gray-800 dark:hover:text-gray-200 "
                    href="/dashboard"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-5 h-5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605"
                        />
                    </svg>

                    <span class="mx-2 text-sm font-medium">Dashboard</span>
                </a>
            </div>

            <div class="space-y-3">
                @if (auth()->user()->hasRole('admin'))

                <label
                    class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400"
                    >master data</label
                >

                <a
                    class="{{ request()->is('role') ? 'bg-gray-200 text-gray-800' : 'text-gray-600 hover:bg-gray-200 hover:text-gray-700' }} flex items-center px-3 py-2  transition-colors duration-300 transform rounded-lg dark:text-gray-200  dark:hover:bg-gray-800 dark:hover:text-gray-200 "
                    href="{{ route('admin.role') }}"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-5 h-5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605"
                        />
                    </svg>

                    <span class="mx-2 text-sm font-medium">Role</span>
                </a>

                <button
                    type="button"
                    class="flex items-center px-3 py-2 w-full text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                    aria-controls="dropdown-example"
                    data-collapse-toggle="dropdown-example"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-5 h-5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"
                        />
                    </svg>

                    <span
                        class="mx-2 text-sm font-medium flex-1 ms-3 text-left rtl:text-right whitespace-nowrap"
                        >User</span
                    >

                    <svg
                        class="w-3 h-3"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 10 6"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m1 1 4 4 4-4"
                        />
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <a
                            class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="{{ route('admin.user-guru') }}"
                        >
                            <span class="mx-2 text-sm font-medium text-center"
                                >Guru</span
                            >
                        </a>
                    </li>
                    <li>
                        <a
                            class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="{{ route('admin.user-siswa') }}"
                        >
                            <span class="mx-2 text-sm font-medium">Siswa</span>
                        </a>
                    </li>
                </ul>

                <a
                    class="{{ request()->is('kelas') ? 'bg-gray-200 text-gray-800' : 'text-gray-600 hover:bg-gray-200 hover:text-gray-700' }} flex items-center px-3 py-2  transition-colors duration-300 transform rounded-lg dark:text-gray-200  dark:hover:bg-gray-800 dark:hover:text-gray-200 "
                    href="{{ route('admin.kelas') }}"
                >
                    <svg
                        class="w-5 h-5"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"
                        />
                    </svg>

                    <span class="mx-2 text-sm font-medium">Kelas</span>
                </a>

                <a
                    class="{{ request()->is('mapel') ? 'bg-gray-200 text-gray-800' : 'text-gray-600 hover:bg-gray-200 hover:text-gray-700' }} flex items-center px-3 py-2  transition-colors duration-300 transform rounded-lg dark:text-gray-200  dark:hover:bg-gray-800 dark:hover:text-gray-200 "
                    href="{{ route('admin.mapel') }}"
                >
                    <svg
                        class="w-5 h-5"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023"
                        />
                    </svg>

                    <span class="mx-2 text-sm font-medium">Mapel</span>
                </a>

                @endif
            </div>

            @if (auth()->user()->hasRole('guru') ||
            auth()->user()->hasRole('siswa'))

            <div class="space-y-3">
                <label
                    class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400"
                    >Edu</label
                >

                <a
                    class="{{ request()->is('tugas') ? 'bg-gray-200 text-gray-800' : 'text-gray-600 hover:bg-gray-200 hover:text-gray-700' }} flex items-center px-3 py-2  transition-colors duration-300 transform rounded-lg dark:text-gray-200  dark:hover:bg-gray-800 dark:hover:text-gray-200 "
                    href="/tugas"
                >
                    <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z"
                        />
                    </svg>

                    <span class="mx-2 text-sm font-medium">Tugas</span>
                </a>

                <a
                    class="{{ request()->is('exam') ? 'bg-gray-200 text-gray-800' : 'text-gray-600 hover:bg-gray-200 hover:text-gray-700' }} flex items-center px-3 py-2  transition-colors duration-300 transform rounded-lg dark:text-gray-200  dark:hover:bg-gray-800 dark:hover:text-gray-200 "
                    href="/exam"
                >
                    <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 3v4a1 1 0 0 1-1 1H5m4 8h6m-6-4h6m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z"
                        />
                    </svg>

                    <span class="mx-2 text-sm font-medium">Exam</span>
                </a>
            </div>

            @endif

            <div class="space-y-3">
                <label
                    class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400"
                    >User</label
                >

                <a
                    class="{{ request()->is('profile') ? 'bg-gray-200 text-gray-800' : 'text-gray-600 hover:bg-gray-200 hover:text-gray-700' }} flex items-center px-3 py-2  transition-colors duration-300 transform rounded-lg dark:text-gray-200  dark:hover:bg-gray-800 dark:hover:text-gray-200"
                    href="{{ route('profile.edit') }}"
                >
                    <svg
                        class="w-5 h-5"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>

                    <span class="mx-2 text-sm font-medium">Profil</span>
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a
                        class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        this.closest('form').submit();"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"
                            />
                        </svg>

                        <span class="mx-2 text-sm font-medium">Logout</span>
                    </a>
                </form>
            </div>
        </nav>
    </div>
</aside>
