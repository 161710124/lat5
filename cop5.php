<?php

require_once 'lat5.php';

$oi = new buku('sidu','58','biru');
echo "merknya...".$oi->get_merk().'<br>';
echo "tebalnya ...".$oi->get_tebal().'<br>';
echo "warnanya ...".$oi->get_warna().'<br>';

?>