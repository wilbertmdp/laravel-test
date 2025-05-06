<h2>Fakultas</h2>
{{-- - {{$ilkom}} --}}

{{-- <ul>
    @foreach ($ilkom as $item)
        <li>{{$item}}</li>
    @endforeach
</ul> --}}

<ul>
    @if (count($ilkom)>0)
        @foreach ($ilkom as $item)
            <li>{{$item}}</li>
        @endforeach
    @else
        <li>Belum ada data</li>
    @endif
</ul>
