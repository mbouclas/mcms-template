<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
@include('partials.emails.head')
<body style="margin: 0; width: 100%; padding: 0; word-break: break-word; -webkit-font-smoothing: antialiased; background-color: #f2f4f6;">
<div role="article" aria-roledescription="email" aria-label="" lang="en">
    <table class="email-wrapper" style="width: 100%; background-color: #34592a; font-family: 'Nunito Sans', -apple-system, 'Segoe UI', sans-serif;" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table class="email-content" style="width: 100%;" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                        <td align="center" style="background-color: #34592a; padding-top: 25px; padding-bottom: 25px; text-align: center; font-size: 16px;">
                            <a href="{{env('APP_URL')}}" style="text-shadow: 0 1px 0 #ffffff; font-size: 16px; font-weight: 700; color: #ffffff; text-decoration: none;">
                                {{config('app.name')}}
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="email-body" style="width: 100%; background-color: #ffffff;">
                            <table align="center" class="email-body_inner sm-w-full" style="margin-left: auto; margin-right: auto; width: 570px; background-color: #ffffff;" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                    <td style="padding: 45px;">
                                        <div style="font-size: 16px;">
                                            <div style="margin-top: 6px; margin-bottom: 20px; font-size: 16px; line-height: 24px; color: #51545e;">
                                                @yield('preheader')
                                                @yield('content')
                                                </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table align="center" class="email-footer sm-w-full" style="margin-left: auto; margin-right: auto; width: 570px; text-align: center;" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                    <td align="center" style="padding: 45px; font-size: 16px;">
                                        <p style="margin-top: 6px; margin-bottom: 20px; text-align: center; font-size: 13px; line-height: 24px; color: #a8aaaf;">
                                            &copy; {{date('Y')}} {{env('PRODUCT_NAME')}}. All rights reserved.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>

</body>
</html>