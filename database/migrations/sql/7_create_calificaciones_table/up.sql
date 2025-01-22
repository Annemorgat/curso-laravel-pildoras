CREATE TABLE `calificaciones` (
    `id` INT AUTO_INCREMENT NOT NULL,
    `calificacion_id` INT,
    `calificacion_type` VARCHAR(255),
    `calificacion` INT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);

INSERT INTO `calificaciones` (`id`, `calificacion_id`, `calificacion_type`, `calificacion`) VALUES
(1, 4, 'App\\Models\\Articulo', 8),
(2, 1, 'App\\Models\\Cliente', 4);
