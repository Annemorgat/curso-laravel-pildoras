ALTER TABLE `articulos` ADD COLUMN `cliente_id` INT AFTER `seccion`;

UPDATE `articulos` SET `cliente_id`=3 WHERE `id`=1;
UPDATE `articulos` SET `cliente_id`=1 WHERE `id`=2;
UPDATE `articulos` SET `cliente_id`=2 WHERE `id`=3;
UPDATE `articulos` SET `cliente_id`=2 WHERE `id`=4;
UPDATE `articulos` SET `cliente_id`=2 WHERE `id`=5;
