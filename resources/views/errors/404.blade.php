@extends('layouts.front')
@section('content')
    <main class="row center middle">
        <p>Página no existe</p>
    </main>
@endsection
@section('scripts')

    <script>
        const hv = document.querySelector('#hv'),
            textHv = document.querySelector('#textHv');
        hv.addEventListener('change', function (e) {
            textHv.textContent = this.value.replace(/^.*[\\\/]/, '');
        })

        @if (session('success'))
        swal({
            type: 'success',
            title: 'Tu hoja de vida ha sido enviada con éxito',
            showConfirmButton: false,
            timer: 8000
        })
        @endif
    </script>
@endsection