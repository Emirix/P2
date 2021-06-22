jQuery(".form-valide").validate({
    rules: {
        "val-adsoyad": {
            required: !0,
            minlength: 3
        },
        "val-magaza": {
            required: !0
        },
        "val-username": {
            required: !0,
            minlength: 3
        },
        "val-email": {
            required: !0,
            email: !0
        },
        "val-password": {
            required: !0,
            minlength: 10
        },
        "val-confirm-password": {
            required: !0,
            equalTo: "#val-password"
        },
        "val-select2": {
            required: !0
        },
        "val-kvk": {
            required: !0
        },
        "val-select2-multiple": {
            required: !0,
            minlength: 2
        },
        "val-suggestions": {
            required: !0,
            minlength: 5
        },
        "val-magaza-adres": {
            required: !0,
            minlength: 5
        },
        "val-skill": {
            required: !0
        },
        "val-currency": {
            required: !0,
            currency: ["$", !0]
        },
        "val-website": {
            required: !0,
            url: !0
        },
        "val-phone": {
            required: !0,
            phone: !0
        },
        "val-digits": {
            required: !0,
            digits: !0
        },
        "val-number": {
            required: !0,
            number: !0
        },
        "val-range": {
            required: !0,
            range: [1, 5]
        },
        "val-terms": {
            required: !0
        }
    },
    messages: {
        "val-username": {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 3 characters"
        },
        "val-adsoyad": {
            required: "Lütfen Ad Soyad yazınız.",
            minlength: "Ad Soyad en az 3 karakterden oluşmalıdır!"
        },
        "val-magaza": "Lütfen Mağazanın Adını yazınız.",
        "val-email": "Lütfen geçerli bir E-Posta adresi yazınız.",
        "val-kvk": "Lütfen geçerli bir KvK numarası giriniz!",
        "val-password": {
            required: "Lütfen bir şifre girin",
            minlength: "Şifreniz en az 10 karakter uzunluğunda olmalıdır"
        },
        "val-confirm-password": {
            required: "Lütfen bir şifre girin",
            minlength: "Şifreniz en az 10 karakter uzunluğunda olmalıdır",
            equalTo: "Please enter the same password as above"
        },
        "val-select2": "Please select a value!",
        "val-select2-multiple": "Please select at least 2 values!",
        "val-suggestions": "What can we do to become better?",
        "val-magaza-adres": "Lütfen Mağazanın geçerli konum bilgisini yazınız!",
        "val-skill": "Please select a skill!",
        "val-currency": "Lütfen geçerli bir tutar giriniz!",
        "val-website": "Lütfen web site adresi yazınız!",
        "val-phone": "Lütfen bir telefon numarası girin!",
        "val-digits": "Please enter only digits!",
        "val-number": "Please enter a number!",
        "val-range": "Please enter a number between 1 and 5!",
        "val-terms": "You must agree to the service terms!"
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
    },
});


jQuery(".form-valide-with-icon").validate({
    rules: {
        "val-username": {
            required: !0,
            minlength: 3
        },
        "val-password": {
            required: !0,
            minlength: 5
        }
    },
    messages: {
        "val-username": {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 3 characters"
        },
        "val-password": {
            required: "Lütfen bir şifre girin",
            minlength: "Şifreniz en az 5 karakter uzunluğunda olmalıdır"
        }
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-valid")
    }




});