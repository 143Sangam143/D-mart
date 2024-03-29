<aside id="default-sidebar" class="fixed top-0 left-0 z-50 w-32 2xs:w-48 xs:w-64 h-full bg-gray-900 transition-transform sidebar-menu" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-900">
        <ul class="space-y-2 font-medium">
            <li>
                <div class="flex cursor-default items-center p-1 2xs:p-2 text-gray-900 rounded-lg bg-gray-100 group">
                    <svg class="w-3 h-3 2xs:w-5 2xs:h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                    </svg>
                    <span class="ml-1 2xs:ml-3 text-[.8rem] 2xs:text-[1rem]">
                        Dashboard
                    </span>
                </div>
            </li>
            <li>
                <div class="h-[1px] rounded-[.5rem] w-full bg-white"></div>
            </li>
            <li>
                <a href="{{ route('merchant.product') }}" class="flex items-center w-full p-1 2xs:p-2 text-base text-gray-300 transition duration-75 rounded-lg group hover:bg-gray-100 {{ ((request()->segment(1) === 'merchant') && (request()->segment(2) === 'product')) ? 'bg-gray-100 text-gray-900' : '' }}">
                    <svg class="flex-shrink-0 w-3 h-3 2xs:w-5 2xs:h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                    </svg>
                    <span class="flex-1 ml-1 2xs:ml-3 text-[.8rem] 2xs:text-[1rem] whitespace-nowrap group-hover:text-gray-900 truncate">
                        Product
                    </span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>