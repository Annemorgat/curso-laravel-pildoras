CREATE TABLE `articulos` (
  `id` INT AUTO_INCREMENT NOT NULL,
  `nombre_articulo` VARCHAR(255),
  `precio` FLOAT,
  `pais_origen` VARCHAR(255),
  `observaciones` TEXT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);
