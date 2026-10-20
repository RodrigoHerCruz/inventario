
USE inventariopruebas;

-- Crear la estructura de la tabla productos
CREATE TABLE IF NOT EXISTS `productos` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(60) COLLATE utf8mb4_unicode_ci NOT NULL,
    `cantidad` INT NOT NULL,
    `fecharegistro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB
  AUTO_INCREMENT=1
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;
