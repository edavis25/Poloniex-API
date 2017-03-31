<?php
    require_once 'Poloniex.php';
    
    $key = << INSERT API KEY HERE >>;
    $secret = << INSERT SECRET KEY HERE >>;

    $API = new Poloniex($key, $secret);
    
    $url = "https://poloniex.com/public?command=returnTradeHistory&currencyPair=BTC_NXT&start=1410158341&end=1410499372";
    
    
    //$data = $API->get_balances();
    //$data = $API->get_trade_history('btc_eth', '04/12/2016', '04/13/2016');
    $data = $API->get_margin_position();
        
    var_dump($data);
    //echo $data;
   
    /*
   foreach ($data as $key=>$i) {
       if ($key == 'isFrozen') {
           break;
       }
       foreach ($i as $j) {
           foreach ($j as $k) {
               echo $k;
           }
       }
   }
   */
   
    /*
    foreach($data as $key=>$i) {
        echo "$key: $i<br />";
    }
    */
    
    
    //$data = $API->retrieveTradeHistory($url);
    

    $str = "";
    echo "<table>";
    foreach ($data as $key=>$row) {
        if (strpos($key, 'total') !== false) {
            $str .= "$key: $row<br />";
            continue;
        }
        echo "<tr>";
        echo "<td>$key</td>";
        foreach ($row as $col) {
            echo "<td>$col</td>";
        }
        echo "<tr>";
    }
    echo "</table>";
    echo $str;
