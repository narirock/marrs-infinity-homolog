<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting"> <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <meta name="format-detection" content="telephone=no,address=no,email=no,date=no,url=no">
    <!-- Tell iOS not to automatically link certain text strings. -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- Web Font / @font-face : BEGIN -->
    <!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->

    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
        <style>
            * {
                font-family: sans-serif !important;
            }
        </style>
    <![endif]-->

    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
    <!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
    <!--<![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset : BEGIN -->
    <style>
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: forces Samsung Android mail clients to use the entire viewport */
        #MessageViewBody,
        #MessageWebViewDiv {
            width: 100% !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode: bicubic;
        }

        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
        a {
            text-decoration: none;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        a[x-apple-data-detectors],
        /* iOS */
        .unstyle-auto-detected-links a,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */
        .im {
            color: inherit !important;
        }

        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img+div {
            display: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */

        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u~div .email-container {
                min-width: 320px !important;
            }
        }

        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u~div .email-container {
                min-width: 375px !important;
            }
        }

        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            u~div .email-container {
                min-width: 414px !important;
            }
        }

    </style>

    <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>
        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }

        .button-td-primary:hover,
        .button-a-primary:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }

        /* Media Queries */
        @media screen and (max-width: 600px) {

            /* What it does: Adjust typography on small screens to improve readability */
            .email-container p {
                font-size: 17px !important;
            }

        }

    </style>
    <!-- Progressive Enhancements : END -->

