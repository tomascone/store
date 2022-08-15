<li class="dropdown order-1">
    <button type="button" id="dropdownMenuCategories" data-toggle="dropdown" class="btn btn-light dropdown-toggle">Categories <span class="caret"></span></button>
    <ul class="dropdown-menu dropdown-menu-right mt-2">
        @foreach ($categories as $category)
            <a class="dropdown-item" href="{{ route('category.show', $category->id )}}">{{ $category->name }}</a>
        @endforeach
    </ul>
</li>