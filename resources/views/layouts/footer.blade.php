<footer>
    <div class="container">
        <div class="grid-footer-full">
            <div class="grid-footer-left">
                <div><a href=""><img src="{{asset("frontend/IMAGE/icons/logo.svg")}}" alt=""></a></div>
                <div class="">
                    <a href="" class="me-3 me-sm-4"><i class="fab fa-facebook-f"></i></a>
                    <a href="" class="me-3 me-sm-4"><i class="fab fa-instagram"></i></a>
                    <a href="" class="me-3 me-sm-4"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="grid-footer-right">
                <div class="mt-4 mt-sm-0">
                    <a href="">Xidmətlər</a>
                    <a href="">Haqqımızda</a>
                    <a href="">İstifadəçi Razılaşması</a>
                </div>
                <div>
                    <a href="">Rieltorlar</a>
                    <a href="">Media</a>
                    <a href="">Sistemə Giriş</a>
                </div>
                <div class="mt-4 mt-sm-0">
                    <div class="footer-g-contact">
                        <div class="footer-g-contact-title">Bizimlə Əlaqə</div>
                        <div class="color7A">
                            <div class="desktop--phone">
                                <span><i class="fas fa-phone-alt"></i></span>
                                <span>*8555 —  (+994 50) 322 85 55</span>
                            </div>
                            <div class="mobile--phone">
                                <span><i class="fas fa-phone-alt"></i></span>
                                <span><a href="tel:*8555" class="color7A">*8555</a>—  <a href="tel:(+994 50) 322 85 55" class="color7A">(+994 50) 322 85 55</a></span>
                            </div>
                            <div>
                                <span><i class="fas fa-envelope"></i></span>
                                <span><a href="mailto:info@muqavile.az" class="mailto">info@muqavile.az</a></span>
                            </div>
                            <div>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <span>Badamdar, 305-ci döngə</span>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">All Rights Reserved. Abasoft <span></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="ending-page"></div>
</footer>

<script src="{{asset("frontend/JS/jquery.min.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/az.js"></script>
<script>
    window.$(document).ready(function() {
        window.$(".bd-calendar").flatpickr({
            // inline: true
            "locale": "az"
        });

    })
</script>
<script src="{{asset("frontend/JS/owl.carousel.min.js")}}"></script>
<script>
    var years = document.getElementsByClassName('years')[0];
    var tStamp = new Date(1000).getFullYear() + 1;
    console.log(new Date(1000));
    var now = new Date().getFullYear();
    var month = new Date('January')
    console.log(month);
    var diff = now - tStamp
    if(years) {
        while ( tStamp <= now ) {
            years.innerHTML += `<option value=${tStamp++}>${tStamp}</option>`;
        }
    }
</script>
<script src="{{asset("frontend/JS/dropzone.js")}}"></script>
<script>
    Dropzone.prototype.defaultOptions.dictDefaultMessage = "Faylı seçmək üçün kliklə";
</script>
<script src="{{asset("frontend/JS/script.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset("frontend/JS/bootstrap.min.js")}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

{{-- <script src="{{asset("frontend/JS/calendar.js")}}"></script> --}}
<script>
$(".js-example-placeholder-single").select2({
    placeholder: "Select a state",
    allowClear: true,
    // language: "az",
    "language": {
       "noResults": function(){
           return "Netice yoxdur";
       }
   },
    escapeMarkup: function (markup) {
        return markup;
    }
});
//     document.addEventListener('DOMContentLoaded', function() {
//     var calendarEl = document.getElementById('calendar');
//     var calendar = new FullCalendar.Calendar(calendarEl, {
//       initialView: 'dayGridMonth'
//     });
//     calendar.render();
//   });
// </script>
<script src="{{asset("frontend/JS/datepicker.js")}}"></script>
<script src="{{asset("frontend/JS/moment.js")}}"></script>

<script>


//     // console.log(moment().format('MMMM Do YYYY, h:mm:ss a'), 'var');
//     // console.log(moment("20120620", "YYYYMMDD").fromNow(), 'now');
//     // console.log(moment().startOf('day').fromNow(), 'cal');
//     function monthDiff(d1, d2) {
//     var months;
//     months = (d2.getFullYear() - d1.getFullYear()) * 12;
//     months -= d1.getMonth();
//     months += d2.getMonth();
//     return months <= 0 ? 0 : months;
// }

// function test(d1, d2) {
//     var diff = monthDiff(d1, d2);
//     console.log(
//         d1.toISOString().substring(0, 10),
//         "to",
//         d2.toISOString().substring(0, 10),
//         ":",
//         diff
//     );
// }

// test(
//     new Date(1945, 10, 4), // November 4th, 2008
//     new Date(2010, 2, 12)  // March 12th, 2010
// );
    // moment().format('MMMM Do YYYY, h:mm:ss a')
</script>

{{-- <script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth'
      });
      calendar.render();
    });
           $(document).ready(function() {
                                            $('.arrive-calendar').datepicker({
                                                inline: true,
                                            });
                                        })
  </script> --}}

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}

</body>
</html>

