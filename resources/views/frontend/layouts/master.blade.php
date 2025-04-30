<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.head')
<body>

<!--==========================
    TOPBAR PART START
===========================-->
@include('frontend.layouts.topbar')
<!--==========================
    TOPBAR PART END
===========================-->


<!--==========================
   NAVBAR Start
===========================-->
@include('frontend.layouts.header')
<!--==========================
    NAVBAR End
===========================-->


@yield('content')


<!--=============SCROLL BTN==============-->
<div class="scroll_btn">
    <i class="fas fa-chevron-up"></i>
</div>
<!--=============SCROLL BTN==============-->


<!--==========================
    FOOTER PART START
===========================-->
@include('frontend.layouts.footer')
<!--==========================
    FOOTER PART END
===========================-->


@include('frontend.layouts.scripts')

</body>

</html>