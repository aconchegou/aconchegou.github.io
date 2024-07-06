jQuery(document).ready(function ($) {
    $('.owl-enterprises').owlCarousel({
        loop: false,
        items: 3,
        center: false,
        margin: 60,
        autoplay: true,
        autoplayTimeout: 7000,
        autoplayHoverPause: true,
        dots: true,
        nav: true,
        navText: ['<span class="font-etmodules">&#x34;</span>', '<span class="font-etmodules">&#x35;</span>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    
    $('.owl-post-blog').owlCarousel({
        loop: false,
        items: 1,
        center: false,
        margin: 60,
        autoplay: true,
        autoplayTimeout: 7000,
        autoplayHoverPause: true,
        dots: true,
        nav: true,
        navText: ['<span class="font-etmodules">&#x34;</span>', '<span class="font-etmodules">&#x35;</span>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });  
    
    
    $('.owl-banners-carousel').owlCarousel({
        loop: true,
        items: 1,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 7000,
        autoplayHoverPause: true,
        dots: true,
        nav: true,
        // navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $('.owl-enterprise-gallery').owlCarousel({
        loop: false,
        items: 2,
        margin: 60,
        autoplay: false,
        autoplayTimeout: 7000,
        autoplayHoverPause: true,
        dots: true,
        nav: true,
        navText: ['<span class="font-etmodules">&#x34;</span>', '<span class="font-etmodules">&#x35;</span>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });
    
   
    $('#owl-plant-photos').owlCarousel({
        center: true,
        loop: true,
        items: 3,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        dots: true,
        nav: false,
        navText: ['<span class="font-etmodules">&#x34;</span>', '<span class="font-etmodules">&#x35;</span>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });
    
    $('#owl-condominium-photos').owlCarousel({
        center: true,
        loop: true,
        items: 3,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        dots: true,
        nav: false,
        navText: ['<span class="font-etmodules">&#x34;</span>', '<span class="font-etmodules">&#x35;</span>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });

    var sync1 = $(".owl-enterprise-plan");
    var sync2 = $(".navigation-thumbs");
    var thumbnailItemClass = '.owl-item';

    var slides = sync1.owlCarousel({
        startPosition: 0,
        items: 1,
        loop: false,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 7000,
        autoplayHoverPause: false,
        nav: true,
        dots: true,
        navText: ['<span class="font-etmodules">&#x34;</span>', '<span class="font-etmodules">&#x35;</span>'],
    }).on('changed.owl.carousel', syncPosition);

    function syncPosition(el) {
        $owl_slider = $(this).data('owl.carousel');
        var loop = $owl_slider.options.loop;

        if (loop) {
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);
            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }
        } else {
            var current = el.item.index;
        }

        var owl_thumbnail = sync2.data('owl.carousel');
        var itemClass = "." + owl_thumbnail.options.itemClass;


        var thumbnailCurrentItem = sync2
            .find(itemClass)
            .removeClass("synced")
            .eq(current);

        thumbnailCurrentItem.addClass('synced');

        if (!thumbnailCurrentItem.hasClass('active')) {
            var duration = 300;
            sync2.trigger('to.owl.carousel', [current, duration, true]);
        }
    }

    var thumbs = sync2.owlCarousel({
        startPosition: 0,
        items: 6,
        loop: false,
        margin: 50,
        autoplay: false,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 6
            },
            1000: {
                items: 6
            }
        },
        onInitialized: function (e) {
            var thumbnailCurrentItem = $(e.target).find(thumbnailItemClass).eq(this._current);
            thumbnailCurrentItem.addClass('synced');
        },
    }).on('click', thumbnailItemClass, function (e) {
        e.preventDefault();
        var duration = 300;
        var itemIndex = $(e.target).parents(thumbnailItemClass).index();
        sync1.trigger('to.owl.carousel', [itemIndex, duration, true]);
    }).on("changed.owl.carousel", function (el) {
        var number = el.item.index;
        $owl_slider = sync1.data('owl.carousel');
        $owl_slider.to(number, 100, true);
    });

    $('.owl-enterprise-videos').owlCarousel({
        items: 1,
        merge: true,
        loop: false,
        margin: 100,
        autoplay: false,
        autoplayTimeout: 7000,
        autoplayHoverPause: false,
        video: true,
        lazyLoad: true,
        center: true,
        dots: true,
        nav: true,
        navText: ['<span class="font-etmodules">&#x34;</span>', '<span class="font-etmodules">&#x35;</span>'],
        responsive: {
            480: {
                items: 2
            },
            600: {
                items: 2
            }
        }
    });

        // $('.popup-enterprise-gallery').magnificPopup({
        //     delegate: '.owl-item:not(.cloned) a',
        //     type: 'image',
        //     removalDelay: 500, //delay removal by X to allow out-animation
        //     gallery: {
        //         enabled: true
        //     }
        // });

        // $('.popup-enterprise-plan').magnificPopup({
        //     delegate: '.owl-item:not(.cloned) a',
        //     type: 'image',
        //     removalDelay: 500, //delay removal by X to allow out-animation
        //     gallery: {
        //         enabled: true
        //     }
        // });

    function setActiveEnterprisesFilter() {
        var status = getParameterValues('status');
        if (!status) {
            $('.enterprises-list-with-filter .filter span[data-filter="finalizado"]').addClass('active');
        } else {
            $('.enterprises-list-with-filter .filter span[data-filter="' + status + '"]').addClass('active');
        }
    }

    function getParameterValues(param) {
        var url = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < url.length; i++) {
            var urlparam = url[i].split('=');
            if (urlparam[0] == param) {
                return urlparam[1];
            }
        }
    }

    $(window).on('load', function (e) {
        setActiveEnterprisesFilter();
    });

    $(document).on('click', '.enterprises-list-with-filter .filter span', function (e) {
        var filter = $(this).data('filter');
        var new_url = window.location.origin + window.location.pathname + '?' + jQuery.param({ 'status': filter });
        window.history.pushState(null, '', new_url);

        $.ajax({
            type: 'GET',
            url: myAjax.ajaxurl,
            data: { action: 'filter_enterprises', status: filter },
            success: function (response) {
                $('#code-filter-enterprises-list .et_pb_code_inner').html(response);
                setActiveEnterprisesFilter();
            }
        });
    });



    $('div[data-iframe]').click(e => {
        updateMap(e.currentTarget.dataset.iframe)
    });
    
    
    let floatingIcons = $('.responsive-icon')
    let plusButton = $('#plus-button')
    
    plusButton.click(() => {
        floatingIcons.css({
            opacity: 1,
            transition: '0.2s all ease-in-out',
            position: 'relative'
        })
        floatingIcons.toggle(200);
    })
    
    if($( window ).width() < 768) {
        floatingIcons.toggle(100);
        floatingIcons.css({
            opacity: 0,
            transition: '0.2s all ease-in-out',
            position: 'absolute'
        })
    }
    
    
    // INCREASE SIZE OF WP VR
    $("#master-container").css({
       maxWidth: `1080px`,
       height: `720px`
    }) 
    
    // FILTER PROPERTIES
$('.dropdown-filter').on('click', function() {
    var input = $(this).next('.dropdown-input');
    var isOpen = input.is(':visible');
    
    $('.dropdown-input').not(input).slideUp('fast');
    
    input.slideToggle('fast', function() {
        if (!input.is(':visible')) {
            $(this).prev('.dropdown-filter').removeClass("rotated");
        }
    });
});

$("#filter .dropdown-filter").click(function() {
    $(this).toggleClass("rotated");
});


    
    
    
    
    
    // Seletores dos campos de filtro
    var filterSelectors = ['#filter-type','#filter-city', '#filter-bedrooms', '#filter-vacancies', '.filter-footage','.filter-investments','#filter-company', '#filter-datadeentrega'];
    
    // Função para construir os arrays de filtro e valor com base nos seletores
    function buildFilterArrays() {
        var filters = [];
        var values = [];
    
        filterSelectors.forEach(function(selector) {
            var value = $(selector).val()
            
            if (value !== '') {
                if ($(selector).hasClass('filter-footage')) {
                    
                    var minField = $('#filter-footage-min').val();
                    var maxField = $('#filter-footage-max').val();

                    filters.push(selector.replace('.filter-', ''));
                    values.push([minField, maxField]);
                } else if ($(selector).hasClass('filter-investments')){
                    
                    var minField = $('#filter-investments-min').maskMoney('unmasked')[0];
                    var maxField = $('#filter-investments-max').maskMoney('unmasked')[0];

                    filters.push(selector.replace('.filter-', ''));
                    values.push([minField, maxField]);
                } else {
                    filters.push(selector.replace('#filter-', ''));
                    values.push(value);
                }
            }
        });
    
        return { filters: filters, values: values };
    }
    
    $('#filter-type').on('change', function() {
        var selectedValue = $(this).val();
        var filterData = buildFilterArrays();
  
        
        $.ajax({
            type: 'GET',
            url: myAjax.ajaxurl,
            data: {
                'action': 'filterPropreties',
                'filter': filterData.filters,
                'value': filterData.values,
                'type': selectedValue
            },
            
            beforeSend: function(xhr) {
                $("body").append("<div class='loading'>Carregando...</div>");
            },

            success: function(response) {
                $('#enterprises-list').html(response.data);
             
                $('.loading').remove();
                
            },
            error: function(xhr, status, error) {
                console.error(error);
                $('.loading').remove();
            }
        });
    });
    
    
    // $('#filter-city').on('change', function() {
    //     var selectedValue = $(this).val();
    //     var filterData = buildFilterArrays();
        
    //     $.ajax({
    //         type: 'GET',
    //         url: myAjax.ajaxurl,
    //         data: {
    //             'action': 'filterPropreties',
    //             'filter': filterData.filters,
    //             'value': filterData.values,
    //             'type': selectedValue
    //         },
    //         beforeSend: function(xhr) {
    //             $("body").append("<div class='loading'>Carregando...</div>");
    //         },

    //         success: function(response) {
    //             $('#enterprises-list').html(response.data);
    //             $('.loading').remove();
                
    //         },
    //         error: function(xhr, status, error) {
    //             console.error(error);
    //             $('.loading').remove();
    //         }
    //     });
    // });
    
    $('#filter-city').on('change', function() {
    var selectedValue = $(this).val();
    var filterData = buildFilterArrays();
    
    
    
    $('#selected-filters').html("<p>" + selectedValue + "</p>");


    $.ajax({
        type: 'GET',
        url: myAjax.ajaxurl,
        data: {
            'action': 'filterPropreties',
            'filter': filterData.filters,
            'value': filterData.values,
            'type': selectedValue
        },
        beforeSend: function(xhr) {
            $("body").append("<div class='loading'>Carregando...</div>");
        },

        success: function(response) {
            $('#enterprises-list').html(response.data);
            $('.loading').remove();
        },
        error: function(xhr, status, error) {
            console.error(error);
            $('.loading').remove();
        }
    });
    });

    
    $('#filter-bedrooms').on('change', function() {
        var filterData = buildFilterArrays();
       
    
        $.ajax({
            type: 'GET',
            url: myAjax.ajaxurl,
            data: {
                'action': 'filterPropreties',
                'filter': filterData.filters,
                'value': filterData.values,
            },
            beforeSend: function(xhr) {
                $("body").append("<div class='loading'>Carregando...</div>");
            },

            success: function(response) {
                $('#enterprises-list').html(response.data);
                $('.loading').remove();
                
            },
            error: function(xhr, status, error) {
                console.error(error);
                $('.loading').remove();
            }
        });
    });
    
    $('#filter-vacancies').on('change', function() {
        var selectedValue = $(this).val();
        var filterData = buildFilterArrays();

    
        $.ajax({
            type: 'GET',
            url: myAjax.ajaxurl,
            data: {
                'action': 'filterPropreties',
                'filter': filterData.filters,
                'value': filterData.values,
                'type': selectedValue
            },
            beforeSend: function(xhr) {
                $("body").append("<div class='loading'>Carregando...</div>");
            },

            success: function(response) {
                $('#enterprises-list').html(response.data);
                $('.loading').remove();
                
            },
            error: function(xhr, status, error) {
                console.error(error);
                $('.loading').remove();
            }
        });
    });
    
    
    $('#filter-footage-min').val('0');
    $('#filter-footage-max').val('0');
    
    $('#filter-footage-min, #filter-footage-max').on('input', function() {
        var sanitizedValue = $(this).val().replace(/\D/g, ''); // Remover não números
        
        
        if (sanitizedValue === '') {
            $(this).val('0'); 
        } else {
            $(this).val(parseInt(sanitizedValue, 10));
        }
    });
    
    $('.filter-footage').on('change', function() {
        var selectedValue = $(this).val();
        var filterData = buildFilterArrays();
        
        $.ajax({
            type: 'GET',
            url: myAjax.ajaxurl,
            data: {
                'action': 'filterPropreties',
                'filter': filterData.filters,
                'value': filterData.values
            },
            beforeSend: function(xhr) {
                $("body").append("<div class='loading'>Carregando...</div>");
            },

            success: function(response) {
                $('#enterprises-list').html(response.data);
                $('.loading').remove();
                
            },
            error: function(xhr, status, error) {
                console.error(error);
                $('.loading').remove();
            }
        });
    });
    
    $('#filter-investments-min').val('0');
    $('#filter-investments-max').val('0');
    
    $('#filter-investments-min, #filter-investments-max').on('input', function() {
        var sanitizedValue = $(this).val().replace(/\D/g, ''); // Remover não números
        
        if (sanitizedValue === '') {
            $(this).val('0'); 
        } else {
            $(this).val(parseInt(sanitizedValue, 10));
        }
    });
    
    $('.filter-investments').on('change', function() {
  
        var selectedValue = $(this).maskMoney('unmasked')[0];
        var filterData = buildFilterArrays();
      
        $.ajax({
            type: 'GET',
            url: myAjax.ajaxurl,
            data: {
                'action': 'filterPropreties',
                'filter': filterData.filters,
                'value': filterData.values
            },
            beforeSend: function(xhr) {
                $("body").append("<div class='loading'>Carregando...</div>");
            },

            success: function(response) {
                $('#enterprises-list').html(response.data);
                $('.loading').remove();
                
            },
            error: function(xhr, status, error) {
                console.error(error);
                $('.loading').remove();
            }
        });
    });
    

    
    $('#filter-company').on('change', function() {
        var selectedValue = $(this).val();
        var filterData = buildFilterArrays();



        $.ajax({
            type: 'GET',
            url: myAjax.ajaxurl,
            data: {


                'action': 'filterPropreties',
                'filter': filterData.filters,
                'value': filterData.values,
                'type': selectedValue
            },
            beforeSend: function(xhr) {                     
                $("body").append("<div class='loading'>Carregando...</div>");                                                                                                                                                                                                                                                           
            },

            success: function(response) {
                $('#enterprises-list').html(response.data);
                $('.loading').remove();
               
                
            },
            error: function(xhr, status, error) {
                console.error(error);
                $('.loading').remove();                                                                                                                             
            }
        });
    });
    
    $('#filter-datadeentrega').on('change', function() {
        var selectedValue = $(this).val();
        var filterData = buildFilterArrays();



        $.ajax({
            type: 'GET',
            url: myAjax.ajaxurl,
            data: {


                'action': 'filterPropreties',
                'filter': filterData.filters,
                'value': filterData.values,
                'type': selectedValue
            },
            beforeSend: function(xhr) {                     
                $("body").append("<div class='loading'>Carregando...</div>");                                                                                                                                                                                                                                                           
            },

            success: function(response) {
                $('#enterprises-list').html(response.data);
                $('.loading').remove();
          
                
            },
            error: function(xhr, status, error) {
                console.error(error);
                $('.loading').remove();                                                                                                                             
            }
        });
    });
    
    
    $('#clear').on('click',function(){
        $.ajax({
          type: 'GET',
          url: myAjax.ajaxurl,
          data: {'action': 'filterPropreties'},
          success: function(response) {
            $('#selected-filters').empty();
            
            $('#enterprises-list').html(response.data);
            $('#filter-type').val('');
            $('#filter-city').val('');
            $('#filter-footage-min').val('');
            $('#filter-footage-max').val('');
            $('#filter-bedrooms').val('');
            $('#filter-vacancies').val('');
            $('#filter-investments-min').val('');
            $('#filter-investments-max').val('');
            $('#selected-filters').val('');
            $('#filter-datadeentrega').val('');
           
          },
          error: function(xhr, status, error) {
            console.error(error);
          }
        });
    })
    
    
    function updateSelectedFilters(value) {
        $('#selected-filters').append("<p>" + value + "</p>");
    }
    
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    });
    
    $("#filter-investments-min").maskMoney({prefix:'R$ ', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
    $("#filter-investments-max").maskMoney({prefix:'R$ ', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
    
    //******************
    // WHATS APP BUTTON
    //******************
    
    document.addEventListener('DOMContentLoaded', function () {
    var whatsappButton = document.getElementById('whatsapp-button');

    window.onscroll = function () {
      whatsappButton.style.bottom = (20 + window.scrollY) + 'px';
    };
  });
  
  
    
  //******************
    // LOAD MORE BUTTON
    //******************
    var ppp = 6; // Post per page
    var pageNumber = 1;



function load_posts(){
    pageNumber++;
    var filterData = buildFilterArrays();
    var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
    $.ajax({
        type: "POST",
        dataType: "html",
        url: myAjax.ajaxurl,
        data: {
             'pageNumber': pageNumber,
             'ppp' : ppp,
             'action': 'more_post_ajax' ,  
             'filter': filterData.filters,
             'value': filterData.values,
        },

        beforeSend: function(xhr) {
            $("#more_posts").html("Carregando...");
        },
        success: function(data){
            var $data = $(data);
            if($data.length){
                $(".enterprises-list").append($data);
                $("#more_posts").html("Ver mais empreendimentos");
                if($data.length < ppp) {
                    $("#more_posts").remove();    
                }
            } else{
                $("#more_posts").remove();
            }
        },
        error : function(jqXHR, textStatus, errorThrown) {
            $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
        }

    });
    return false;
}

$(document).on("click", "#more_posts",function(){
   
    $("#more_posts").attr("disabled",true); 
    load_posts();
});  

//========================================================
    // MASK FOR PHONE
    //========================================================

    $('#et_pb_contact_celular_0').on('input', function() {
        var phone = $(this).val();
      
        phone = phone.replace(/\D/g, ''); // Remove caracteres não numéricos

        if (phone.length > 11) {
            phone = phone.slice(0, 11); // Limita o tamanho máximo do telefone
        }

        // Formata o telefone
        if (phone.length > 10) {
            phone = phone.replace(/^(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
        } else if (phone.length > 5) {
            phone = phone.replace(/^(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3');
        } else if (phone.length > 2) {
            phone = phone.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
        }

        // Atualiza o valor do campo
        $(this).val(phone);
    });
    
    
    
    // 404 random text
    
    function elementExists(elementId) {
          return document.getElementById(elementId) !== null;
    }
    if (elementExists("random-text-404")) {
      var errorMessages = [
        "Essa página não está onde deveria! Será que enterrei ela com meus ossos?",
        "Não consegui farejar essa página! Vou precisar de mais que um osso para encontrá-la!",
        "Essa página passou mais rápida que uma bola! Será que ela rolou para algum servidor distante?",
        "Essa página foi para onde todos os papeis vão... direto para o estômago de um cachorro faminto!",
        "Mmmm, parece que essa página virou petisco!"
      ];
    
      function updateErrorMessage() {
        var randomNumber = Math.floor(Math.random() * errorMessages.length);
        document.getElementById("random-text-404").textContent = errorMessages[randomNumber];
      }
    
      updateErrorMessage();
    }
    
    
    
 

});