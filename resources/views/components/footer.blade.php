<x-sponsors :sponsors="$sponsors" />

<div class="separator"></div>

<footer class="bg-white">
    <div class="mx-auto max-w-screen-xl space-y-8 px-4 py-16 sm:px-6 lg:space-y-16 lg:px-8">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <div>
                <div class="text-teal-600">
                    <img class="h-8" src="logo.png" alt="SV Cover logo" />
                </div>

                <p class="mt-4 max-w-xs text-gray-500">
                    Cover is the study association for Artificial Intelligence and Computing Science at the University of Groningen.
                </p>

            </div>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-2 lg:grid-cols-4">
                <div>
                </div>

                <div>
                </div>

                <div>
                    <p class="font-medium text-gray-900">Legal</p>

                    <ul class="mt-6 space-y-4 text-sm">
                        <li>
                            <a href="#" class="text-gray-700 transition hover:opacity-75"> Privacy Policy </a>
                        </li>

                        <li>
                            <a href="#" class="text-gray-700 transition hover:opacity-75"> Refund Policy </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <p class="font-medium text-gray-900">Contact</p>

                    <ul class="mt-6 space-y-4 text-sm">
                        <li>
                            <a class="flex items-center justify-center gap-1.5 ltr:sm:justify-start rtl:sm:justify-end"
                               href="mailto:sympocee@svcover.nl" >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5 shrink-0 text-gray-900"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                    />
                                </svg>

                                <span class="flex-1 text-gray-700">sympocee@svcover.nl</span>
                            </a>
                        </li>

                        <li>
                            <a class="flex items-center justify-center flex-nowrap gap-1.5 ltr:sm:justify-start rtl:sm:justify-end"
                               href="mailto:board@svcover.nl" >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5 shrink-0 text-gray-900"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                    />
                                </svg>

                                <span class="flex-1 text-gray-700">board@svcover.nl</span>
                            </a>
                        </li>

                        <li class="flex items-start justify-center gap-1.5 ltr:sm:justify-start rtl:sm:justify-end">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="size-5 shrink-0 text-gray-900"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                />
                            </svg>

                            <address class="-mt-0.5 flex-1 not-italic text-gray-700">
                                Studievereniging Cover
                                Postbus 407
                                9700 AK Groningen
                                The Netherlands
                            </address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <p class="text-xs text-gray-500">&copy; {{ \Carbon\Carbon::now()->format('Y') }}. <a class="underline" href="https://cshark.dev">Racoveanu Stefan</a>. All rights reserved.</p>
    </div>
</footer>
