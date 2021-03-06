$(document).ready(function() {
    var getUrl = window.location;
    var baseUrle = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
    $(".exec").click(function() {
        var id = $(this).data('id');
        var token = $(this).data('token');
        $.ajax({
            type: "post",
            url: baseUrle + "/dashboard/orders/execute",
            data: {
                id: id,
                _token: token
            },
            dataType: 'json',
            beforeSend: function(xhr) {
                $('#main_loader').addClass('active');
            },
            success: function(data) {
                $('#main_loader').removeClass('active');
                console.log(data);
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
    floatLabel();
    $('.float-label input, .float-label textarea').blur(function() {
        floatLabel();
    });

    function floatLabel() {
        $('.float-label input, .float-label textarea').each(function() {
            if ($(this).val()) {
                $(this).next().addClass('stay-top');
            } else {
                $(this).next().removeClass('stay-top');
            }
        });
    }
    pillHeight();
    $(window).resize(function() {
        pillHeight();
        $('.mCustomScrollbar').mCustomScrollbar("update");
    });

    function pillHeight() {
        $('.pill-table').css({
            'max-height': $(window).height() / 1.75
        });
    }
    scroll_fun();
    $(document).scroll(function() {
        scroll_fun();
    });

    function scroll_fun() {
        var scroll_var = $(this).scrollTop();
        var ua = navigator.userAgent.toLowerCase();
        if (ua.indexOf('safari') != -1) {
            $('.animate-box').each(function() {
                var val_one = $(this).offset().top - $(window).height() + 50;
                if (scroll_var > val_one) {
                    $(this).addClass('animated fadeInUp');
                }
            });
        } else {
            $('.col-xs-12').removeClass('animate-box');
        }
    }
    $('.delete-tr').click(function() {
        $(this).parents('tr').remove();
    });
    $('.send-btn').fadeOut(0);
    $('.class-section:not(.disabled)').click(function() {
        $('[data-toggle="popover"]').popover();
        $('html, body').animate({
            scrollTop: $('.white-bg').offset().top
        }, 1500);
        if ($('#select-delivery').val()) {
            $('.class-section').removeClass('active');
            $('.class-block').removeClass('view-class').attr('style', '');
            $(this).addClass('active');
            $('.send-btn').fadeIn();
            var div_id = $(this).attr('id');
            $('.' + div_id).addClass('view-class').stop().animate({
                opacity: 1,
                top: 0
            }, 400);
        } else {
            $('#errorModal').modal('show');
            $('.class-section').removeClass('active');
            $('.class-block').removeClass('view-class').attr('style', '');
            $('.send-btn').fadeOut();
        }
        if (!$('.subject_select').checked) {
            $('#first_step_btn').prop('disabled', true);
        } else {
            $('#first_step_btn').prop('disabled', false);
        }
    });
    $('.add-more-material').fadeOut(0);
    $('.end-request').fadeOut(0);
    $('#first_step_btn').click(function() {
        if ($('.subject_select').is(':checked')) {
            setTimeout(function() {
                $('html, body').animate({
                    scrollTop: $('.no-shadow').offset().top
                }, 1200);
                $('.add-more-material').delay(500).fadeIn();
            }, 500);
            $(this).hide();
        }
    });
    $('#submit_mail_order_btn').click(function(e) {
        if ($('.subject_select').is(':checked')) {
            alert('الرجاء اختيار مواد قبل ارسال الطلب');
            e.preventDefault()
        }
    });
    $('.add-more-material').click(function() {
        $('html, body').animate({
            scrollTop: $('.white-bg.home').offset().top
        }, 1200);
        $(this).fadeOut(400);
        $('.end-request').delay(500).fadeIn();
    });
    $('.end-request').click(function() {
        $('html, body').animate({
            scrollTop: $('.no-shadow').offset().top
        }, 1200);
        $(this).fadeOut(400);
        $('.add-more-material').delay(500).fadeIn();
    });
    $('.no-shadow.form-box').css({
        'display': 'none'
    });
    $('#mk_mail_order').click(function(event) {
        $('.no-shadow.form-box').css({
            'display': 'block'
        });
        $('html, body').animate({
            scrollTop: $('.no-shadow').offset().top
        }, 1200);
        $(this).hide();
    });
    $('#select-delivery').change(function() {
        if ($(this).val()) {
            $('.mirror').animate({
                opacity: 0
            }, 400, function() {
                $(this).css({
                    'display': 'none'
                });
            });
        }
    });
    $('.checkbox-holder:not(.remember), #submit_options').click(function() {
        $('.pill-holder').addClass('open');
        setTimeout(function() {
            $('.pill-holder').removeClass("open");
        }, 2000);
        document.getElementById("select-delivery").disabled = true;
    });
    $('.pill-btn').click(function() {
        $('.pill-holder').toggleClass('open');
    });
    $('.box-hover-holder .checkbox-holder').each(function() {
        if ($(this).find('input').is(':checked')) {
            $(this).next('span.pull-left').css('opacity', '1');
        } else {
            $(this).next('span.pull-left').css('opacity', '0');
        }
    });
    $('.box-hover-holder .checkbox-holder').click(function() {
        $select_value = $("#select-delivery").val();
        if ($select_value == 3 || $select_value == 4) {
            if ($(this).find('.pop_up').is(':checked')) {
                $('#materialModal').css('display', 'block').animate(400, function() {
                    $('#materialModal').addClass('fade-in');
                });
                $(this).next('span.pull-left').css('opacity', '1');
            } else {
                $('#materialModal').removeClass('fade-in').animate(400, function() {
                    $('#materialModal').css('display', 'none');
                });
                $(this).next('span.pull-left').css('opacity', '0');
            }
        }
    });
    $('.box-hover-holder .checkbox-holder + span.pull-left').click(function() {
        $('#materialModal').css('display', 'block').animate(400, function() {
            $('#materialModal').addClass('fade-in');
        });
    });
    $('[data-dismiss="modal"]').click(function() {
        $('#materialModal').removeClass('fade-in').animate(400, function() {
            $('#materialModal').css('display', 'none');
        });
    });
    $('[data-toggle="popover"]').popover();
});