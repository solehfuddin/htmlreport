<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bill</title>

    <!-- Normalize or reset CSS with your favorite library -->
    <!-- Set page size here: A5, A4 or A3 -->
    <!-- Set also "landscape" if you need -->
    <style>
        @page {
            margin-top: 1cm;
            margin-left: 1cm;
            margin-right: 1cm;
            margin-bottom: 1cm;
        }

        @font-face {
            font-family: SourceSansPro;
            src: url(SourceSansPro-Regular.ttf);
        }

        table {
            table-layout: fixed;
        }

        table,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th {
            color: #fff;
            word-break: break-all;
        }

        td {
            padding: 5px;
            word-wrap: break-word;
        }

        .dataItem td {
            border-top: 0;
            border-bottom: 0;
            border-left: 0;
        }

        .discount td {
            padding-bottom: 10px;
        }

        .dataItem td:last-child {}
    </style>

</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<!-- <body class="A4"> -->

<body>

    <section class="sheet padding-10mm">
        <article>
            <div class="row" style=" width:40%; height:40px;">

                <div id="logo">
                    <img src="<?php echo base_url('assets/images/banner/logo_trl.png'); ?>" width="200px">
                </div>
                <div class="header-left">

                    <p style="font-size: 11px; font-family: arial; margin-top: -1px">
                        Jl. Rawa Kepiting No. 4 K.I.P Jakarta 13920
                    </p>

                    <div class="row">
                        <div class="icon-telp">
                            <img style="margin-top: -5px;" src="<?php echo base_url('assets/images/icon/telp.png'); ?>" height="12">
                            <p style="font-size: 11px; margin-top:-14px; margin-left:20px; ">Telp&nbsp; : (021) 4610154 / <img src="<?php echo base_url('assets/images/icon/wa.png'); ?>" height="11"> 08121145555</p>
                        </div>
                        <div class="icon-telp">
                            <img style="margin-top: -6px;" src="<?php echo base_url('assets/images/icon/fax.png'); ?>" height="12">
                            <p style="font-size: 11px; margin-top:-14px; margin-left:20px; ">Fax&nbsp;&nbsp; : (021) 4610154,4610151,4610152</p>
                        </div>
                        <div class="icon-telp">
                            <img style="margin-top: -6px;" src="<?php echo base_url('assets/images/icon/email.png'); ?>" height="12">
                            <p style="font-size: 11px; margin-top:-14px; margin-left:20px; ">Mail&nbsp; : cslab@trl.co.id</p>
                        </div>
                        <div class="icon-telp">
                            <img style="margin-top: -6px;" src="<?php echo base_url('assets/images/icon/web.png'); ?>" height="12">
                            <p style="font-size: 11px; margin-top:-14px; margin-left:20px; ">Web&nbsp; : www.timurrayalab.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <table align="right" style="margin-top:-135; border:1px solid; font-size: 11px;">
                <tr style="background:#1E88E5; color:#fff;">
                    <th width="200" style="border-right: 1px solid black;">Bill to :</th>
                    <th width="200">Ship to :</th>
                </tr>
                <tr style="vertical-align: baseline;">
                    <td height="120" style="text-align:left;">
                        <p style="margin:10px 0"></p><br>
                    </td>
                    <td height="120" style="text-align:left;">
                        <p></p><br>
                    </td>
                </tr>
            </table>
            <table style="margin-top:20; border:1px solid; font-size: 11px; text-align:center;">
                <tr style="background:#1E88E5;">
                    <th width="70" style="border-right: 1px solid black;">SHIP</th>
                    <th width="70" style="border-right: 1px solid black;">CHARGE</th>
                    <th width="135" style="border-right: 1px solid black;">INVOICE</th>
                    <th width="135" style="border-right: 1px solid black;">ORDER NUMBER</th>
                    <th width="135" style="border-right: 1px solid black;">PURCHASE ORDER</th>
                    <th width="86" style="border-right: 1px solid black;">INV DATE</th>
                    <th width="86">DUE DATE</th>
                </tr>
                <tr style="text-align: left; ">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table class="dataItem" style="margin-top:20; border:1px solid; font-size: 11px; text-align:center;">
                <tr style="background:#1E88E5;">
                    <th width="140" style="border-right: 1px solid black;max-width:140px;">ITEM CODE</th>
                    <th width="270" style="border-right: 1px solid black;">DESCRIPTION</th>
                    <th width="67,5" style="border-right: 1px solid black;">UOM</th>
                    <th width="67,5" style="border-right: 1px solid black;">QTY</th>
                    <th width="86" style="border-right: 1px solid black;">PRICE</th>
                    <th width="86">TOTAL</th>
                </tr>
                <tr>
                    <td style="text-align:left; "></td>
                    <td style="text-align:left; ">

                    </td>
                    <td>PCS</td>
                    <td></td>
                    <td></td>
                    <td style="text-align:right;">

                    </td>
                </tr>
                <tr class="discount">
                    <td></td>
                    <td style="text-align:left;padding-bottom: 10px;">
                        Discount : %
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="text-align:right;">
                        -
                    </td>
                </tr>
                <tr>
                    <td>Shipping : </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="border-top:1px solid black;background:#1E88E5;color:#fff;">TOTAL</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <br>
            <table style="border:0 !important; margin-top:-20px;">
                <tr>
                    <td width="580" style="border:0 !important;">
                        <div class="row" style="font-size: 9px;  ">
                            <div class="footer-left" style="border-spacing: 15px;">

                                <div class="footer-lefttwo">
                                    <b>PERHATIAN</b>
                                </div>

                                <div class="footer-lefttwo">
                                    * Barang yang sudah dibeli tidak dapat dikembalikan
                                </div>

                                <div class="footer-lefttwo">
                                    * Untuk kesalahan pengiriman, barang dapat dikembalikan paling lambat 1 bulan dari tanggal invoice terbit
                                </div>
                            </div>
                        </div>
                    </td>
                    <td width="228" style="border:0 !important;">
                        <div class="footer-right" style="font-size: 9px; border-spacing: 15px;">
                            <div class="footer-leftone">
                                Konfirmasi Pembayaran Hubungi :
                            </div>

                            <div class="footer-lefttwo">
                                - SMS/WA : 0815 1033 4072 , atau
                            </div>

                            <div class="footer-lefttwo">
                                - Telepon : (021) 461 0154 Ext : 201 s/d 205
                            </div>

                            <div class="footer-lefttwo" style="text-align: center; margin-top: 5px;">
                                Hormat kami,
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </article>
    </section>


</body>

</html>