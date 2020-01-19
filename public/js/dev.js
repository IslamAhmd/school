var getUrl = window.location;
var baseUrl = getUrl.protocol + "//" + getUrl.host;
$(document).ready(function() {
    console.log(baseUrl);
    $('.subject_select').change(function() {
        var selection = this.checked ? "checked" : "unchecked";
        var id = $(this).data('id');
        if (selection == "checked") {
            $('#first_step_btn').prop('disabled', false);
            $select_value = $("#select-delivery").val();
            if ($select_value == 1) {
                $.ajax({
                    type: "post",
                    url: "http://localhost/school/public/carts",
                    data: {
                        id: id
                    },
                    beforeSend: function(xhr) {
                        $("#loader").addClass("active");
                    },
                    success: function(data) {
                        $("#loader").removeClass("active");
                        $("#no_matrial_found").remove();
                        $("#bill-tbody").append(data);
                        $.ajax({
                            type: "post",
                            url: "http://localhost/school/public/carts",
                            success: function(data) {
                                console.log('dsd', data);
                                $("#cart_total").html(data);
                            }
                        });
                    }
                });
            } else if ($select_value == 6) {
                $.ajax({
                    type: "post",
                    url: "http://localhost/school/public/carts",
                    data: {
                        id: id
                    },
                    beforeSend: function(xhr) {
                        $("#loader").addClass("active");
                    },
                    success: function(data) {
                        $("#loader").removeClass("active");
                        $("#no_matrial_found").remove();
                        $("#bill-tbody").append(data);
                        $.ajax({
                            type: "post",
                            url: "http://localhost/school/public/carts",
                            success: function(data) {
                                console.log('dsd', data);
                                $("#cart_total").html(data);
                            }
                        });
                    }
                });
            } else if ($select_value == 2) {
                $.ajax({
                    type: "post",
                    url: "http://localhost/school/public/carts",
                    data: {
                        id: id
                    },
                    beforeSend: function(xhr) {
                        $("#loader").addClass("active");
                    },
                    success: function(data) {
                        $("#loader").removeClass("active");
                        $("#no_matrial_found").remove();
                        $("#bill-tbody").append(data);
                        $.ajax({
                            type: "post",
                            url: "http://localhost/school/public/carts",
                            success: function(data) {
                                console.log(data);
                                $("#cart_total").html(data);
                            }
                        });
                    }
                });
            } else if ($select_value == 3 || $select_value == 4) {
                $.ajax({
                    type: "post",
                    url: "http://localhost/school/public/carts",
                    data: {
                        subject_id: id
                    },
                    beforeSend: function(xhr) {
                        $("#loader").addClass("active");
                    },
                    success: function(data) {
                        $("#loader").removeClass("active");
                        $("#subject_options_view").html(data);
                    }
                });
            } else if ($select_value == 5) {
                $.ajax({
                    type: "post",
                    url: "http://localhost/school/public/carts",
                    data: {
                        id: id
                    },
                    beforeSend: function(xhr) {
                        $("#loader").addClass("active");
                    },
                    success: function(data) {
                        $("#loader").removeClass("active");
                        $("#no_matrial_found").remove();
                        $("#bill-tbody").append(data);
                        $.ajax({
                            type: "post",
                            url: "http://localhost/school/public/carts",
                            success: function(data) {
                                $("#cart_total").html(data);
                            }
                        });
                    }
                });
            }
        } else {
            $.ajax({
                type: "post",
                url: "http://localhost/school/public/carts",
                data: {
                    id: id
                },
                dataType: 'json',
                beforeSend: function(xhr) {
                    $("#loader").addClass("active");
                },
                success: function(data, textStatus, jqXHR) {
                    $("#loader").removeClass("active");
                    if (data['action'] == "del") {
                        $(data['row_id']).fadeOut();
                        $("#cart_total").html(data['cart_total']);
                    }
                }
            });
        }
    });
    $('#submit_options').click(function() {
        $.ajax({
            type: "post",
            url: "http://localhost/school/public/carts",
            data: $("#options_form").serialize(),
            success: function(data) {
                $("#no_matrial_found").remove();
                $("#bill-tbody").append(data);
                $.ajax({
                    type: "post",
                    url: "http://localhost/school/public/carts",
                    success: function(data) {
                        $("#cart_total").html(data);
                    }
                });
            }
        });
    });
    $(".subject_select_kindergartens").click(function() {
        var selection = this.checked ? "checked" : "unchecked";
        var id = $(this).data('id');
        if (selection == "checked") {
            $select_value = $("#select-delivery").val();
            if ($select_value == 1) {
                $.ajax({
                    type: "post",
                    url: "http://localhost/school/public/carts",
                    data: {
                        id: id
                    },
                    beforeSend: function(xhr) {},
                    success: function(data) {
                        $("#no_matrial_found").remove();
                        $("#bill-tbody").append(data);
                        $.ajax({
                            type: "post",
                            url: "http://localhost/school/public/carts",
                            success: function(data) {
                                $("#cart_total").html(data);
                            }
                        });
                    }
                });
            } else if ($select_value == 2) {
                $.ajax({
                    type: "post",
                    url: "http://localhost/school/public/carts",
                    data: {
                        id: id
                    },
                    beforeSend: function(xhr) {},
                    success: function(data) {
                        $("#no_matrial_found").remove();
                        $("#bill-tbody").append(data);
                        $.ajax({
                            type: "post",
                            url: "http://localhost/school/public/carts",
                            success: function(data) {
                                $("#cart_total").html(data);
                            }
                        });
                    }
                });
            } else if ($select_value == 3 || $select_value == 4) {
                $.ajax({
                    type: "post",
                    url: "http://localhost/school/public/carts",
                    data: {
                        id: id
                    },
                    beforeSend: function(xhr) {},
                    success: function(data) {
                        $("#no_matrial_found").remove();
                        $("#bill-tbody").append(data);
                        $.ajax({
                            type: "post",
                            url: "http://localhost/school/public/carts",
                            success: function(data) {
                                $("#cart_total").html(data);
                            }
                        });
                    }
                });
            } else if ($select_value == 5) {
                $.ajax({
                    type: "post",
                    url: "http://localhost/school/public/carts",
                    data: {
                        id: id
                    },
                    beforeSend: function(xhr) {},
                    success: function(data) {
                        $("#no_matrial_found").remove();
                        $("#bill-tbody").append(data);
                        $.ajax({
                            type: "post",
                            url: "http://localhost/school/public/carts",
                            success: function(data) {
                                $("#cart_total").html(data);
                            }
                        });
                    }
                });
            } else if ($select_value == 6) {
                $.ajax({
                    type: "post",
                    url: "http://localhost/school/public/carts",
                    data: {
                        id: id
                    },
                    beforeSend: function(xhr) {},
                    success: function(data) {
                        $("#no_matrial_found").remove();
                        $("#bill-tbody").append(data);
                        $.ajax({
                            type: "post",
                            url: "http://localhost/school/public/carts",
                            success: function(data) {
                                $("#cart_total").html(data);
                            }
                        });
                    }
                });
            }
        } else {
            $.ajax({
                type: "post",
                url: "http://localhost/school/public/carts",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(data, textStatus, jqXHR) {
                    if (data['action'] == "del") {
                        $(data['row_id']).fadeOut();
                        $("#cart_total").html(data['cart_total']);
                    }
                }
            });
        }
        if (selection != "checked") {
            $('#first_step_btn').prop('disabled', true);
        } else {
            $('#first_step_btn').prop('disabled', false);
        }
    });
    $(".delete_cart").click(function() {
        var subject_id = $(this).data('subject_id');
        $x = $('[data-id=' + subject_id + ']').attr('checked', false);
        $(this).parents('tr').remove();
        var id = $(this).data('id');
        $.ajax({
            type: "post",
            url: "http://localhost/school/public/carts",
            data: {
                rowid: id
            },
            dataType: "json",
            success: function(data) {
                if (data['cart_total']) {
                    $("#cart_total").html(data['cart_total']);
                }
            }
        });
    });
    $("#first_step_btn").click(function(e) {
        if ($('.subject_select').is(':checked') || $('.subject_select_kindergartens').is(':checked')) {
            $select_value = $("#select-delivery").val();
            if ($select_value == 1 || $select_value == 2 || $select_value == 5 || $select_value == 6) {
                document.getElementById("select-delivery").disabled = true;
                $.ajax({
                    type: "post",
                    url: "http://localhost/school/public/carts",
                    data: {
                        id: $select_value
                    },
                    beforeSend: function(xhr) {
                        $("#loader").addClass("active");
                    },
                    success: function(data) {
                        $("#loader").removeClass("active");
                        $(".subject_options_div").addClass('hidden');
                        $("#content_new").append(data);
                        $('.shake-pill').click(function() {
                            $('.pill-holder').addClass('shake');
                            setTimeout(function() {
                                $('.pill-holder').removeClass("shake");
                            }, 1000);
                        });
                    }
                });
            } else if ($select_value == 3 || $select_value == 4) {
                document.getElementById("select-delivery").disabled = true;
                $select_value = $("#select-delivery").val();
                $.ajax({
                    type: "post",
                    url: "http://localhost/school/public/carts",
                    data: {
                        id: $select_value
                    },
                    beforeSend: function(xhr) {
                        $("#loader").addClass("active");
                    },
                    success: function(data) {
                        $("#loader").removeClass("active");
                        $(".subject_options_div").addClass('hidden');
                        $("#content_new").append(data);
                    }
                });
            } else {}
        } else {
            alert('ﺐﻠﻄﻟا ﻝﺎﺳﺭا ﻞﺒﻗ ﺩاﻮﻣ ﺭﺎﻴﺘﺧا ءﺎﺟﺮﻟا');
            e.preventDefault();
            return false
        }
    });
    $("#submit_mail_exec_order_btn").click(function(event) {
        event.preventDefault();
        var empty_input = 1;
        $('input:required').each(function() {
            if (!$(this).val()) {
                empty_input = 0;
                return false;
            }
        });
        if (empty_input == 1) {
            $.ajax({
                type: "post",
                url: "http://localhost/school/public/carts",
                data: $("#mail_exec_order_form").serialize(),
                dataType: "json",
                beforeSend: function() {
                    $("#loader").addClass("active");
                },
                success: function(data) {
                    $("#loader").removeClass("active");
                    if (data['valid'] == "success") {
                        window.location.href = data['redirect_url'];
                    }
                }
            });
        } else {}
    });
});