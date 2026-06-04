<?php
$_SERVER['REQUEST_URI'] = '/partner/portal/loan_files.php';
$_SERVER['DOCUMENT_ROOT'] = '/app';
$_SESSION['puser_id'] = '1';
$_SESSION['prole'] = 'admin';
$_SESSION['is_admin'] = true;
$_SESSION['puser_role'] = 'Superadmin';
chdir('partner/portal');
require_once 'loan_files.php';
