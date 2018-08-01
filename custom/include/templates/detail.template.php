<?php global $current_user;
 ?>
<section class="panel panel-default" style="margin-top: 5%">
    <div class="panel-heading">
        <a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
            <div class="col-xs-10 col-sm-11 col-md-11">
                PAYMENT SUMMARY
            </div>
        </a>
    </div>
    <div class="panel-body">
        <section class="row" style="padding: 2% 1%">
        
            <table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
                <tr style="background-color: #dddddd;">
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Unit Price</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;" class="unitp"></td>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">(+) Chattel Fee</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0 </td>
                </tr>
                <tr>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">CC Add-ons</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0 </td>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">(+) Other Charges</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0 </td>
                </tr>
                <tr style="background-color: #dddddd;">
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Premium on SPecial Color</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0 </td>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Down Payment</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0 </td>
                </tr>
                <tr>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Freight & Handling</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0 </td>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Total DP Discount</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0 </td>
                </tr>
                <tr style="background-color: #dddddd;">
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">(-) Unit Discount</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0 </td>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Net Down Payment</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0 </td>
                </tr>
                <tr>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Net Price</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0 </td>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">VATable Sales</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0 </td>
                </tr>
                <tr style="background-color: #dddddd;">
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">(+) Accessories</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0 </td>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">VAT-EXEMPT Sales</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0 </td>
                </tr>
                <tr>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">(+) Insurance</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0 </td>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">ZERO RATED Sales</th>
                    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">&#8369; 0 </td>
                </tr>
            </table>
        </section>
</section>

<script>
    let status = document.getElementById('status_c').value;
    let quote_id = $('.favorite').attr('record_id');
    function setactive(){      
        window.location = '/serviodms/index.php?module=jump_Quote&action=make_active&q_id=' + quote_id;
       
    }
    function calculate(){  
        $('.temp').remove(); 
        var unitp = parseInt($('#unitprice_c').text());
        var cents = (unitp - Math.floor(unitp)).toFixed(2);
        var unitp2 = Math.floor(unitp).toLocaleString() + '.' + cents.split('.')[1];
        $(".unitp").append('<p class="temp">&#8369; '+unitp2+'</p>');
       
    }





</script>
