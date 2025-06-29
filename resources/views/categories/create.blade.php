<x-app-layout>
    <h2>Create</h2>
    <a href="./">Return to categories</a>
    {{--
    @foreach ($errors->all() as $message)
        <div>
            <h3>Error</h3>
            <p>{{ $message }}</p>
        </div>
    @endforeach
     --}}
    <form action="{{ route('categories.store') }}" method="POST" style="margin-inline: auto; width: 50rem;">
        @csrf
        <label for="name">Tell us what you want to talk about</label><br>
        <textarea id="name" name="name" placeholder="Your message goes here" style="
            width: 400px; height: 100px;
            border-radius: 10px; padding: 10px; background-color: #b6b6b6;color: white;
            border 3px; border-color: {{ $errors->has('name') ? 'red' : 'gray' }};
        "></textarea><br>
        @if ($errors->has('name'))
            <div style="color: red; margin-bottom: 10px; border-radius: 10px; padding: 5px 10px; background-color: #ff000020; width: 25rem;">
                {{ $errors->first('name') }}
            </div>
        @endif
        <label for="is_active" style="display: none">Is active:</label><br>
        <input type="hidden" name="is_active" value="false" style="display: none">
        <input type="checkbox" id="is_active" name="is_active" value="true" style="display: none"><br>
        <fieldset>
            <legend>Select a category:</legend>
            <div>
                <input type="radio" id="discussion" name="type" value="discussion" checked />
                <label for="discussion">Discussion</label>
            </div>
            <div>
                <input type="radio" id="idea" name="type" value="idea" />
                <label for="idea">Idea</label>
            </div>
            <div>
                <input type="radio" id="question" name="type" value="question" />
                <label for="question">Question</label>
            </div>
            <div>
                <input type="radio" id="misc" name="type" value="misc" />
                <label for="misc">Misc</label>
            </div>
        </fieldset>
        <br>
        <input type="submit" value="Create New Post" style="border-radius: 10px; padding: 10px; background-color: blue;color: white;">
    </form>
</x-app-layout>
