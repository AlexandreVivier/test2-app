                        <x-dropdown >
                            <x-slot name="trigger">
                            <button 
                            class=" lg:w-32 w-full lg:inline-flex flex py-2 pl-3 pr-9d text-left text-sm font-semibold"
                            >
                            <!-- Grace a la variable currentCategory récupérée en route, on peut faire ça : -->
                            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories :'}}
                            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                            height="22" viewBox="0 0 22 22">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path fill="#222"
                                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                            </g>
                        </svg>
                        </button>
                            </x-slot>
                                <x-dropdown-item href="/">
                                    Toutes
                                </x-dropdown-item>
                            @foreach($categories as $category)

                            {{--   {{  ? 'bg-blue-500 text-white' : '' }}" --}}
                            <x-dropdown-item href="/?category={{ $category->slug }}"
                            :active='request()->is("categories/{$category->slug}")'
                            >{{ ucwords($category->name) }}
                                </x-dropdown-item>
                            @endforeach
                        </x-dropdown>