<?php
$data =[
  "tokenContract1"=>"0x7DBe537984c7C98DD8D25eD3C530CC38889e0a6A",
  "tokenContract2"=>"0xC13425bc4ED9A6473F281FaB05c8c7EeB30271fe",
  "saleContract1"=>"0xdFF441cDAb27b8f03ab623b43704596c4322EA32",
  "saleContract2"=>"0x88197B1E0471F56a9A2e19569d44f03C7cB8eBfA",
  "status"=>0
];
header('Content-Type: application/json; charset=utf-8');
header ("Access-Control-Allow-Origin: *");
header ("Access-Control-Expose-Headers: Content-Length, X-JSON");
header ("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header ("Access-Control-Allow-Headers: *");
echo json_encode($data);
?>