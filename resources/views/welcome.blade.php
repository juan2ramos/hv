@extends('layouts.front')
@section('content')
    <main class="row center middle">
        <form class="Form " method="post" action="/cv" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h1>Envía tu hoja de vida</h1>
            <p>Ingresa los datos y sube tu hoja de vida en PDF o Word para finalizar el proceso de inscripción a la
                oferta laboral.</p>
            @if($errors->any())
                <div class="Errors">
                    @foreach($errors->all() as $error)
                        <div class="Error">
                            {{$error}}
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="form-group">
                <label for="username">Nombres </label>
                <input type="text" id="username" name="username" value="{{old('username')}}" required="required"/>
            </div>
            <div class="form-group">
                <label for=phone>Teléfono </label>
                <input type="text" id="phone" name="phone" value="{{old('phone')}}" required="required"/>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" value="{{old('email')}}" required="required"/>
            </div>
            <div class="form-group">
                <label for="subjet">Asunto</label>
                <textarea name="subjet" id="subjet" rows="3" required="required">{{old('subjet')}}</textarea>
            </div>
            <div class="form-group">
                <div class="File row center middle">
                    <p id="textHv">Arratra o haz click para subir la hoja de vida</p>
                </div>
                <label for="hv">Sube tu hoja de vida</label>
                <input type="file" id="hv" name="hv" required="required"/>

            </div>
            <div class="form-group">
                <button type="submit">ENVÍA TU HOJA DE VIDA</button>
            </div>

        </form>
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