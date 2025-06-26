<x-app-layout>
    <div class="flex flex-col items-center justify-center min-h-screen px-4 text-center bg-gray-50">
        <div style="display: grid; grid-template-columns: 1fr 3rem; margin-bottom: 7rem;">
            <h2 class="text-4xl font-semibold text-gray-800">
                {{ $title }}
            </h2>
            <h1 class="font-extrabold text-red-600 leading-none select-none">404</h1>
        </div>
        <a href="{{ $buttonUrl }}"
            style="display: inline-block; width: 15rem; height: 5rem; padding-top: 1.5rem; padding-bottom: auto;
            background-color: #2563EB; color: #FFFFFF; font-weight: 600; border-radius: 0.5rem; transition: background-color 0.15s ease-in-out;"
        >
            {{ $button }}
        </a>
        <p class="text-gray-600" style="margin-bottom: 1rem; margin-top: 10rem">
            Other pages you might like:
        </p>
        <div class="flex flex-row items-center justify-center px-4 text-center bg-gray-50 py-2" style="gap: 0.5rem">
            @foreach ($posts as $item)
                <a href="{{ url($loop->index == 2 ? '/simulate-500' : '/post' . $loop->index) }}"
                    style="display: inline-block; padding-left: 2rem; padding-right: 2rem; padding-top: 1rem; padding-bottom: 1rem;
                    background-color: #2563EB; color: #FFFFFF; font-weight: 600; border-radius: 0.5rem; transition: background-color 0.15s ease-in-out;
                    width: 15rem; height: 7rem"
                >
                    {{ $item }}
                </a>
            @endforeach
        </div>
        <p class="text-sm" style="color: #888; margin-top: 5rem">
            {{ $supportMessage }}
            <a href="404" style="color: #2563EB">contact support</a>
        </p>
    </div>
</x-app-layout>
