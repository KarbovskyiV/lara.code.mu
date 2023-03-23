<div class="card-body">
    <div class="d-flex justify-content-between">
        <div>
            {{ $slot }}
        </div>

        @isset($right)
            <div>
                {{ $right }}
                @endisset
            </div>
    </div>
</div>
