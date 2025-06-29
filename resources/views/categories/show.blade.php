<x-app-layout>
    <h2>Category</h2>
    <a href="./">Return to posts</a>
    <div style="padding: 20px; background-color: {{ $post->is_active ? 'black' : '#444' }}; color: #bbb">
        Name: <span>{{ $post->name }}</span>
        - Type: <span>{{ $post->type }}</span>
        {{-- - Is active: <span>{{ $post->is_active }}</span>
        - Created at: <span>{{ $post->created_at }}</span>
        - Updated at: <span>{{ $post->updated_at }}</span> --}}
        <a href="./{{ $post->id }}/edit">
            <button style="border-radius: 10px; padding: 10px; background-color: blue;color: white;">
                Edit
            </button>
        </a>
    </div>
</x-app-layout>
