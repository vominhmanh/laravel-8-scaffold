<div class="breadcrumb-section">
    <div class="container-fluid container-fixed">
        <ol class="breadcrumb">
            @foreach ($breadcrumbitems as $name => $url)
                <li class="breadcrumb-item"><a href="{{ $url }}">{{ $name }}</a></li>
            @endforeach
        </ol>
    </div>
</div>
