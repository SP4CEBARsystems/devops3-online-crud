<x-app-layout>
    <div class="flex flex-col items-center justify-center min-h-screen px-4 text-center bg-gray-50">
        <h1
            style="font-size: 6rem; text-shadow: 4px 4px 1px rgba(0, 0, 0, 0.8);"
            class="font-extrabold text-red-600 leading-none mb-6 select-none"
        >
            404
        </h1>
        <h2 class="text-4xl font-semibold text-gray-800 mb-3">
            Pagina niet gevonden
        </h2>
        <p class="text-gray-600 mb-8 max-w-md">
            Sorry, de pagina die je zoekt bestaat niet of is verwijderd.
        </p>
        <a href="{{ url('/') }}"
            style="display: inline-block; padding-left: 2rem; padding-right: 2rem; padding-top: 1rem; padding-bottom: 1rem; background-color: #2563EB; color: #FFFFFF; font-weight: 600; border-radius: 0.5rem; transition: background-color 0.15s ease-in-out;"
        >
            Go back
        </a>
        <p class="text-gray-600" style="margin-bottom: 2rem">
            Other pages you might like:
        </p>
        <div class="flex flex-row items-center justify-center px-4 text-center bg-gray-50 py-2" style="gap: 0.5rem">
            @php
                $posts = ['post of last week', 'post I deleted', 'post on the obscure server we don’t talk about'];
            @endphp
            @foreach ($posts as $item)
                <a href="{{ url('/') }}"
                    style="display: inline-block; padding-left: 2rem; padding-right: 2rem; padding-top: 1rem; padding-bottom: 1rem; background-color: #2563EB; color: #FFFFFF; font-weight: 600; border-radius: 0.5rem; transition: background-color 0.15s ease-in-out;"
                    >
                    {{{ $item }}}
                </a>
            @endforeach
        </div>
        <p class="text-sm" style="color: #888; margin-top: 5rem">
            If the issue persists, please
            <a href="404" style="color: #2563EB">contact support</a>
        </p>
    </div>
</x-app-layout>
