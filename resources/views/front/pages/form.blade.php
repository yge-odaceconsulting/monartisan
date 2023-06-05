<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulaire de déclaration de sinistre</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="YAO Guy Evrard">
        <meta name="keywords" content="Déclaration de sinistre, déclaration en ligne, sinistres,accidents" />

        {{-- FAVICON --}}
        <link rel="shortcut icon" href="{{asset('assets/index/images/favicon.png')}}" type="image/x-icon" />

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('assets/forms/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('assets/forms/css/style.css')}}">
	</head>
	<body>
		<div class="wrapper">
			<div class="image-holder">

				<img src="{{asset('assets/forms/images/sinistre_r.jpg')}}" alt="">
                <div class="overlay"></div>
                <div class="overlay-content">
                    <a class="return" href="{{route('home')}}" ><svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 344 384"><path fill="currentColor" d="M341 171v42H82l119 120l-30 30L0 192L171 21l30 30L82 171h259z"/></svg>retour</a>
                </div>
			</div>
            <form action="{{route('store')}}" method="POST" id="form">
                @csrf
            	<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4></h4>
	                <section>

	                    <div class="form-row">
	                    	<label for="">
	                    		Quel est votre assurance *
	                    	</label>
	                    	<div class="form-holder">
                                <select name="assurance_id" id="" class="form-control" required>
                                    @if($assurances->isEmpty())
                                        <option value="" selected>Aucune assurance disponible</option>
                                    @else
                                        <option value="" selected >Selectionner votre assurance</option>
                                        @foreach ($assurances as $assurance)
                                            <option value="{{$assurance->id}}" class="option">{{$assurance->wording}}</option>
                                        @endforeach
                                    @endif
                                </select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>

	                </section>

					<!-- SECTION 2 -->
	                <h4></h4>
	                <section>
						<div class="form-row form-group">
							<div class="form-holder">
	                    		<label for="">
	                    		Numéro de la police d'assurance *
		                    	</label>
	                    		<input type="text" name="number" class="form-control" required>
	                    	</div>
	                    	<div class="form-holder">
	                    		<label for="">
	                    		Nom & Prénoms * <br>
		                    	</label>
	                    		<input type="text" name="full_name" id="full_name" class="form-control" required>
                                <span id="full_name_error" class="error-message"></span>
                            </div>

	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		email *
	                    	</label>
	                    	<input type="email" name="email" id="email"  class="form-control" required>
                            <span id="email_error" class="error-message"></span>
	                    </div>
						<div class="form-row form-group">
							<div class="form-holder">
	                    		<label for="">
	                    		Contact 1 *
		                    	</label>
	                    		<input type="number" name="contact_1" id="contact_1" class="form-control" required>
                                <span id="contact_1_error" class="error-message"></span>
	                    	</div>
	                    	<div class="form-holder">
	                    		<label for="">
	                    		Contact 2
		                    	</label>
	                    		<input type="number" name="contact_2" id="contact_2" class="form-control">
                                <span id="contact_2_error" class="error-message"></span>
	                    	</div>

	                    </div>

	                </section>

	                <!-- SECTION 3 -->
	                <h4></h4>
	                <section>
	                    <div class="form-row form-group">
							<div class="form-holder">
	                    		<label for="">
	                    		Lieu du sinistre *
		                    	</label>
	                    		<input type="text" name="place" id="place" class="form-control" required>
                                <span id="place_error" class="error-message"></span>
	                    	</div>
	                    	<div class="form-holder">
	                    		<label for="">
                                    Nature du sinistre *
                                </label>
                                <div class="form-holder">
                                    <select name="type_id" id="" class="form-control" required>
                                        @if($types->isEmpty())
                                            <option value="" selected>Aucune nature disponible</option>
                                        @else
                                            <option value="" selected >Selectionner votre la nature du sinistre</option>
                                            @foreach ($types as $type)
                                                <option value="{{$type->id}}" class="option">{{$type->wording}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <i class="zmdi zmdi-caret-down"></i>
                                </div>
	                    	</div>

	                    </div>
						<div class="form-row">
	                    	<label for="">
	                    		Date du sinistre
	                    	</label>
	                    	<input type="date" name="date" id="date" class="form-control" required>
	                    </div>
	                </section>

            	</div>
            </form>
		</div>

		<script src="{{asset('assets/forms/js/jquery-3.3.1.min.js')}}"></script>

		<!-- JQUERY STEP -->
		<script src="{{asset('assets/forms/js/jquery.steps.js')}}"></script>

		<script src="{{asset('assets/forms/js/main.js')}}"></script>


</body>
</html>
