@extends('Layouts.inscription')

@section('headerinscrit')

<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>
    HAKEKO
</title>
<!-- Extra details for Live View on GitHub Pages -->
<!--  Social tags      -->
<meta name="keywords" content="">
<meta name="description" content="">
<!-- Schema.org markup for Google+ -->
<html lang="en">
<head>
  <meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- Favicons -->
<link rel="apple-touch-icon" href="{{asset('/img/apple-icon.png') }}">
<link rel="icon" href="{{asset('/img/favicon.png') }}">
<title>
    HAKEKO
</title>
<!-- Extra details for Live View on GitHub Pages -->
<!--  Social tags      -->
<meta name="keywords" content="">
<meta name="description" content="">
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="">
<meta itemprop="description" content="">
<meta itemprop="image" content="">

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<link rel="stylesheet" href="{{asset('/css/material-kit.mine8da.css') }}">
<script type="text/javascript">
   if (document.readyState === 'complete') {
       if (window.location != window.parent.location) {
           const elements = document.getElementsByClassName("iframe-extern");
           while (elemnts.lenght > 0) elements[0].remove();
           // $(".iframe-extern").remove();
       }
   };
</script>

@stop

@section('bodyinscrit')

<div class="page-header header-filter" style="background-image: url('/img/bg_students.jpg'); background-size: cover; background-position: top center;">
  <div class="container">
    <div class="row">
      <div class="col-md-10 ml-auto mr-auto">
        <div class="card">
           <h2 class="card-title text-center"> <font size="6">{{ __('INSCRIPTION') }} </font></h2>
           <div class="card-body">
              <div class="row">
                 <div class="col-md-5 ml-auto">

                     <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                         @csrf
                    <div class="form-group">
                             <label for="name" class="bmd-label-floating">{{ __('Nom') }}</label>

                                 <input id="name" type="text" class="form-control{{ $errors->has('nomf') ? ' is-text-danger' : '' }}" name="nomf" value="{{ old('nomf') }}" required >

                                 @if ($errors->has('nomf'))
                                     <p class="text-danger">>
                                         <strong>{{ $errors->first('nomf') }}</strong>
                                     </span>
                                 @endif
                         </div>
                          <div class="form-group">
                              <label for="prenom" class="bmd-label-floating">{{ __('Prénom') }}</label>

                                  <input id="prenom" type="text" class="form-control{{ $errors->has('prenomf') ? ' is-text-danger' : '' }}" name="prenomf" value="{{ old('prenomf') }}" required >

                                  @if ($errors->has('prenomf'))
                                      <p class="text-danger">>
                                          <strong>{{ $errors->first('prenomf') }}</strong>
                                      </p>
                                  @endif
                          </div>
                          <div class="form-group">
                                     <div class="form-group">
                                         <label for="date_naissance" class="bmd-label-static">Date de Naissance</label>
                                         <input type="date" class="form-control" id="date_naissance" name = "datenaissancef" value="{{ old('datenaissancef') }}">
                                     </div>
                          </div>

                          <div class="form-group">
                              <label for="nationalite" class="bmd-label-floating">{{ __('Nationalité') }}</label>

                                  <input id="nationalite" type="text" class="form-control{{ $errors->has('nationalitef') ? ' is-text-danger' : '' }}" name="nationalitef" value="{{ old('nationalitef') }}" required >

                                  @if ($errors->has('nationalitef'))
                                      <p class="text-danger">
                                          <strong>{{ $errors->first('nationalitef') }}</strong>
                                      </p>
                                  @endif
                          </div>
                          <div id="infos_etude">
                            <div class="row">
                              <div class="col-md-6">
                              <div class="form-group">
                                <select class= "selectpicker{{ $errors->has('niveauetudef') ? ' is-text-danger' : '' }}" "selectpicker" data-style="select-with-transition" title="Niveau d’étude"
                                data-size="6" id="niveau_etude" name="niveauetudef" value="{{ old('niveauetudef') }}" required>

                                     <option value="bac" id="bac">Bac</option>
                                          <option value="bac+1">Bac+1</option>
                                          <option value="bac+2">Bac+2</option>
                                          <option value="bac+3">Bac+3</option>
                                          <option value="bac+4">Bac+5</option>
                                          <option value="bac+5">Bac+5</option>
                                  </select>

                                  @if ($errors->has('niveauetudef'))
                                      <p class="text-danger">
                                          <strong>{{ $errors->first('niveauetudef') }}</strong>
                                      </p>
                                  @endif
                              </div>
                          </div>

                          <div class="col-md-6" id="div_serie_bac">
                                          <div class="form-group">
                                            <select class="selectpicker" data-style="select-with-transition" title="Série du Bac" data-size="3" id="serie_bac" name="serie_bac" >
                                              <option value="scientifique">Scientifique</option>
                                              <option value="littéraire">Littéraire</option>
                                              <option value="technique">Technique</option>
                                            </select>
                                          </div>
                                        </div>
                                 </div>

                                      <div id="div_domaine_etude">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group">

                                                <select class="selectpicker" data-style="select-with-transition" title="Domaine d’étude" data-size="3" id="domaine_etude" name="domaine_etude">
                                                  <option value="domnaine1">domnaine1</option>
                                                  <option value="domnaine2">domnaine2</option>
                                                  <option value="domnaine3">domnaine3</option>
                                                </select>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group">

                                                <select class="selectpicker" data-style="select-with-transition" title="Que désiriez-vous étudiez ?" data-size="3" id="etude_desirer" name="etudedesirerf">
                                                  <option value="filiere1">filiere1</option>
                                                  <option value="filiere2">filiere2</option>
                                                  <option value="filiere3">filiere3</option>
                                                </select>

                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                             </div>

                   <div class="col-md-5 mr-auto">
                        <div class="form-group">
                            <label for="email" class="bmd-label-floating">{{ __('Email') }}</label>

                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-text-danger' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <p class="text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </p>
                                @endif
                            </div>

                            <div class="form-group">
                                          <label for="tel" class="bmd-label-floating" request>Tel.</label>
                                          <input type="text" class="form-control" id="tel" value="1-(555)-555-5555 " name="telf" >
                                          <span class="bmd-help">Facultatif</span>

                                      </div>

                        <div class="form-group">
                            <label for="password" class="bmd-label-floating">{{ __('Mot de passe') }}</label>

                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-text-danger' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <p class="text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </p>
                                @endif
                        </div>


                        <div class="form-group ">
                            <label for="password-confirm" class="bmd-label-floating">{{ __('Confirmer mot de passe') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          </div>

                          <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="connu_hakeko" class="bmd-label-floating">Comment avez-vous connu Hakeko?</label>
                                          <textarea class="form-control" rows="5" id="connu_hakeko" name="connuhakekof"></textarea>
                                          <span class="bmd-help">Facultatif</span>
                                      </div>
                                    </div>

                            </div>

                      <div class="form-check">
                               <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="yes" name ="yes" checked required> J’accepte les conditions générales du service et code d’honneur Hakeko.
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                </label>

                     <div class="form-group ">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-round btn-info">
                                    {{ __("S'inscrir") }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                 </div>
             </div>
          </div>
      </div>
  </div>
</div>

<!-- js partie -->

<!--   Core JS Files   -->
          <script src="{{asset('/js/core/jquery.min.js') }}"></script>

          <script src="{{asset('/js/core/popper.min.js') }}"></script>
          <script src="{{asset('/js/bootstrap-material-design.min.js') }}"></script>
          <!--  Google Maps Plugin  -->
          <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
          <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
          <script src="{{asset('/js/plugins/moment.min.js') }}"></script>
          <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
          <script src="{{asset('/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
          <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
          <script src="{{asset('/js/plugins/nouislider.min.js') }}"></script>
          <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
          <script src="{{asset('/js/plugins/bootstrap-selectpicker.js') }}"></script>
          <!--  Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
          <script src="{{asset('/js/plugins/bootstrap-tagsinput.js') }}"></script>
          <!--  Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
          <script src="{{asset('/js/plugins/jasny-bootstrap.min.js') }}"></script>
          <!--  Plugin for Small Gallery in Product Page -->
          <script src="{{asset('/js/plugins/jquery.flexisel.js') }}"></script>
          <!-- Plugins for presentation and navigation  -->
          <script src="{{asset('/assets-for-demo/js/modernizr.js') }}"></script>
          <script src="{{asset('/assets-for-demo/js/vertical-nav.js') }}"></script>
          <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
          <script src="{{asset('/js/material-kit.mine8da.js?v=2.0.3') }}"></script>
          
          <script>

                 $(document).ready(function() {
                   //init DateTimePickers
                   materialKit.initFormExtendedDatetimepickers();
                   // cacher infos etude
                   $('#infos_etude').show();
                   $('#div_serie_bac').hide();
                   $('#div_domaine_etude').hide();

                   // condition d'affichages

                   $("#niveau_etude").change(function() {

                     if($("#bac").is(":selected")) {
                       $("#div_serie_bac").show();
                       $('#div_domaine_etude').hide();

                     } else {
                       $("#div_serie_bac").hide();
                       $('#div_domaine_etude').show();

                     }
                   }).trigger('change');


                     });





             </script>

@stop
