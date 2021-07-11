@extends('layouts.app')

@section('css')
@parent
<link rel="stylesheet" href="{{ mix('css/kuisioner.css') }}">
@endsection

@section('main')
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<form method="POST">
  @csrf
  <div class="container-sm">

    <div class="row">
      <div class="col-sm-12 col-lg-6">
        <img src="/images/pertanyaan/judul.png" alt="" class="img-fluid" width="75%">
      </div>
     
      <div class="col-sm-12 col-lg-6 mt-5">
      <h1>Judul Training</h1>
    <select name="judul_training" id="judul_training" class="form-control input-lg dynamic" data-dependent="trainer_id">
      <option value="">Pilih judul training</option>
     @foreach($judul_training as $training)
     <option value="{{ $training->id}}">{{ $training->nama}}</option>
     @endforeach
    </select>
       
        <!-- <select name="judulTraining" class="custom-select">
          <option selected>Pilih judul training</option>
          @foreach ($trainings as $training)
          <option value="{{ $training->id }}">{{ $training->nama }}</option>
          @endforeach
        </select> -->
      </div>
    </div>

  <div class="row mt-4">
      <div class="col-sm-12 col-lg-6">
        <img src="/images/pertanyaan/nama.png" alt="" class="img-fluid" width="75%">
      </div>

    <div class="col-sm-12 col-lg-6">
      <h1>Nama</h1>
      <select name="trainer_id" id="nama" class="form-control input-lg dynamic" data-dependent="trainer">
      <option value="">Pilih nama</option>
      </select>
    </div>

    <div class="col-sm-12 col-lg-6">
        <img src="/images/pertanyaan/no-rek.png" alt="" class="img-fluid" width="75%">
    </div>
    <div class="col-sm-12 col-lg-6 mt-5">
        <h1>Bank, nomor rekening, a.n nama</h1>
        <input type="text" name="noRek" class="form-control" required>
    </div>

    <div class="col-sm-12 col-lg-6">
        <img src="/images/pertanyaan/email.png" alt="" class="img-fluid" width="75%">
    </div>
    <div class="col-sm-12 col-lg-6 mt-5">
        <h1>E-Mail</h1>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="col-sm-12 col-lg-6">
        <img src="/images/pertanyaan/no-telp.png" alt="" class="img-fluid" width="75%">
    </div>
    <div class="col-sm-12 col-lg-6 mt-5">
        <h1>Nomor Whatsapp</h1>
        <input type="text" name="noTelp" class="form-control" required>
    </div>
   {{ csrf_field() }}
  </div>
    <!-- @foreach ($pertanyaan as $input)
    <div class="row mt-4">
      <div class="col-sm-12 col-lg-6">
        <img src="{{ $input['imageUrl'] }}" alt="" class="img-fluid" width="75%">
      </div>

      <div class="col-sm-12 col-lg-6 mt-5">
        <h1>{{ $input['label'] }}</h1>
        <input type="{{ $input['type'] }}" name="{{ $input['name'] }}" class="form-control" required>
      </div>
    </div>
    @endforeach -->

    <!-- Help me -->
    <!-- I just wanna use react with firebase -->
    <!-- Not like this -->
    <!-- NOT LIKE THIS -->
    <div class="row" id="kinerja">
      <div class="col-sm-12 mt-5 text-center">
        <h1>Kecepatan Pembayaran</h1>
        <p style="font-size: 15pt; font-family: Nunito;">(Honorarium)</p>
        <img class="star" v-if="!star1" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle1">
       
        <img class="star" v-if="!star2" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle2">
     

        <img class="star" v-if="!star3" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle3">
        
        <img class="star" v-if="!star4" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle4">
    
        <input type="text" name="kp" v-bind:value="score" hidden>

        <h3 class="mt-4">Komentar terkait kecepatan pembayaran</h3>
        <textarea type="text" cols="75" name="kp_komen" required></textarea>
      </div>
    </div>

    <div class="row" id="fasilitas">
      <div class="col-sm-12 mt-5 text-center">
        <h1>Fasilitas Pendukung</h1>
        <p style="font-size: 15pt; font-family: Nunito;">(Aplikasi penunjang, ruang pelatihan, makanan)</p>
        <img class="star" v-if="!star1" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle1">
      
        <img class="star" v-if="!star2" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle2">
      
        <img class="star" v-if="!star3" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle3">
      
        <img class="star" v-if="!star4" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle4">
        

        <input type="text" name="fp" v-bind:value="score" hidden>

        <h3 class="mt-4">Komentar terkait fasilitas pendukung</h3>
        <textarea type="text" cols="75" name="fp_komen" required></textarea>
      </div>
    </div>

    <div class="row" id="attitude">
      <div class="col-sm-12 mt-5 text-center">
        <h1>Layanan Panitia</h1>
        <p style="font-size: 15pt; font-family: Nunito;">(Attitude & Kinerja)</p>
        
        <img class="star" v-if="!star1" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle1">
        

        <img class="star" v-if="!star2" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle2">
    

        <img class="star" v-if="!star3" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle3">
        

        <img class="star" v-if="!star4" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle4">
        
      
        <input type="text" name="lp" v-bind:value="score" hidden>

        <h3 class="mt-4">Komentar terkait layanan panitia</h3>
        <textarea type="text" cols="75" name="lp_komen" required></textarea>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-sm-12 col-lg-6">
        <img src="/images/pertanyaan/saran.png" alt="" class="img-fluid" width="75%">
      </div>

      <div class="col-sm-12 col-lg-6 mt-5 w-75 p-3">
        <h1>Apakah Anda ingin mengembangkan training bersama kami? Topik apa yang ingin dikembangkan?</h1>
        <input type="text" name="saran_topik" class="form-control">
      </div>
    </div>

    <br>
    <button class="btn btn-primary shadow btn-block" style="font-family: Nunito;">SUBMIT</button>

  </div>
</form>
@endsection

@section('scripts')
<script src="https://unpkg.com/vue@next"></script>
<script src="{{ mix('js/app.js') }}"></script>

<script>
$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('kuesioner.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

 $('#judul_training').change(function(){
  $('#trainer').val('');
 });
 

});
</script>

<script>
    $('#judul_training').on('change', function(e){
     console.log(e);

     var title = e.target.value;
     $.get('/ajax-name?title=' + title, function(data){
       $('#nama').empty();
       $('#nama').append('<option value="" disabled="true" selected>Pilih nama</option>');
       $.each(data, function(index, subcatObj){
         $('#nama').append('<option  value="'+subcatObj.id+'">'+subcatObj.nama+'</option>');
     });
   });

 });
 </script>
@endsection
