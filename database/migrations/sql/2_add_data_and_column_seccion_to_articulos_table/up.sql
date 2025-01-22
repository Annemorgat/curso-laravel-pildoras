ALTER TABLE `articulos` ADD COLUMN `seccion` VARCHAR(255) AFTER `observaciones`;

INSERT INTO `articulos`(`id`, `nombre_articulo`, `precio`, `pais_origen`, `observaciones`, `seccion`)
VALUES (1, 'Camiseta',25.00,'EEUU','Nada que señalar', 'Deportes');

INSERT INTO `articulos`(`id`, `nombre_articulo`, `precio`, `pais_origen`, `observaciones`, `seccion`)
VALUES (2, 'Jarrón',125.00,'China','Nada que señalar', 'Cerámica');

INSERT INTO `articulos`(`id`, `nombre_articulo`, `precio`, `pais_origen`, `observaciones`, `seccion`)
VALUES (3, 'Plato',15.00,'China','Nada que señalar', 'Cerámica');

INSERT INTO `articulos`(`id`, `nombre_articulo`, `precio`, `pais_origen`, `observaciones`, `seccion`)
VALUES (4, 'Florero',45.00,'España','Hecho a mano', 'Cerámica');

INSERT INTO `articulos`(`id`, `nombre_articulo`, `precio`, `pais_origen`, `observaciones`, `seccion`)
VALUES (5, 'Navaja',120.00,'Suiza','Multiusos', 'Ferretería');
