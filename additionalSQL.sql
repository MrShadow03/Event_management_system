CREATE TABLE
    `event_management_system`.`event_cards` (
        `id` BIGINT NOT NULL AUTO_INCREMENT,
        `title` VARCHAR(255) NOT NULL,
        `description` TEXT NOT NULL,
        `status` BOOLEAN NOT NULL DEFAULT TRUE,
        `image` VARCHAR(255) NULL DEFAULT 'event-cards/default.png',
        `created_at` TIMESTAMP NULL,
        `updated_at` TIMESTAMP NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;