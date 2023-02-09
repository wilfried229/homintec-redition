
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{env('APP_NAME')}} - @yield("title")</title>
    @include("pdf.partials.style")
    @yield("css")

</head>
<body>
<script type="text/php">
        if (isset($pdf) ) {
            $y = $pdf->get_height() - 100;
            $x = $pdf->get_width() - 150 - 200;
            $pdf->page_text($x, $y, "Page : {PAGE_NUM} / {PAGE_COUNT}", '', 9, array(0,0,0));
        }
    </script>
{{--  <header>
    <div>
        <img src="{{public_path().'/img/facture_en_tete.PNG'}}">
    </div>
</header>
    <footer>
        <img src="{{public_path().'/img/facture_pied_de_page.PNG'}}">
    </footer>  --}}
<main>
    @yield("content")
</main>
</body>
</html>
