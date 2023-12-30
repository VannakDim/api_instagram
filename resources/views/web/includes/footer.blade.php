<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<div class="clearfix"></div>
<style type="text/css">

/* #footer a:hover { color: hsl(0, 0%, 59%); } */
hr{
    border-top: 1px #d8d6d6 dashed;
    margin-top: 10px;
    margin-bottom: 10px;
}
.d-flex{
    display: flex;
}

.btn-link:hover{
    letter-spacing: 1px;
    text-decoration: none;
    color: #d8d6d6;
}

</style>


<div id="footer" class="footer">
    <div class="container">
        <div class="row">
            {{-- <div class="col-md-4">
                <div class="footer-heading">
                    BSEA Info
                </div>
                <div class="clearfix"></div>
                <hr class="hr">
                <p style="line-height: 24px; color: #fff; margin: 0 0 10px; font-size: 13px; letter-spacing: 0.09px;">{{ $setting->about_us }}</p>
            </div> --}}
            <div class="col-md-6">
                <div class="footer-heading">
                    Address
                </div>
                <div class="clearfix"></div>
                <hr class="hr">
                <p style="line-height: 24px; color: #fff; margin: 0 0 10px; font-size: 13px; letter-spacing: 0.09px;">ភូមិតាងួន សង្កាត់កាកាប ខ័ណ្ឌពោធិសែនជ័យ រាជធានីភ្នំពេញ<br>
                
                <div class="clearfix visible-xs"><br></div>
            </div>

            <div class="col-md-3">
                <div class="footer-heading">
                    Company
                </div>
                <div class="clearfix"></div>
                <hr class="hr">
                {{-- @foreach($pages as $page) --}}
                {{-- <a class="btn-link" href="{{ route('pagePage', $page->page_slug) }}">{{ $page->page_name }}</a><br> --}}
                {{-- @endforeach --}}
                <a class="btn-link" href="#">Contact Us</a><br>
                <div class="clearfix visible-xs"><br></div>
            </div>

            <div class="col-md-3">
                <div class="footer-heading">
                        Social Address
                </div>
                <div class="clearfix"></div>
                <hr class="hr">
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fa fa-paper-plane"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="clearfix"></div>
<div id="footer-bottom">
    <div class="container">
        <div class="row" style="margin-right: -15px; margin-left: -15px;">
            <div class="col-md-12 text-center">
                <span style="color: #fff; font-size: 13px; margin: 0px; padding: 0px">
                    Copyright © 2023 <a href="https://facebook.com/programmerkonkhmer" target="_blank" style="color: #fff">កូនខ្មែរ</a>, All rights reserved.
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
