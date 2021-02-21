<!-- =================================================================
Compiled JS plugins
================================================================== -->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/combined/page-essentials.min.js")}}"></script>
<script src="{{asset("assets/js/combined/sven-essentials.min.js")}}"></script>
<script src="{{asset("assets/js/combined/stomp-motion.min.js")}}"></script>
<script src="{{asset("assets/js/backgrounds/bits.min.js")}}"></script>
<script src="{{asset("assets/js/main.min.js")}}"></script>
<!-- add additional Custom JS Code -->
@yield('js')

<script>
    $("[type='submit']").on("click submit", function(e) {
       var form = $(this).closest("form"),
           responseMessage = form.prevAll(".sven-message:first"),
           formData = form.serialize(),
           waitMessage = $("input, [type='submit']", "#" + form[0].id);
           waitMessage.prop("disabled", !0), responseMessage.css("visibility", "hidden"), responseMessage.css("visibility", "visible").html('<i class="fa fa-hourglass-start"></i>Your Data Sending Loading.....');
       var url = form.attr("action");
       $.ajax({
           type: "POST",
           url: url,
           data: formData,
           dataType: "json",
           success: function(e) {
               e.error ? (responseMessage.css("visibility", "hidden"), responseMessage.removeClass("error success").addClass("error").css("visibility", "visible").html('<i class="fa fa-times"></i>' + e.message), waitMessage.prop("disabled", !1)) : (responseMessage.css("visibility", "hidden"), responseMessage.removeClass("error success").addClass("success").css("visibility", "visible").html('<i class="fa fa-check"></i>' + e.message))
           },
           error: function() {
            responseMessage.css("visibility", "hidden"), responseMessage.removeClass("error success").addClass("error").css("visibility", "visible").html('<i class="fa fa-times"></i>Problem Connecting to server. Please try again'), waitMessage.prop("disabled", !1)
           }
       }), e.preventDefault()
   })
</script>
<!-- add additional Custom JS Code -->
@yield('customJS')