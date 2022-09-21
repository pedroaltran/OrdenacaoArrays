<style>
    html, body{
        font-family: monospace;
        background-color: #333;
        color: #eee;
        padding-bottom: 50%;
    }

    h2{
        color: #458688;
        font-size: 23px;
    }

    hr{
        margin-top: 40px;
        margin-bottom: 30px;
        opacity: 0.2;
    }

    pre{
        background-color: #444;
        padding: 10px;
        font-size: 20px;
        color: #ecf0f1;
    }
</style> 

<?php

    echo '<h1>Array original</h1>';

    $pessoas= array (
        "Sofia"=>"31",
        "Jacó"=>"41",
        "William"=>"39",
        "Rafael"=>"40" 
    );

    echo "<pre>";
    print_r($pessoas);
    echo "</pre>";

    echo '<hr>';

    echo '<h2>A - Em ordem crescente por valor</h2>';
    asort($pessoas);
    echo "<pre>";
    print_r ($pessoas);
    echo "</pre>";
    echo '<hr>';

    echo '<h2>B - Em ordem crescente por chave</h2>';
    ksort($pessoas);
    echo "<pre>";
    print_r ($pessoas);
    echo "</pre>";

    echo '<hr>';

    echo '<h2>C - Em ordem decrescente por valor</h2>';
    arsort($pessoas);
    echo "<pre>";
    print_r ($pessoas);
    echo "</pre>";

    echo '<hr>';

    echo '<h2>D - Em ordem decrescente por chave</h2>';
    krsort($pessoas);
    echo "<pre>";
    print_r ($pessoas);
    echo "</pre>";

?>