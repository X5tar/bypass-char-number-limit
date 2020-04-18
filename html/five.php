<?php
$sandbox = '/tmp/sandbox5/'.md5($_SERVER['REMOTE_ADDR']);
@mkdir($sandbox);
@chdir($sandbox);
if (isset($_GET['cmd']) && strlen($_GET['cmd']) <= 5) {
    @exec($_GET['cmd']);
} else if (isset($_GET['reset'])) {
    @exec('/bin/rm -rf '.$sandbox.'/*');
}
highlight_file(__FILE__);

