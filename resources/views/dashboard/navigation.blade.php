<nav aria-label="alternative nav">
    <div class="z-10 w-full md:w-48 content-center">
        <div class="bg-gray-800 shadow-xl mt-16 md:w-48 md:fixed md:left-0 md:top-0 h-full content-center md:content-start text-left justify-between">
            <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
            	<li class="mr-3 flex-1">
                    <a href="{{ url('dashboard') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-transparent @if(request()->is('dashboard')) border-purple-500 @endif">
                        <i class="fas fa-chart-bar pr-0 md:pr-3 fa-2x h-5 @if(request()->is('dashboard')) text-purple-600 @endif"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">{{ __('Analytics') }}</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{ url('/items') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline border-b-2 border-transparent hover:text-white hover:border-purple-500 @if(request()->is('items')) border-purple-500 @endif">
                        <i class="fas fa-list pr-0 md:pr-3 fa-2x h-5 @if(request()->is('items')) text-purple-600 @endif"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">{{ __('Items') }}</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{ url('/items/create') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline border-b-2 border-transparent hover:text-white hover:border-purple-500 @if(request()->is('items/create')) border-purple-500 @endif">
                        <i class="fa fa-plus pr-0 md:pr-3 fa-2x h-5 @if(request()->is('items/create')) text-purple-600 @endif"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">{{ __('New Item') }}</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{ url('/inbound') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline border-b-2 border-transparent hover:text-white hover:border-purple-500 @if(request()->is('inbound')) border-purple-500 @endif">
                        <i class="fa fa-sign-in-alt pr-0 md:pr-3 fa-2x h-5 @if(request()->is('inbound')) text-purple-600 @endif"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">{{ __('Inbound') }}</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{ url('/outbound') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline border-b-2 border-transparent hover:text-white hover:border-purple-500 @if(request()->is('outbound')) border-purple-500 @endif">
                        <i class="fa fa-sign-out-alt pr-0 md:pr-3 fa-2x h-5 @if(request()->is('outbound')) text-purple-600 @endif"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">{{ __('Outbound') }}</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{ url('/settings') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline border-b-2 border-transparent hover:text-white hover:border-purple-500 @if(request()->is('settings')) border-purple-500 @endif">
                        <i class="fa fa-cog pr-0 md:pr-3 fa-2x h-5 @if(request()->is('settings')) text-purple-600 @endif"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">{{ __('Settings') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>