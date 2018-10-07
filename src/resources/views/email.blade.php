<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>ZURBemails</title>
    <style>
        /* -------------------------------------
		GLOBAL
        ------------------------------------- */
        * {
            margin: 0;
            padding: 0;
        }

        * {
            font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
        }

        img {
            max-width: 100%;
        }

        .collapse {
            margin: 0;
            padding: 0;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100% !important;
            height: 100%;
        }

        /* -------------------------------------
                ELEMENTS
        ------------------------------------- */
        a {
            color: #2BA6CB;
        }

        .btn {
            text-decoration: none;
            color: #FFF;
            background-color: #666;
            padding: 10px 16px;
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
        }

        p.callout {
            color: {{ $theme['section-color'] ?? '#ffffff' }};
            padding: 15px;
            background-color: {{ $theme['section-bg-color'] ?? '#333333' }};
            margin-bottom: 0px;
        }

        .callout a {
            font-weight: bold;
            color: #2BA6CB;
        }

        table.social {
            /* 	padding:15px; */
            background-color: #ebebeb;

        }

        .social .soc-btn {
            padding: 3px 7px;
            font-size: 12px;
            margin-bottom: 10px;
            text-decoration: none;
            color: #FFF;
            font-weight: bold;
            display: block;
            text-align: center;
        }

        a.fb {
            background-color: #3B5998 !important;
        }

        a.tw {
            background-color: #1daced !important;
        }

        a.gp {
            background-color: #DB4A39 !important;
        }

        a.ms {
            background-color: #000 !important;
        }

        .sidebar .soc-btn {
            display: block;
            width: 100%;
        }

        /* -------------------------------------
                HEADER
        ------------------------------------- */
        table.head-wrap {
            width: 100%;
        }

        .header.container table td.logo {
            padding: 15px;
        }

        .header.container table td.label {
            padding: 15px;
            padding-left: 0px;
        }

        /* -------------------------------------
                BODY
        ------------------------------------- */
        table.body-wrap {
            width: 100%;
            border-spacing: 0;
        }

        /* -------------------------------------
                FOOTER
        ------------------------------------- */
        table.footer-wrap {
            width: 100%;
            clear: both !important;
        }

        .footer-wrap .container td.content p {
            border-top: 1px solid rgb(215, 215, 215);
            padding-top: 15px;
        }

        .footer-wrap .container td.content p {
            font-size: 10px;
            font-weight: bold;

        }

        /* -------------------------------------
                TYPOGRAPHY
        ------------------------------------- */
        h1, h2, h3, h4, h5, h6 {
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            line-height: 1.1;
            margin-bottom: 15px;
            color: #000;
        }

        h1 small, h2 small, h3 small, h4 small, h5 small, h6 small {
            font-size: 60%;
            color: #6f6f6f;
            line-height: 0;
            text-transform: none;
        }

        h1 {
            font-weight: 200;
            font-size: 44px;
        }

        h2 {
            font-weight: 200;
            font-size: 37px;
        }

        h3 {
            font-weight: 500;
            font-size: 27px;
        }

        h4 {
            font-weight: 500;
            font-size: 23px;
        }

        h5 {
            font-weight: 900;
            font-size: 17px;
        }

        h6 {
            font-weight: 900;
            font-size: 14px;
            color: #444;
        }

        .collapse {
            margin: 0 !important;
        }

        p, ul {
            margin-bottom: 10px;
            font-weight: normal;
            font-size: 14px;
            line-height: 1.6;
        }

        p.lead {
            font-size: 17px;
        }

        p.last {
            margin-bottom: 0px;
        }

        ul li {
            margin-left: 5px;
            list-style-position: inside;
        }

        /* -------------------------------------
                SIDEBAR
        ------------------------------------- */
        ul.sidebar {
            color: {{ $theme['section-color'] ?? '#ffffff' }};
            background: {{ $theme['section-bg-color'] ?? '#333333' }};
            display: block;
            list-style-type: none;
        }

        ul.sidebar li {
            display: block;
            margin: 0;
        }

        ul.sidebar li a {
            text-decoration: none;
            color: {{ $theme['section-color'] ?? '#ffffff' }};
            padding: 10px 16px;
            /* 	font-weight:bold; */
            margin-right: 10px;
            /* 	text-align:center; */
            cursor: pointer;
            border-bottom: 1px solid {{ $theme['body-bg-color'] ?? '#ded8d8' }};
            display: block;
            margin: 0;
        }

        ul.sidebar li a.last {
            border-bottom-width: 0px;
        }

        ul.sidebar li a h1, ul.sidebar li a h2, ul.sidebar li a h3, ul.sidebar li a h4, ul.sidebar li a h5, ul.sidebar li a h6, ul.sidebar li a p {
            margin-bottom: 0 !important;
        }

        /* ---------------------------------------------------
                RESPONSIVENESS
                Nuke it from orbit. It's the only way to be sure.
        ------------------------------------------------------ */

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block !important;
            max-width: 1000px !important;
            margin: 0 auto !important; /* makes it centered */
            clear: both !important;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            padding: 15px;
            max-width: 1000px;
            margin: 0 auto;
            display: block;
        }

        /* Let's make sure tables in the content area are 100% wide */
        .content table {
            width: 100%;
        }

        /* Odds and ends */
        .column {
            width: 500px;
            float: left;
        }

        .column tr td {
            padding: 15px;
            padding-bottom: 0;
        }

        .column-wrap {
            padding: 0 !important;
            margin: 0 auto;
            max-width: 1000px !important;
        }

        .column table {
            width: 100%;
        }

        .social .column {
            width: 280px;
            min-width: 279px;
            float: left;
        }

        /* Be sure to place a .clear element after each set of columns, just to be safe */
        .clear {
            display: block;
            clear: both;
        }

        /* -------------------------------------------
                PHONE
                For clients that support media queries.
                Nothing fancy.
        -------------------------------------------- */
        @media only screen and (max-width: 1000px) {

            a[class="btn"] {
                display: block !important;
                margin-bottom: 10px !important;
                background-image: none !important;
                margin-right: 0 !important;
            }

            div[class="column"] {
                width: auto !important;
                float: none !important;
            }

            table.social div[class="column"] {
                width: auto !important;
            }

        }

    </style>
