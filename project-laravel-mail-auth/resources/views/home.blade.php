@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <form action="{{route('metodo-send')}}" method='post'>
                            @csrf
                            @method('post')
                            <label for="testoMail">Inserisci del testo</label>
                            <input type="text" name='testoMail'>

                            <input type="submit" value='Invia'>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
