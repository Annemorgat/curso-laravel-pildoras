UPDATE `articulos` SET `cliente_id`=0 WHERE `id`=1;
UPDATE `articulos` SET `cliente_id`=0 WHERE `id`=2;
UPDATE `articulos` SET `cliente_id`=0 WHERE `id`=3;
UPDATE `articulos` SET `cliente_id`=0 WHERE `id`=4;
UPDATE `articulos` SET `cliente_id`=0 WHERE `id`=5;

ALTER TABLE `articulos` DROP COLUMN `cliente_id`;
