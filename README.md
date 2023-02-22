# konecta
konecta

porfavor tener instalado xampp y activar los servicios de apache y mysql
y la base de datos llamarla konecta al momento de montarla 


1//
la sentencia para ver cual es el articulo que más se ha vendido

SELECT
prod_id,prod_nombre,
   MAX(vent_cantidad)
FROM
   tbl_ventas

2//
la sentencia que me dice cual es el producto que más stock tiene
SELECT
prod_id,prod_nombre,
   MAX(prod_stock)
FROM
   tbl_producto