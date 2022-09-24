<link rel="stylesheet" href="css/carrossel.css">

<script type="text/javascript" src="js/instafeed.min.js"></script>
<script src="js/jquery.min.js"></script>

<div class="carousel">
    <div class="wrap">
        <ul id="instafeed">

        </ul>
    </div>

</div>



<script type="text/javascript">
    var feed = new Instafeed({
        accessToken: 'IGQVJWVjJ3UXo4MVMxX0pvci1sbHFteXBUX1VweXRsanBUblQ2dGR2LTNKb3Y5YnJqcXVBYWZAyT2xaNHA4cVRRemxZATzU5NkViMm0tZAXd1aFFWMVJnUGpkZAkdSLTR2aDNFelJ6a000dDdZANDBPR1lSQgZDZD',
        limit: 12
    });

    feed.run();
</script>
