@extends('layouts.app')

@section('css')
@parent

<link rel="stylesheet" href="{{ mix('css/selesai.css') }}">
@endsection



@section('main')
<div class="container-sm selesai">
  <div class="row">
    <div class="col-sm-12 col-lg-6 offset-lg-6">
      <p style="font-size: 23pt;" class='text-white'>Kami berterimakasih karena telah dipercaya untuk membersamai Bapak dan Ibu dalam berbagi ilmu, inspirasi dan penglaman. Semoga Bapak dan Ibu senantiasa berlimpah berkah, sehat dan kebahagiaan bersama keluarga.</p>

      <a href="{{ route('homepage') }}" class="btn btn-primary subhead">Halaman Utama</a>
    </div>
  </div>
</div>
@endsection