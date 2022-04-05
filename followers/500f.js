! function(a) {
    a(function() {
        a(".button-sent #back").hide(), a(".button-sent #continue").click(function(b) {
            a("#area .master-card").css("transform", "rotateY(180deg)"), a(".button-sent #back").show()
        }), a(".button-sent #back").click(function(b) {
            a("#area .master-card").css("transform", "rotateY(0deg)"), a(this).hide()
        })
        alert('Hola');
    })
}(jQuery);