</head>
<body bgcolor="{{ $theme['bg-color'] ?? '#303030' }}" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">

<table cellspacing="0" class="head-wrap">
    <tr>
        <td></td>
        <td class="header container" style="background-color:{{ $theme['header-bg-color'] ?? '#2a2a2a' }};">
            <div class="content">
                <table>
                    <tr>
                        <td align="center">
                            <h6 class="collapse" style="color:{{ $theme['header-color'] ?? '#ffffff' }};line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;margin-bottom:5px;text-align:center;">{{ trans('lre::report.title') }}</h6>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>

<table class="body-wrap">
    <tr>
        <td></td>
        <td class="container" bgcolor="{{ $theme['body-bg-color'] ?? '#ded8d8' }}">
            <div class="column-wrap">
                <div class="column" style="width: 400px;">
                    <table>
                        <tr>
                            <td>
                                <p class="callout" style="background-color:{{ $theme['section-bg-color'] ?? '#333333' }};color:{{ $theme['section-color'] ?? '#ffffff' }};">
                                    <span style="font-weight:900;color:{{ $theme['section-title-color'] ?? '#4bb1b1' }};line-height:normal;">{{ trans('lre::report.url') }} :</span>
                                    <br>{{ $error_url }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="callout" style="background-color:{{ $theme['section-bg-color'] ?? '#333333' }};color:{{ $theme['section-color'] ?? '#ffffff' }};">
                                    <span style="font-weight:900;color:{{ $theme['section-title-color'] ?? '#4bb1b1' }};line-height:normal;">{{ trans('lre::report.timestamp') }} :</span>
                                    <br>{{ $error_time }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="callout" style="background-color:{{ $theme['section-bg-color'] ?? '#333333' }};color:{{ $theme['section-color'] ?? '#ffffff' }};">
                                    <span style="font-weight:900;color:{{ $theme['section-title-color'] ?? '#4bb1b1' }};line-height:normal;">{{ trans('lre::report.class') }} :</span>
                                    <br>{{ $error_class }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="callout" style="background-color:{{ $theme['section-bg-color'] ?? '#333333' }};color:{{ $theme['section-color'] ?? '#ffffff' }};">
                                    <span style="font-weight:900;color:{{ $theme['section-title-color'] ?? '#4bb1b1' }};line-height:normal;">{{ trans('lre::report.message') }} :</span>
                                    <br>{{ $error_message }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="callout" style="background-color:{{ $theme['section-bg-color'] ?? '#333333' }};color:{{ $theme['section-color'] ?? '#ffffff' }};">
                                    <span style="font-weight:900;color:{{ $theme['section-title-color'] ?? '#4bb1b1' }};line-height:normal;">{{ trans('lre::report.env-variables') }} :</span>
                                    @foreach($server_vars as $index => $variable)
                                        <br><span style="color:{{ $theme['first-color'] ?? '#ef7c61' }};font-size:14px;">{{ $index }}</span>
                                        <span style="font-size:14px; word-break: break-all;">=> {{ print_r($variable, true) }}</span>
                                    @endforeach
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="column" style="width: 600px;">
                    <table>
                        <tr>
                            <td>
                                <ul class="sidebar" style="color:{{ $theme['section-color'] ?? '#ffffff' }};background-color:{{ $theme['section-bg-color'] ?? '#333333' }}">
                                    <li>
                                        <a class="last">
                                            <p>
                                                <span style="font-weight:900;color:{{ $theme['section-title-color'] ?? '#4bb1b1' }};line-height:normal;">{{ trans('lre::report.stacktrace') }} : </span>
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <p>
                                                <span>[#0]</span>
                                                <span style="color:{{ $theme['first-color'] ?? '#ef7c61' }};text-align:left;font-weight:normal;font-family:Helvetica,Arial,sans-serif;margin-bottom:0;line-height:150%;border-radius: 12px;">{{ $filename }}</span>
                                                <span>(l.{{ $line }})</span>
                                            </p>
                                        </a>
                                    </li>
                                    @foreach($stack_trace as $index => $row)
                                        <li>
                                            <a>
                                                <p style="word-break: break-word;">
                                                    <span>[#{{ ($index + 1) }}]</span>
                                                    <span style="color:{{ $theme['first-color'] ?? '#ef7c61' }};word-break:break-word;">{{ $row['file'] }}</span>
                                                    <span>(l.{{ $row['line'] }})</span>
                                                    <span style="color:{{ $theme['second-color'] ?? '#4bb1b1' }};">{{ $row['class'] }}</span>{{ $row['type'] }}<span style="color:{{ $theme['third-color'] ?? '#bcd42a' }};">{{ $row['function'] }}</span>()
                                                </p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="clear"></div>
            </div>
        </td>
        <td></td>
    </tr>
</table>
</body>
</html>