<?php
include '../../controllers/PortfolioController.php';

header('Content-type: application/json');
$portfolio = new PortfolioController();
echo json_encode($portfolio->listar());
