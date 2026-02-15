@props(['route'])
<div>
    <button class="btn btn-round btn-icon border" type="button" id="btn-reset"
        onclick="window.location.href='{{ route($route) }}'">
        <i class="fas fa-redo" style="font-size: 15px"></i>
    </button>
</div>