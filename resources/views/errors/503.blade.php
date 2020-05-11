<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{asset('favicon.png')}}">
    <title>503</title>
    <style>
        @font-face {
            font-family: "GothamPro";
            src: url("/assets/fonts/GothamProRegular.woff") format("woff");
            font-style: normal;
            font-weight: normal; }

        @font-face {
            font-family: "GothamPro";
            src: url("/assets/fonts/GothamProMedium.woff") format("woff");
            font-style: normal;
            font-weight: 500; }

        * {
            margin: 0;
            padding: 0; }

        *,
        :before,
        :after {
            box-sizing: border-box; }

        :focus {
            outline: none; }

        html {
            font-family: sans-serif;
            line-height: 1;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            text-rendering: optimizeLegibility;
            text-decoration-skip: objects;
            -webkit-font-smoothing: antialiased;
            -webkit-tap-highlight-color: transparent; }

        html * {
            max-height: 1000000px; }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        menu,
        nav,
        section,
        summary {
            display: block; }

        audio,
        canvas,
        progress,
        video {
            display: inline-block;
            /* 1 */
            vertical-align: baseline;
            /* 2 */ }

        audio:not([controls]) {
            display: none;
            height: 0; }

        [hidden],
        template {
            display: none; }

        a {
            background-color: transparent; }

        a:active,
        a:hover {
            outline: 0; }

        b,
        strong,
        optgroup {
            font-weight: bold; }

        dfn {
            font-style: italic; }

        h1 {
            font-size: 2em; }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: normal; }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline; }

        sup {
            top: -.5em; }

        sub {
            bottom: -.25em; }

        img {
            max-width: 100%;
            height: auto;
            border: 0;
            flex: none;
            /*lazy-load*/
            opacity: 1;
            transition: opacity .3s; }

        img[data-src] {
            /*lazy-load*/
            opacity: 0; }

        svg:not(:root) {
            overflow: hidden; }

        hr {
            height: 0;
            margin: 0; }

        pre {
            overflow: auto; }

        code,
        kbd,
        pre,
        samp {
            font-family: monospace, monospace;
            font-size: 1em; }

        button,
        input,
        optgroup,
        select,
        textarea {
            color: inherit;
            font: inherit; }

        input:required,
        textarea:required {
            box-shadow: none; }

        button {
            overflow: visible;
            border: none;
            background: none; }

        button,
        select {
            text-transform: none; }

        button,
        html input[type='button'],
        input[type='reset'],
        input[type='submit'] {
            /* 2 */
            cursor: pointer;
            -webkit-appearance: button;
            /* 3 */ }

        button[disabled],
        html input[disabled] {
            cursor: default; }

        button::-moz-focus-inner,
        input::-moz-focus-inner {
            padding: 0;
            border: 0; }

        input {
            line-height: normal; }

        input[type='checkbox'],
        input[type='radio'] {
            padding: 0; }

        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
            height: auto; }

        input[type='search'] {
            -webkit-appearance: textfield; }

        input[type='search']::-webkit-search-cancel-button,
        input[type='search']::-webkit-search-decoration {
            -webkit-appearance: none; }

        fieldset {
            border: 1px solid #c0c0c0; }

        legend {
            border: 0; }

        textarea {
            overflow: auto;
            resize: none; }

        table {
            border-spacing: 0;
            border-collapse: collapse; }

        ol,
        ul,
        li {
            list-style: none; }

        button,
        hr,
        input,
        textarea {
            border: none; }

        label {
            cursor: pointer; }

        ::-webkit-file-upload-button {
            cursor: pointer; }

        /*responsive video iframe*/

        svg {
            width: 100%;
            height: 100%;
            transition: .3s all; }

        /*-------------------- global-styles --------------------*/
        html {
            min-width: 320px;
            background: #fff; }

        body {
            min-width: 1140px;
            height: 100%;
            color: #000;
            font-family: 'GothamPro', sans-serif;
            font-size: 16px; }
        @media only screen and (max-width: 1170px) {
            body {
                min-width: 320px; } }

        ::selection {
            color: #fff;
            background: #ff0000; }

        input:-webkit-autofill {
            box-shadow: 0 0 0 30px #fff inset; }

        a {
            color: #000;
            text-decoration: none;
            transition: all .3s; }

        .global-wrap {
            display: flex;
            min-height: 100vh;
            flex-direction: column; }
        @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
            .global-wrap {
                height: 100%; } }
        .global-wrap .top-gradient {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 60%;
            z-index: 0;
            background-image: linear-gradient(180deg, #013767 0%, #7ab5da 100%); }
        .global-wrap .bottom-sand {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: calc(40% + 50px);
            z-index: 1; }
        .global-wrap .bottom-sand:after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            width: 100%;
            height: 100%;
            margin: auto;
            z-index: 1;
            background: url("/assets/img/defaults/sand.png") repeat-x top center; }
        .global-wrap .bottom-sand .error-code {
            position: absolute;
            z-index: -1;
            left: 0;
            right: 0;
            bottom: 75%;
            max-width: 100%;
            overflow: hidden;
            margin: auto;
            text-align: center;
            background-image: linear-gradient(180deg, #ffffff 0%, rgba(122, 181, 218, 0) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 400px; }
        @media only screen and (max-height: 768px) {
            .global-wrap .bottom-sand .error-code {
                font-size: 260px; } }
        @media only screen and (max-height: 600px) {
            .global-wrap .bottom-sand .error-code {
                font-size: 220px; } }
        @media only screen and (max-width: 600px) {
            .global-wrap .bottom-sand .error-code {
                font-size: 180px; } }
        @media only screen and (max-height: 400px) {
            .global-wrap .bottom-sand .error-code {
                font-size: 180px; } }
        @media only screen and (max-width: 400px) {
            .global-wrap .bottom-sand .error-code {
                font-size: 140px;
                bottom: 82%; } }
        @media only screen and (max-width: 360px) {
            .global-wrap .bottom-sand .error-code {
                font-size: 120px; } }
        .global-wrap .main {
            display: flex;
            height: 100%;
            position: relative;
            flex: 1 0 auto;
            /* NOT flex: 1; */
            z-index: 2; }
        .global-wrap .main .wrap {
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            position: relative;
            overflow: hidden;
            width: 1140px;
            margin: 0 auto;
            padding: 60px 10px;
            font-weight: 500; }
        @media only screen and (max-width: 1170px) {
            .global-wrap .main .wrap {
                width: 100%; } }
        @media only screen and (max-height: 600px) {
            .global-wrap .main .wrap {
                padding: 40px 10px; } }
        @media only screen and (max-height: 400px) {
            .global-wrap .main .wrap {
                padding: 30px 10px; } }
        .global-wrap .main .wrap .header .logo img {
            display: block;
            max-width: 200px; }
        .global-wrap .main .wrap .center-block {
            margin: 20px 0; }
        .global-wrap .main .wrap .center-block .text {
            font-size: 22px;
            font-weight: 500;
            line-height: 40px; }
        .global-wrap .main .wrap .center-block .go-home {
            display: flex;
            align-items: center;
            align-content: center;
            margin-top: 10px; }
        .global-wrap .main .wrap .center-block .go-home .icon {
            background: url('/assets/img/defaults/home.svg') center no-repeat;
            background-size: contain;
            width: 32px;
            height: 32px; }
        .global-wrap .main .wrap .center-block .go-home .label {
            margin-left: 10px;
            font-size: 14px;
            font-weight: 500;
            max-width: 100px; }
        .global-wrap .main .wrap .center-block .go-home:hover .label {
            text-decoration: underline; }

    </style>
</head>
<body>

<div class="global-wrap">
    <div class="top-gradient"></div>
    <div class="bottom-sand">
        <div class="error-code">503</div>
    </div>
    <div class="main">
        <div class="wrap">
            <div class="header">
                <a href="{{url(LANG)}}" class="logo">
                    <img src="{{!is_null(@helpers()->getSettingsField('files', $allSettings)->firstFile->original) && !strpos(@helpers()->getSettingsField('files', $allSettings)->firstFile->original, 'no-image') ? helpers()->getSettingsField('files', $allSettings)->firstFile->original : asset('assets/img/logo.png')}}" alt="logo">
                </a>
            </div>
            <div class="center-block">
                <div class="text">Service Unavailable.</div>
                <a href="{{url(LANG)}}" class="go-home">
                    <div class="icon"></div>
                    <div class="label">Go to homepage</div>
                </a>
            </div>
            <div class="footer">© {{date('Y')}}. {{!is_null(@helpers()->getSettingsField('site_title', $allSettings, true)) ? helpers()->getSettingsField('site_title', $allSettings, true) : env('APP_NAME')}}</div>
        </div>
    </div>
</div>

</body>
</html>
