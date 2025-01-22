CREATE TABLE `clientes` (
    `id` INT AUTO_INCREMENT NOT NULL,
    `nombre` VARCHAR(255),
    `apellidos` VARCHAR(255),
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);

INSERT INTO `clientes` (`id`, `nombre`, `apellidos`) VALUES (1, 'Paco', 'Perez');
INSERT INTO `clientes` (`id`, `nombre`, `apellidos`) VALUES (2, 'Sandra', 'López');
INSERT INTO `clientes` (`id`, `nombre`, `apellidos`) VALUES (3, 'María', 'Rojas');
