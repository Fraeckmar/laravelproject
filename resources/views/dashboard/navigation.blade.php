<nav aria-label="alternative nav">
    <div class="z-10 w-full md:w-48 content-center">
        <div class="bg-gray-800 shadow-xl md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 h-full content-center md:content-start text-left justify-between">
            <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
            	<li class="mr-3 flex-1">
                    <a href="{{ url('dashboard') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-transparent @if(Request::is('dashboard')) border-purple-500 @endif">
                        <i class="fas fa-chart-area pr-0 md:pr-3 text-blue-600"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Analytics</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{ url('/items') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline border-b-2 border-transparent hover:text-white hover:border-purple-500 @if(Request::is('items')) border-purple-500 @endif">
                        <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Items</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{ url('/items/create') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline border-b-2 border-transparent hover:text-white hover:border-purple-500 @if(Request::is('items/create')) border-purple-500 @endif">
                        <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">New Item</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{ url('/inbound') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline border-b-2 border-transparent hover:text-white hover:border-purple-500 @if(Request::is('inbound')) border-purple-500 @endif">
                        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Inbound</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{ url('/outbound') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline border-b-2 border-transparent hover:text-white hover:border-purple-500 @if(Request::is('outbound')) border-purple-500 @endif">
                        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Outbound</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{ url('/settings') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline border-b-2 border-transparent hover:text-white hover:border-purple-500 @if(Request::is('settings')) border-purple-500 @endif">
                        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>