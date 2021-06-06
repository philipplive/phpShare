<?php

include 'Share.php';

// Einfache Kursabfrage für Bitcoin in USD
echo Share::getByTag('BTC-USD')->price;

// Tageshoch / Tief Tesla Aktie
$share = Share::getByTag('TSLA');
echo $share->dayHigh;
echo $share->dayLow;