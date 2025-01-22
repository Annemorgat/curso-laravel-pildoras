CREATE TABLE `perfils` (
  `id` INT AUTO_INCREMENT NOT NULL,
  `nombre` VARCHAR(255),
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

INSERT INTO `perfils`(`id`, `nombre`) VALUES
    (1, 'Frecuente'),
    (2, 'Ocasional'),
    (3, 'Nuevo');

CREATE TABLE `cliente_perfil` (
    `id` INT AUTO_INCREMENT NOT NULL,
    `cliente_id` INT,
    `perfil_id` INT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);

INSERT INTO `cliente_perfil` (`id`, `cliente_id`, `perfil_id`) VALUES
    (1, 1, 2),
    (2, 2, 1),
    (3, 3, 2);
