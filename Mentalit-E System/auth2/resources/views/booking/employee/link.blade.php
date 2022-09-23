@if($link == null)
    <a href="/booking/employee/{{$id}}/editlink">
        <button type="submit" class="btn btn-other">Add</button>
    </a>
@else 
<div class="dropdown">
    <button class="btn btn-other" type="button"id="action-{{ $id }}" data-bs-toggle="dropdown" aria-expanded="false">
        ...
    </button>

    <ul class="dropdown-menu text-center" aria-labelledby="action-{{ $id }}">
        <li>
            <a class="dropdown-item" href="{{$link}}">
                Click link here
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="/booking/employee/{{$id}}/editlink">
                Edit link here
            </a>
        </li>
    </ul>
</div>
@endif

