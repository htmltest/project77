<?php
    require_once 'dompdf/dompdf_config.inc.php';
    require_once 'dompdf/lib/php-font-lib/classes/Autoloader.php';

    use FontLib\Font;

    $dompdf = new DOMPDF();

    $dompdf->load_html('<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>ЖК «Времена года»</title>

        <link rel="stylesheet" href="css/styles.css" />
    </head>

    <body>

        <!-- header -->
        <table class="header">
            <tr>
                <td class="logo"><img src="images/logo.png" alt="" width="210" height="60" /></td>

                <td class="contacts">
                    <div class="phone">8-800-775-19-48</div>
                    <div class="link"><a href="mailto:info@vg-anapa.ru">info@vg-anapa.ru</a></div>
                </td>
            </tr>
        </table>
        <!-- header END -->

        <div class="title">Квартира 1-комнатная <span>/ 35,9 м&sup2;<span></div>
        <div class="text">Вы оставили заявку на нашем сайте. Клиент может без оплаты забронировать квартиру в офисе продаж на срок 10 дней с сохранением ее стоимости. Акция не распространяется на Спецпредложения застройщика</div>

        <!-- content -->
        <table class="content">
            <tr>
                <td class="info">
                    <table>
                        <tr>
                            <td class="info-name">Число комнат</td>
                            <td class="info-value">1</td>
                        </tr>
                        <tr>
                            <td class="info-name">Площадь, м&sup2;</td>
                            <td class="info-value">35.9</td>
                        </tr>
                        <tr>
                            <td class="info-name">Номер секции</td>
                            <td class="info-value">2</td>
                        </tr>
                        <tr>
                            <td class="info-name">Номер этажа</td>
                            <td class="info-value">4</td>
                        </tr>
                        <tr>
                            <td class="info-name">Вид из окон</td>
                            <td class="info-value">улица</td>
                        </tr>
                        <tr>
                            <td class="info-name">Количество лоджий</td>
                            <td class="info-value">1</td>
                        </tr>
                        <tr>
                            <td class="info-name">Номер на площадке</td>
                            <td class="info-value">16</td>
                        </tr>
                        <tr>
                            <td class="info-name">Количество санузлов</td>
                            <td class="info-value">1</td>
                        </tr>
                        <tr>
                            <td class="info-name">Цена, руб.</td>
                            <td class="info-value price">3 630 944</td>
                        </tr>
                    </table>
                </td>

                <td class="plan"><img src="files/plan.png" alt="" /></td>
            </tr>
        </table>
        <!-- content END -->

        <!-- schemes -->
        <table class="schemes">
            <tr>
                <td class="floor"><img src="files/floor.png" alt="" /></td>
            </tr>
            <tr>
                <td class="floor-title">Квартира на этаже</div>
            </tr>
        </table>
        <!-- schemes END -->

    </body>
</html>');

    $dompdf->set_paper('A4');

    $dompdf->render();

    $dompdf->stream('test.pdf');
?>