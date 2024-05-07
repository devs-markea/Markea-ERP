<?php if(isset($contactMessage) && $contactMessage != null): ?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

    <head>
        <!--[if gte mso 9]>
        <xml>
            <o:OfficeDocumentSettings>
                <o:AllowPNG/>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="x-apple-disable-message-reformatting">
        <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->

        <!-- Your title goes here -->

        <!-- End title -->

        <!-- Start stylesheet -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
              rel="stylesheet">
        <style type="text/css">
            body{
                font-family: 'Roboto', Arial, sans-serif;
            }
            a,a[href],a:hover, a:link, a:visited {
                /* This is the link colour */
                text-decoration: none!important;
                color: #000000;
            }
            .link {
                text-decoration: underline!important;
            }
            p, p:visited {
                /* Fallback paragraph style */
                font-size:15px;
                line-height:24px;
                font-family:'Roboto', Arial, sans-serif;
                font-weight:300;
                text-decoration:none;
                color: #000000;
            }
            h1 {
                /* Fallback heading style */
                font-size:22px;
                line-height:24px;
                font-family:'Roboto', Arial, sans-serif;
                font-weight:normal;
                text-decoration:none;
                color: #000000;
            }
            .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td {line-height: 100%;}
            .ExternalClass {width: 100%;}
        </style>
        <!-- End stylesheet -->

    </head>

    <!-- You can change background colour here -->
    <body style="text-align: center; margin: 0; padding-top: 10px; padding-bottom: 10px; padding-left: 0; padding-right: 0; -webkit-text-size-adjust: 100%;background-color: #f2f4f6; color: #000000" align="center">

    <!-- Fallback force center content -->
    <div style="text-align: center;">

        <!-- Email not displaying correctly -->

        <!-- Start container for logo -->
        <!--        <table align="center" style="text-align: center; vertical-align: top; width: 600px; max-width: 600px; background-color: #BE1407;" width="600">-->
        <!--            <tbody>-->
        <!--            <tr>-->
        <!--                <td style="width: 596px; vertical-align: top; padding-left: 0; padding-right: 0; padding-top: 15px; padding-bottom: 15px; background-color: #BE1407;" width="596">-->
        <!---->
        <!--                     Your logo is here -->
        <!--                    <img style="width: 150px; max-width: 150px; height: 150px; max-height: 80px; text-align: center; color: #ffffff;" alt="Logo" src="cid:logoimg" align="center" width="150" height="150">-->
        <!---->
        <!--                </td>-->
        <!--            </tr>-->
        <!--            </tbody>-->
        <!--        </table>-->
        <!-- End container for logo -->

        <!-- Hero image -->
        <img style="width: 600px; max-width: 600px; height: 240px; max-height: 240px; text-align: center;" alt="Hero image" src="cid:heroimg"  align="center" width="600" height="240">
        <!-- Hero image -->

        <!-- Start single column section -->
        <table align="center" style="text-align: left; vertical-align: top; width: 600px; max-width: 600px; background-color: #ffffff;" width="600">
            <tbody>
            <tr>
                <td style="width: 596px; vertical-align: top; padding-left: 30px; padding-right: 30px; padding-top: 30px; padding-bottom: 10px;" width="596">

                    <h1 style="font-size: 18px; line-height: 30px; font-family: 'Roboto', Arial, sans-serif; font-weight: 300; text-decoration: none; color: #000000;">Tienes un nuevo mensaje de <span style="font-weight: bold"><?= $contactMessage->name; ?>:</span> </h1>

                </td>
            </tr>
            </tbody>
        </table>
        <!-- End single column section -->

        <!-- Start double column section -->
        <table align="center" style="text-align: center; vertical-align: top; width: 600px; max-width: 600px; background-color: #ffffff; border-color: #DFDFDF !important; border-radius: 7px !important;" width="600">
            <tbody>
            <!-- Contact Information Row -->
            <tr>
                <td style="width: 530px; vertical-align: top; padding-left: 30px; padding-right: 15px; padding-top: 0; padding-bottom: 20px; text-align: left;" width="530" colspan="2">
                    <div style="width: 530px; border-radius: 5px !important; border: 1px solid #ECECEC !important; padding-bottom: 20px; margin-bottom: 20px; background-color: #ECECEC">
                        <p style="margin: 20px 0 0 20px !important; font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: bold;">Mensaje</p>
                        <p style="margin: 20px 20px 0 20px !important; font-size: 16px; line-height: 24px; font-family: 'Roboto', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #000000;"><?php echo nl2br($contactMessage->message); ?></p>
                        <!--                        <p style="margin: 20px 0 0 20px !important; font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: bold;">Informaci&oacute;n de contacto</p>-->
                        <p style="margin: 20px 0 0 20px !important; font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: bold;">Datos de contacto</p>
                        <table align="center" style="text-align: center; vertical-align: top; width: 530px; max-width: 530px;" width="530" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td style="width: 265px; vertical-align: top; padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 5px;  text-align: left;">
                                    <p style="margin: 5px 0 5px 0 !important; font-family: 'Roboto', Arial, sans-serif; font-size: 16px; font-weight: 400;">
                                        <span style="font-weight: 300; font-size: 14px;">Nombre / Empresa </span> <br style="margin-bottom: 5px;">
                                        <span style="font-weight: bold; font-size: 18px;"><?= $contactMessage->name; ?></span>
                                    </p>
                                </td>
                                <?php if (empty($contactMessage->telephone)): ?>

                                <?php else: ?>
                                    <td style="width: 265px; vertical-align: top; padding-right: 20px; padding-top: 10px; padding-bottom: 5px; text-align: left;">
                                        <p style="margin: 5px 0 5px 0 !important; font-family: 'Roboto', Arial, sans-serif; font-size: 16px; font-weight: 400;">
                                            <span style="font-weight: 300; font-size: 14px;">Tel&eacute;fono</span> <br style="margin-bottom: 5px;">
                                            <span style="font-weight: bold; font-size: 18px;">
                                            <?php
                                            echo  $contactMessage->telephone;
                                            ?>
                                        </span>
                                        </p>
                                    </td>
                                <?php endif; ?>
                            </tr>

                            <tr>
                                <td style="width: 265px; vertical-align: top; padding-left: 20px; padding-top: 0px; padding-bottom: 5px; text-align: left;">
                                    <p style="margin: 5px 0 5px 0 !important; font-family: 'Roboto', Arial, sans-serif; font-size: 16px; font-weight: 400;">
                                        <span style="font-weight: 300; font-size: 14px;">Correo electrónico</span> <br style="margin-bottom: 5px;">
                                        <span style="font-weight: bold;font-size: 18px;"><?= $contactMessage->email; ?></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <?php if (empty($contactMessage->services)): ?>

                                <?php else: ?>
                                    <td style="width: 265px; vertical-align: top; padding-left: 20px; padding-top: 0px; padding-bottom: 5px; text-align: left;">
                                        <p style="margin: 5px 0 5px 0 !important; font-family: 'Roboto', Arial, sans-serif; font-size: 16px; font-weight: 400;">
                                            <span style="font-weight: 300; font-size: 14px;">Servicios de interés</span> <br style="margin-bottom: 5px;">
                                            <?php
                                            $items = explode(",", $contactMessage->services);
                                            echo "<ul>";
                                            foreach ($items as $item) {
                                                // Verificar si el item está vacío
                                                echo "<li style=\"font-weight: bold; font-size: 18px; padding: 0;\">" . $item . "</li>";
                                            }
                                            echo "</ul>";
                                            ?>
                                        </p>
                                    </td>
                                <?php endif; ?>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            <!-- End Contact Information Row -->

            </tbody>
        </table>
        <!-- End double column section -->

        <!-- Start footer -->
        <table align="center" style="text-align: center; vertical-align: top; width: 600px; max-width: 600px; background-color: #131313;" width="600">
            <tbody>
            <tr>
                <td style="width: 596px; vertical-align: top; padding-left: 30px; padding-right: 30px; padding-top: 30px; padding-bottom: 30px;" width="596">

                    <p style="margin-bottom: 0; font-size: 16px; line-height: 24px; font-family: 'Roboto', Arial, sans-serif; font-weight: 300; text-decoration: none; color: #ffffff;">
                        <a target="_blank" style="text-decoration: underline; color: #ffffff;" href="">
                            Copyright &copy; 2024 Markea Agency, Todos los derechos reservados.
                        </a>
                    </p>

                </td>
            </tr>
            </tbody>
        </table>
        <!-- End footer -->

    </div>

    </body>

    </html>

<?php endif; ?>
