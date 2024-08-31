<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="{{ asset("assets/css/certificate.css") }}"/>
</head>
<body>


<!-- ---------------------------------------------------------------------------------------------- -->


<br/>
<div class="container">
    <img src="{{ asset('assets/images/certificate.png') }}" alt="" style="width: 100%"/>

    <img
        src="{{ asset('assets/images/ministryfinance.png') }}"
        alt=""
        class="top-left-ministry"
        style="width: 150px; height: 100px"
    />

    <img
        src="{{ asset('assets/images/logo_bstf.png') }}"
        alt=""
        class="top-right-logo"
        style="width: 170px; height: 150px"
    />

    <div class="centered-top-2">
        <div>
            <p>Bangladesh Sweden Trust Fund</p>
        </div>
    </div>

    <div class="centered-top-3">
        <p>Certificate of Scholarship</p>
    </div>

    <div class="centered-top-4">
        <p>
            This is to certify that
            <span style="font-weight: bold"
                  id="worker_name">{{ $user->personal->fname .' '.$user->personal->lname }}</span>
            has been awarded the BSTF travel grant.
            <span style="font-weight: bold" id="worker_position"></span>
        </p>
    </div>

    <br/><br/>
    <div class="bottom-right">
        <span class="footer-1-name"
        ><img
                src="{{ asset('storage/' . $user->application->digital_signature ) }}"
                alt=""
                style="width: 100px; display: block; margin: auto"
            /></span>
        <hr style="width: 300px"/>
        <span class="footer-1-name">{{ $user->application->authorized_personnel ?? "Md. Noman Hossain" }}</span><br/>
        <span class="footer-1-name"><strong>Deputy Secretary</strong></span
        ><br/>
        <span class="footer-1-name"
        >FNF section , Ministry of Finance <br/>Economic Relations Division </span
        >
    </div>


</div>
</body>
</html>

<script>
    var css = '@page { size: landscape; margin: 0}',
        head = document.head || document.getElementsByTagName('head')[0],
        style = document.createElement('style');

    style.type = 'text/css';
    style.media = 'print';

    if (style.styleSheet) {
        style.styleSheet.cssText = css;
    } else {
        style.appendChild(document.createTextNode(css));
    }

    head.appendChild(style);

    window.print();

</script>
