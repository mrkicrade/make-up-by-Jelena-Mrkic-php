// Mapa


$(document).ready(function(){
    $(".see-map").click(function(){
        $(this).fadeOut(600);
    })
})
// Kontakt forma
    $('#contact-form').validate({
        submitHandler: function (form) {

            // Uzimanje podataka iz forme
            var data = $(form).serialize();

            // Uzimanje vrednosti iz action atributa
            var action = $(form).prop('action');

            // Onemogućavanje svih polja
            $('input, textarea, button').prop('disabled', true);
            // Promena natpisa na dugmetu
            $(form).find('button').text('Slanje u toku...');

            // Slanje podataka iz forme putem AJAX metode
            $.post(
                action,
                data,
                function (response) {
                    console.log(response);
                    if (response == 1) {
                        // Sakrij i ukloni formu
                        $(form).slideUp(function () {
                            $(this).remove();
                        });
                        // Prikaži da je poruka uspešno poslata
                        $('.alert-success').slideDown();
                    } else if ( response != '') {
                        // Ako poruka nije prosleđena - pokazaće se greška
                        alert(response);
                    } else {
                        alert('Serverska validacija nije prošla');
                    }
                }
            );
        }
    });

// G A L E R Y



jQuery(document).ready(function ($) {
    // let holder = $('#holder');
    let wrapp = $('#wrapp');
    let img = $('img');
    
    
    
    img.on('click' , function(){

        wrapp.append('<div id="holder"></div>');
        let holder = $('#holder');
        holder.css({
            // position: 'absolute',
            position: 'fixed',
            // width: '380px',
            width: '40%',
            height: '90%',
            top: '5%',
            // top: img.offset().top,
            left: '35%'
            // left: img.offset().left
        })

        
        let self = $(this);
        let copy = self.clone();
            copy.css({
                position : 'absolute',
                // position : 'fixed',
                width : '100%',
                height : '100%',
                // width : self.width(),
                // height : self.height(),
                // top : self.offset().top,
                top : '0px',
                left : '0px'
                // left : self.offset().left
            });

        
        holder.html('');
        holder.show();
            copy.animate({
                // top : holder.offset().top, // Ako ostavimo ovako kada se skroluje pomeri se top koordinata
                top : 0,
                left : 0,
                // left : holder.offset().left,
                width : holder.width(),
                height : holder.height() 
            } , 1000);

        $(holder).append(copy);

        holder.append('<div class="close">x</div>');
        $('.close').on('click', function () {
            $(this).parent().hide();
        })
    })
});