</head>
<!--
 The email background color (#222222) is defined in three places:
 1. body tag: for most email clients
 2. center tag: for Gmail and Inbox mobile apps and web versions of Gmail, GSuite, Inbox, Yahoo, AOL, Libero, Comcast, freenet, Mail.ru, Orange.fr
 3. mso conditional: For Windows 10 Mail
-->

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #dddddd;">
    <center style="width: 100%; background-color: #dddddd;">
        <!--[if mso | IE]>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #222222;">
    <tr>
    <td>
    <![endif]-->

        <!-- Visually Hidden Preheader Text : BEGIN -->
        <div
            style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
            (Optional) This text will appear in the inbox preview, but not the email body. It can be used to supplement
            the email subject line or even summarize the email's contents. Extended text preheaders (~490 characters)
            seems like a better UX for anyone using a screenreader or voice-command apps like Siri to dictate the
            contents of an email. If this text is not included, email clients will automatically populate it using the
            text (including image alt text) at the start of the email's body.
        </div>
        <!-- Visually Hidden Preheader Text : END -->

        <!-- Create white space after the desired preview text so email clients don’t pull other distracting text into the inbox preview. Extend as necessary. -->
        <!-- Preview Text Spacing Hack : BEGIN -->
        <div
            style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
            &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <!-- Preview Text Spacing Hack : END -->

        <!--
            Set the email width. Defined in two places:
            1. max-width for all clients except Desktop Windows Outlook, allowing the email to squish on narrow but never go wider than 600px.
            2. MSO tags for Desktop Windows Outlook enforce a 600px width.
        -->
        <div style="max-width: 600px; margin: 0 auto; border-radius: 7px;" class="email-container">
            <!--[if mso]>
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="600">
            <tr>
            <td>
            <![endif]-->

            <!-- Email Body : BEGIN -->
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                style="margin: auto; border-radius: 7px;">
                <!-- Email Header : BEGIN -->
                <tr>
                    {{-- <td style="padding: 20px 0; text-align: center">
                        <img src="{{ env('APP_URL') }}/site/img/logo.png" width="200" height="50" alt="Futclass Logo"
                            border="0"
                            style="height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;">
                    </td> --}}
                </tr>
                <!-- Email Header : END -->

                <!-- Hero Image, Flush : BEGIN -->
                <tr>
                    <td style="background-color: #ffffff;  border-radius: 7px 7px 0 0">
                        <img src="{{ env('APP_URL') }}/site/images/email/reset-senha.jpg" width="600" height=""
                            alt="Banner" border="0"
                            style="width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555; margin: auto; display: block;  border-radius: 7px 7px 0 0"
                            class="g-img">
                    </td>
                </tr>
                <!-- Hero Image, Flush : END -->

                <!-- 1 Column Text + Button : BEGIN -->
                <tr>
                    <td style="background-color: #ffffff;">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td align="center"
                                    style="padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                                    <h1
                                        style="margin: 0 0 10px 0; font-family: sans-serif; font-size: 25px; line-height: 30px; color: #5787a0; font-weight: bold;">
                                        Olá, {{ $user->name }}</h1>
                                    <p style="margin: 0;">Você esta recebendo este email porque foi solicitado um reset
                                        de sua senha no site <strong>MARRS STUDIO.</strong> </p>
                                    <p style="margin: 0;">Caso não tenha solicitado o reset nenhuma ação é necessaria.
                                    </p>
                                    <br />
                                    <p style="margin: 0;">Estamos à disposição, </p>
                                    <p style="margin: 0;">Equipe <strong>Marrs Studio</strong>.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px 20px;">
                                    <!-- Button : BEGIN -->
                                    <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0"
                                        style="margin: auto;">
                                        <tr>
                                            <td class="button-td button-td-primary"
                                                style="border-radius: 4px; background: #222222;">
                                                <a class="button-a button-a-primary" href="{{ $link }}"
                                                    style="background:  #111111; border: 1px solid  #111111; font-family: sans-serif; font-size: 15px; line-height: 15px; text-decoration: none; padding: 13px 17px; color: #ffffff; display: block; border-radius: 4px;">Redefinir
                                                    Senha</a>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- Button : END -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center"
                                    style="padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                                    <h2
                                        style="margin: 0 0 10px 0; font-family: sans-serif; font-size: 18px; line-height: 22px; color: #5787a0; font-weight: bold;">
                                        Para mais informações</h2>
                                    <p style="margin: 0;">Se deseja obter mais informações, entre em contato conosco e
                                        tire todas as suas dúvidas através dos contatos abaixo:</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text + Button : END -->

                <!-- 2 Even Columns : BEGIN -->
                <tr>
                    <td style="padding: 0 10px 40px 10px; background-color: #ffffff;  border-radius: 0 0 7px 7px">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td valign="top" width="50%">
                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                        <tr>
                                            <td style="text-align: center; padding: 0 10px;">
                                                <img src="{{ env('APP_URL') }}/site/instashop/images/email/whatsapp.png"
                                                    width="60" height="" alt="Icone de telefone" border="0"
                                                    style="width: 100%; max-width: 44px; background: #ffffff; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="text-align: center; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 10px 10px 0;">
                                                <p style="margin: 0;">+55 (11) 4309-5680</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td valign="top" width="50%">
                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                        <tr>
                                            <td style="text-align: center; padding: 0 10px;">
                                                <img src="{{ env('APP_URL') }}/site/instashop/images/email/gmail.png"
                                                    width="60" height="" alt="Icone de Email" border="0"
                                                    style="width: 100%; max-width: 44px; background: #ffffff; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="text-align: center; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 10px 10px 0;">
                                                <p style="margin: 0;">contato@marrs.com.br</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>

                                {{-- <td valign="top" width="33.3%">
                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                        <tr>
                                            <td style="text-align: center; padding: 0 10px;">
                                                <img src="{{ env('APP_URL') }}/site/img/email/end.png" width="60"
                                                    height="" alt="Icone de Whatsapp" border="0"
                                                    style="width: 100%; max-width: 44px; background: #ffffff; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="text-align: center; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 10px 10px 0;">
                                                <p style="margin: 0;">Rua Pereira Stéfano, 114, cj. 1201
                                                    CEP: 04144-070 – São Paulo, SP</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td> --}}
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- 2 Even Columns : END -->

                <!-- Clear Spacer : BEGIN -->
                <tr>
                    <td aria-hidden="true" height="40" style="font-size: 0px; line-height: 0px;">
                        &nbsp;
                    </td>
                </tr>
                <!-- Clear Spacer : END -->



            </table>
            <!-- Email Body : END -->

            <!-- Email Footer : BEGIN -->
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                style="margin: auto;">
                <tr>
                    <td
                        style="padding: 20px; font-family: sans-serif; font-size: 12px; line-height: 15px; text-align: center; color: #888888;">
                        {{-- <webversion
                            style="color: #aaaaaa; text-decoration: underline; font-weight: bold;">Ver no navegador
                        </webversion> --}}
                        <br><br>
                        <strong>MARRS STUDIO</strong><br><span class="unstyle-auto-detected-links"></span>
                        <br><br>
                        {{-- <unsubscribe
                            style="color: #888888; text-decoration: underline;">Cancelar inscrição</unsubscribe> --}}
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; padding-top: 50px;">
                        <a href="https://marrs.com.br" target="_blank">
                            <img src="{{ env('APP_URL') }}/site/images/logo-marrs-1.svg" width="100"
                                style="width: 100px; text-align: center;" alt="Marrs Studio">
                        </a>

                    </td>
                </tr>
            </table>
            <!-- Email Footer : END -->

            <!--[if mso]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </div>



        <!--[if mso | IE]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </center>
</body>

</html>
