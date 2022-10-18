@props(['errors'])

@if ($errors->any())
<!-- Ошиииииииииииииииииибкиииииииииииии -->
    <div {{ $attributes }}>
        <div class="whoops">
            {{ __('Упс! Чет пошло не так епта.') }}
        </div>

        <!-- <ul class="whoops">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul> -->
    </div>
@endif
