@extends('layouts.master')
@section('content')
<section class="panel panel-transparent">
    <body>
    INPUT DATA
    <hr>
   </hr>
    <div class="form-center">
             <div class="col-md-8 form-group">
              <div class="heading">
                Nama Rumah Sakit:
              </div>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-8 form-group">
              <div class="heading">
                Email:
              </div>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-8 form-group">
              <div class="heading">
                Nomor Telpon:
              </div>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-8 form-group">
             <div class="heading">
               Keterangan:
              </div>
              <input type="tel" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
     </div>
                <br><input type='submit' name='tombol' value='Kirim' /></br>
    </body>                         
        </section>
@endsection
