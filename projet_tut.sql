-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'activité'
-- 
-- ---

DROP TABLE IF EXISTS `activité`;
		
CREATE TABLE `activité` (
  `id_activite` INTEGER NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR NOT NULL,
  `id_sport` INTEGER NOT NULL,
  `date` DATE NOT NULL,
  `id_inscrits` INTEGER NOT NULL,
  `max_inscrits` INTEGER NOT NULL,
  `id_niveau` INTEGER NOT NULL,
  `description` MEDIUMTEXT NOT NULL,
  `venir_amis` INTEGER NOT NULL,
  `id_ville` INTEGER NOT NULL,
  `id_organisateur` INTEGER NOT NULL,
  `id_commentaires` INTEGER NOT NULL,
  `id_participant` INTEGER NOT NULL,
  `new field` INTEGER NULL DEFAULT NULL,
  `adresse` VARCHAR NOT NULL DEFAULT 'NULL',
  PRIMARY KEY (`id_activite`)
);

-- ---
-- Table 'sports'
-- 
-- ---

DROP TABLE IF EXISTS `sports`;
		
CREATE TABLE `sports` (
  `id_sports` INTEGER NOT NULL AUTO_INCREMENT,
  `intitule` VARCHAR NOT NULL,
  PRIMARY KEY (`id_sports`)
);

-- ---
-- Table 'niveau'
-- 
-- ---

DROP TABLE IF EXISTS `niveau`;
		
CREATE TABLE `niveau` (
  `id_niveau` INTEGER NOT NULL AUTO_INCREMENT,
  `intitule` VARCHAR NOT NULL,
  PRIMARY KEY (`id_niveau`)
);

-- ---
-- Table 'ville'
-- 
-- ---

DROP TABLE IF EXISTS `ville`;
		
CREATE TABLE `ville` (
  `id_ville` INTEGER NOT NULL AUTO_INCREMENT,
  `intitule` VARCHAR NOT NULL,
  PRIMARY KEY (`id_ville`)
);

-- ---
-- Table 'commentaires'
-- 
-- ---

DROP TABLE IF EXISTS `commentaires`;
		
CREATE TABLE `commentaires` (
  `id_commentaires` INTEGER NOT NULL AUTO_INCREMENT,
  `commentaire` MEDIUMTEXT NOT NULL,
  `id_utilisateur` INTEGER NOT NULL,
  PRIMARY KEY (`id_commentaires`)
);

-- ---
-- Table 'participant'
-- 
-- ---

DROP TABLE IF EXISTS `participant`;
		
CREATE TABLE `participant` (
  `id_participant` INTEGER NOT NULL,
  `id_utilisateur` INTEGER NOT NULL,
  PRIMARY KEY (`id_participant`)
);

-- ---
-- Table 'utilisateur'
-- 
-- ---

DROP TABLE IF EXISTS `utilisateur`;
		
CREATE TABLE `utilisateur` (
  `id_utilisateur` INTEGER NOT NULL AUTO_INCREMENT,
  `pseudo` VARCHAR NOT NULL,
  `mot_de_passe` VARCHAR NULL,
  `mail` VARCHAR NOT NULL,
  `date_inscription` DATE NOT NULL,
  `id_sports` INTEGER NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
);

-- ---
-- Table 'administrateur'
-- 
-- ---

DROP TABLE IF EXISTS `administrateur`;
		
CREATE TABLE `administrateur` (
  `id_administrateur` INTEGER NOT NULL AUTO_INCREMENT,
  `pseudo` VARCHAR NOT NULL,
  `mot_de_passe` VARCHAR NOT NULL,
  PRIMARY KEY (`id_administrateur`)
);

-- ---
-- Foreign Keys 
-- ---

ALTER TABLE `activité` ADD FOREIGN KEY (id_sport) REFERENCES `sports` (`id_sports`);
ALTER TABLE `activité` ADD FOREIGN KEY (id_niveau) REFERENCES `niveau` (`id_niveau`);
ALTER TABLE `activité` ADD FOREIGN KEY (id_ville) REFERENCES `ville` (`id_ville`);
ALTER TABLE `activité` ADD FOREIGN KEY (id_participant) REFERENCES `participant` (`id_participant`);
ALTER TABLE `commentaires` ADD FOREIGN KEY (commentaire) REFERENCES `activité` (`id_activite`);
ALTER TABLE `commentaires` ADD FOREIGN KEY (id_utilisateur) REFERENCES `utilisateur` (`id_utilisateur`);
ALTER TABLE `participant` ADD FOREIGN KEY (id_utilisateur) REFERENCES `utilisateur` (`id_utilisateur`);
ALTER TABLE `utilisateur` ADD FOREIGN KEY (id_sports) REFERENCES `sports` (`id_sports`);

-- ---
-- Table Properties
-- ---

-- ALTER TABLE `activité` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `sports` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `niveau` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `ville` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `commentaires` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `participant` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `utilisateur` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `administrateur` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ---
-- Test Data
-- ---

-- INSERT INTO `activité` (`id_activite`,`nom`,`id_sport`,`date`,`id_inscrits`,`max_inscrits`,`id_niveau`,`description`,`venir_amis`,`id_ville`,`id_organisateur`,`id_commentaires`,`id_participant`,`new field`,`adresse`) VALUES
-- ('','','','','','','','','','','','','','','');
-- INSERT INTO `sports` (`id_sports`,`intitule`) VALUES
-- ('','');
-- INSERT INTO `niveau` (`id_niveau`,`intitule`) VALUES
-- ('','');
-- INSERT INTO `ville` (`id_ville`,`intitule`) VALUES
-- ('','');
-- INSERT INTO `commentaires` (`id_commentaires`,`commentaire`,`id_utilisateur`) VALUES
-- ('','','');
-- INSERT INTO `participant` (`id_participant`,`id_utilisateur`) VALUES
-- ('','');
-- INSERT INTO `utilisateur` (`id_utilisateur`,`pseudo`,`mot_de_passe`,`mail`,`date_inscription`,`id_sports`) VALUES
-- ('','','','','','');
-- INSERT INTO `administrateur` (`id_administrateur`,`pseudo`,`mot_de_passe`) VALUES
-- ('','','');