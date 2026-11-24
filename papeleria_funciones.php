<?php 



$productos = [
    101 => ["nombre" => "Lápiz", "precio" => 1500, "stock" => 10],
    102 => ["nombre" => "Cuaderno", "precio" => 8000, "stock" => 6],
    103 => ["nombre" => "Borrador", "precio" => 1000, "stock" => 8],
    104 => ["nombre" => "Marcador", "precio" => 3500, "stock" => 4],
    105 => ["nombre" => "Regla", "precio" => 2500, "stock" => 5]
];

function calcularSubtotal($precio, $cantidad){
	if ($precio >= 0 && $cantidad >= 0){
		return $precio * $cantidad;
	}
}

function contarUnidades($productos) {
    $total = 0;
    foreach ($productos as $producto) {
        $total += $producto["stock"];
    }
    return $total;
}

function calcularValorInventario($productos){
	$Valor = 0;
	foreach ($productos as $producto){
		$Valor += $producto["precio"] * $producto["stock"];
	}
	return $Valor;
}
$inventario = calcularValorInventario($productos);
echo $inventario. PHP_EOL;

$unidades = contarUnidades($productos);
echo $unidades . PHP_EOL;

$Subtotal = calcularSubtotal(5000,2);
echo "El subtotal es". $Subtotal.PHP_EOL;




