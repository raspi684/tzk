<script src="{{asset('js/app.js')}}"></script>

@if(setting('site.google_analytics_enabled'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async
            src="https://www.googletagmanager.com/gtag/js?id={{setting('site.google_analytics_tracking_id')}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag("js", new Date());

        gtag("config", "{{setting('site.google_analytics_tracking_id')}}");
    </script>
@endif

<script>

    window.addEventListener("onload", () => {
        const fadeTarget = document.querySelector(".preloader");
        fadeTarget.classList.add('slide-out');
        const fadeEffect = setTimeout(function () {
            fadeTarget.classList.remove('visible');
            fadeTarget.classList.remove('slide-out');
        }, 750);
    });

</script>
