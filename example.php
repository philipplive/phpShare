<?php

include 'Stock.php';

// Einfache Kursabfrage für Bitcoin in USD
echo Stock::getByTag('BTC-USD')->price;

// Tageshoch / Tief Tesla Aktie
$share = Stock::getByTag('TSLA');
echo $share->dayHigh;
echo $share->dayLow;