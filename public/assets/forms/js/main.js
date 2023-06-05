$(function(){
	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        onStepChanging: function (event, currentIndex, newIndex) {
            if ( newIndex === 1 ) {
                $('.steps ul').addClass('step-2');
            } else {
                $('.steps ul').removeClass('step-2');
            }
            if ( newIndex === 2 ) {
                $('.steps ul').addClass('step-3');
            } else {
                $('.steps ul').removeClass('step-3');
            }

            // if ( newIndex === 3 ) {
            //     $('.steps ul').addClass('step-4');
            //     $('.actions ul').addClass('step-last');
            // } else {
            //     $('.steps ul').removeClass('step-4');
            //     $('.actions ul').removeClass('step-last');
            // }
            return true;
        },

        labels: {
            finish: "Envoyer",
            next: "Suivant",
            previous: "Précédent"
        }
    });
    // Custom Steps Jquery Steps
    $('.wizard > .steps li a').click(function(){
    	$(this).parent().addClass('checked');
		$(this).parent().prevAll().addClass('checked');
		$(this).parent().nextAll().removeClass('checked');
    });
    // Custom Button Jquery Steps
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Checkbox
    $('.checkbox-circle label').click(function(){
        $('.checkbox-circle label').removeClass('active');
        $(this).addClass('active');
    })

    // Soumettre le formulaire lors du clic sur le bouton "Finish"
    $(document).on('click', '#send', function(event) {
        event.preventDefault();
        var href = $(this).attr('href');
        if (href === '#finish') {
            $('#form').submit();
        }
    });

    $(document).on('submit', '#your-form-id', function(event) {
        event.preventDefault();

        // Valider les champs du formulaire
        var fullName = $('#full_name').val();
        var email = $('#email').val();
        var contact1 = $('#contact_1').val();
        var contact2 = $('#contact_2').val();
        var place = $('#place').val();
        var date = $('#date').val();

        // Vérifier les règles de validation
        var errors = false;

        if (fullName.trim() === '') {
            errors = true;
            $('#full_name_error').text('Le champ nom complet est obligatoire.');
        }

        if (email.trim() === '') {
            errors = true;
            $('#email_error').text('Le champ email est obligatoire.');
        } else if (!isValidEmail(email)) {
            errors = true;
            $('#email_error').text('Veuillez saisir une adresse email valide.');
        }

        if (contact1.trim() === '') {
            errors = true;
            $('#contact_1_error').text('Le champ contact 1 est obligatoire.');
        } else if (contact1.length !== 10) {
            errors = true;
            $('#contact_1_error').text('Le contact 1 doit avoir 10 chiffres.');
        }

        if (contact2.trim() !== '' && contact2.length !== 10) {
            errors = true;
            $('#contact_2_error').text('Le contact 2 doit avoir 10 chiffres.');
        }

        if (place.trim() === '') {
            errors = true;
            $('#place_error').text('Le champ lieu est obligatoire.');
        }

        // Vérifier les autres champs selon les règles de validation

        // Si des erreurs sont détectées, arrêter la soumission du formulaire
        if (errors) {
            return false;
        }

        // Si tout est valide, soumettre le formulaire
        $(this).unbind('submit').submit();
    });

    // Fonction de validation d'email
    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }


})
