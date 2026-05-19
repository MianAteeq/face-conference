<?php


function getTotalValue($workshops,$conference)  {


    $total=0;

    $total+=$conference['cat']['price']??0;
    $total+=0;
    $total+=0;

    $total_value=0;

    if(count($workshops)>0){


        foreach ($workshops as $key => $workshop) {

            // dd(1);

            $total+=$workshop['work']['price']-$workshop['work']['discount'];
        }


        $total_value=$total;

        return ($total_value);


    }

    return ($total);



}
function getTotalSValue($workshops,$conference)  {


    if(count($workshops)>1){

        $total=0;

        foreach ($workshops as $key => $workshop) {

            $total+=$workshop['work']['price'];
        }

        $discount=15;

        $discount_amount=($total*$discount)/100;

        $total_value=$total;

        return number_format($total_value,2);

    }else{
        return number_format($conference['type']['price'],2);
    }

    return 1;

}
function getTotalDValue($workshops,$conference)  {


    if(count($workshops)>1){

        $total=0;

        foreach ($workshops as $key => $workshop) {

            $total+=$workshop['work']['price'];
        }

        $discount=15;

        $discount_amount=($total*$discount)/100;

        $total_value=$discount_amount;

        return number_format($total_value,2);

    }else{
        return 0.00;
    }

    return 1;

}
