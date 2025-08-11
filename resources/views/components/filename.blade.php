@if ($type === 'image')
    <h5 id="file_name" onclick="displayImage('{{ $path }}')" class="mt-3 mb-0 one_line text-primary">
        {{ $name }}</h5>
@elseif ($type === 'video')
    <h5 id="file_name" onclick="displayVideo('{{ $path }}')" class="mt-3 mb-0 one_line text-primary">
        {{ $name }}</h5>
@else
    <h5 id="file_name" class="mt-3 mb-0 one_line text-primary">
        {{ $name }}</h5>
@endif
