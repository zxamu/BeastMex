<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden de Compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        .datos-empresa, .datos-proveedor, .lista-productos {
            margin-top: 20px;
        }
        .datos-empresa table, .datos-proveedor table, .lista-productos table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .datos-empresa table, .datos-proveedor table, .lista-productos table, .datos-empresa th, .datos-proveedor th, .lista-productos th, .datos-empresa td, .datos-proveedor td, .lista-productos td {
            border: 1px solid #ddd;
        }
        .datos-empresa th, .datos-proveedor th, .lista-productos th, .datos-empresa td, .datos-proveedor td, .lista-productos td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Orden de Compra</h1>

    <div class="datos-empresa">
        <h2>Datos de la Empresa</h2>
        <table>
            <tr>
                <th>Razón Social: {{$item->folio}}</th>
                <td>Nombre de tu empresa</td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td>Dirección de tu empresa</td>
            </tr>
            <!-- Agrega más filas según tus necesidades -->
        </table>
    </div>

    <div class="datos-proveedor">
        <h2>Datos del Proveedor</h2>
        <table>
            <tr>
                <th>Nombre</th>
                <td>Nombre del proveedor</td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td>Dirección del proveedor</td>
            </tr>
            <!-- Agrega más filas según tus necesidades -->
        </table>
    </div>

    <div class="lista-productos">
        <h2>Productos</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre del Producto</th>
                <th>Precio Unitario</th>
                <!-- Agrega más columnas según tus necesidades -->
            </tr>
            <tr>
                <td>1</td>
                <td>Producto A</td>
                <td>$10.00</td>
            </tr>
            <!-- Agrega más filas según tus necesidades -->
        </table>
    </div>
</body>
</html>
