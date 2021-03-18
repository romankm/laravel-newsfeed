@csrf

<div class="mb-3">
    <label for="title" class="form-label">Title:</label>
    <input
            name="title"
            value="{{ old('title') ?? $newsItem->title }}"
            type="text" id="title"
            class="form-control"
            required
    >
    <div>{{ $errors->first('title') }}</div>
</div>
<div class="mb-3">
    <label for="body" class="form-label">Body:</label>
    <textarea name="body" class="form-control" id="body" rows="3" required>{{ old('body') ?? $newsItem->body }}</textarea>
    <div>{{ $errors->first('body') }}</div>
</div>

<div class="mb-3">
    <label for="category_id" class="form-label mt-3">Category</label>
    <select name="category_id" id="category_id" class="form-select mb-3">
        @foreach($categories as $key => $category)
            <option value="{{ $category->id }}"
                    {{ ($newsItem->category && $category->id == $newsItem->category->id) ? 'selected' : '' }}
            >
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    <div>{{ $errors->first('category_id') }}</div>
</div>