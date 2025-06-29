<x-app-layout>
    <h2>posts</h2>
    <a href="./posts/create">Create new</a>
    <p>
        Choose a category:
    </p>
    <ul>
        @foreach($categories as $category)
            <li>
                <div style="padding: 20px; background-color: {{ $category->is_active ? 'black' : '#444' }}; color: #bbb">
                    <a href="./posts/{{ $category->id }}">
                        Name: <span>{{ $category->name }}</span>
                        - Type: <span>{{ $category->type }}</span>
                        {{-- - Is active: <span>{{ $category->is_active }}</span>
                        - Created at: <span>{{ $category->created_at }}</span>
                        - Updated at: <span>{{ $category->updated_at }}</span>--}}
                    </a>
                    <a href="./posts/{{ $category->id }}/edit">
                        <button style="border-radius: 10px; padding: 10px; background-color: blue;color: white;">
                            Edit
                        </button>
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>
