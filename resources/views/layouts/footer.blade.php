<footer>
    <div class="container">
        <div class="grid-footer-full">
            <div class="grid-footer-left">
                <div><a href=""><img src="{{asset("frontend/IMAGE/icons/logo.svg")}}" alt=""></a></div>
                <div class="">
                    <a href="" class="me-4"><i class="fab fa-facebook-f"></i></a>
                    <a href="" class="me-4"><i class="fab fa-instagram"></i></a>
                    <a href="" class="me-4"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="grid-footer-right">
                <div class="mt-4 mt-sm-0">
                    <a href="{{route("about")}}">Haqqımızda</a>
                    <a href="">Xidmətlər</a>
                    <a href="">İstifadəçi Razılaşması</a>
                </div>
                <div>
                    <a href="">Rieltorlar</a>
                    <a href="">Media</a>
                    <a href="">Sistemə Giriş</a>
                </div>
                <div class="mt-4 mt-sm-4">
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
<script src="{{asset("frontend/JS/owl.carousel.min.js")}}"></script>
<script>
    // $(document).ready(function() {
    //     $('.arrive-calendar').datepicker({
    //         inline: true,
    //     });
    // })
        var years = document.getElementsByClassName('years')[0];
        var tStamp = new Date(1000).getFullYear() + 1;
        // console.log(tStamp +  1);
        var now = new Date().getFullYear();
        var month = new Date('January')
        console.log(month);
        var diff = now - tStamp
        while ( tStamp <= now ) {
            years.innerHTML += `<option value=${tStamp++}>${tStamp}</option>`;
        }
  </script>
  {{-- <script>
    var allOption = document.querySelectorAll('.my-select select option');
    var mySelect = document.querySelectorAll('.my-select')[0];
    var cloneSelect = document.querySelectorAll('.clone-select')[0];
    var cloneOption = document.querySelectorAll('.clone-option')[0];
    for(let i=0; i< allOption.length; i++) {
            var div = document.createElement('div');
            if(!allOption[i].classList.contains('selected')) {
                div.innerHTML = allOption[i].value;
                cloneOption.append(div);
            } else {
                cloneSelect.innerHTML = allOption[i].value;
            }
        }
    cloneSelect.addEventListener("click", () => {
        if(!cloneOption.classList.contains('active')) {
            cloneOption.classList.add('active')
            cloneSelect.style.border = '1px solid transparent'
            cloneSelect.style.backgroundColor = '#F2F7FF'
            mySelect.style.border = '1px solid #0074E1'
            mySelect.style.backgroundColor = "#F2F7FF"
        }
        else {
            cloneOption.classList.remove('active')
            cloneSelect.style.border = '1px solid #C7C7C7';
            cloneSelect.style.backgroundColor = '#fff'
            mySelect.style.border = '1px solid transparent';
            mySelect.style.backgroundColor = "transparent"
        }
    })
    var option = document.querySelectorAll('.clone-option div');
    for (let index = 0; index < option.length; index++) {
        option[index].addEventListener('click', function() {
            var old = cloneSelect.innerText;
            cloneSelect.innerHTML = this.innerHTML;
            this.innerHTML = old;
            cloneOption.classList.remove('active')
            cloneOption.classList.remove('active')
            cloneSelect.style.border = '1px solid #C7C7C7'
            mySelect.style.border = '1px solid transparent';
            mySelect.style.backgroundColor = "transparent"
        })
    }

    var now = new Date().getFullYear();
    var stamp = new Date(1000);

    // var distance = now - stamp;
    console.log(Number(Date.now()));
</script> --}}
<script src="{{asset("frontend/JS/script.js")}}"></script>
<script src="{{asset("frontend/JS/bootstrap.min.js")}}"></script>
{{-- <script src="{{asset("frontend/JS/calendar.js")}}"></script> --}}
<script src="{{asset("frontend/JS/datepicker.js")}}"></script>
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

