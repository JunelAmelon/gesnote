-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 04 fév. 2024 à 13:00
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gesnote`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `id_admin`, `password`, `nom`, `prenom`, `created_at`, `updated_at`) VALUES
(1, '20', '11', 'Junel', 'Dev', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_cours` varchar(255) NOT NULL,
  `id_etudiant` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `id_professeur` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `nom_cours`, `id_etudiant`, `id_professeur`, `created_at`, `updated_at`) VALUES
(1, 'HIST', 1, 10, '2024-02-04 06:55:45', '2024-02-04 06:55:45'),
(2, 'Anglais', 1, 11, '2024-02-04 07:09:35', '2024-02-04 07:09:35');

-- --------------------------------------------------------

--
-- Structure de la table `cour_etudiants`
--

CREATE TABLE `cour_etudiants` (
  `cour_id` bigint(20) UNSIGNED NOT NULL,
  `etudiant_id` bigint(20) UNSIGNED NOT NULL,
  `note1` double(8,2) DEFAULT NULL,
  `note2` double(8,2) DEFAULT NULL,
  `note3` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cour_etudiants`
--

INSERT INTO `cour_etudiants` (`cour_id`, `etudiant_id`, `note1`, `note2`, `note3`, `created_at`, `updated_at`) VALUES
(1, 1, 15.00, 16.00, 18.00, NULL, NULL),
(1, 2, 20.00, NULL, NULL, NULL, '2024-02-04 10:12:23'),
(1, 5, NULL, NULL, NULL, '2024-02-04 10:10:03', '2024-02-04 10:10:03'),
(2, 5, NULL, NULL, NULL, '2024-02-04 10:10:03', '2024-02-04 10:10:03'),
(1, 7, NULL, NULL, NULL, '2024-02-04 10:18:08', '2024-02-04 10:18:08'),
(2, 7, NULL, NULL, NULL, '2024-02-04 10:18:08', '2024-02-04 10:18:08');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_etu` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(255) NOT NULL,
  `classe` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `id_etu`, `password`, `nom`, `prenom`, `sexe`, `date_naissance`, `lieu_naissance`, `classe`, `created_at`, `updated_at`) VALUES
(1, '01', '$2y$12$PFdWes.52u1xDAXy7CqYF.f5xUXj6llVh.aRCFtpKU.F0OfO.W/2C', 'boukari', 'Hakim', 'M', '2024-02-04', 'Cotonou', 'CM1', '2024-02-04 06:53:30', '2024-02-04 06:53:30'),
(2, '02', '$2y$12$11JIsRj1A7Mwq87ecJntYeiYh4NL/Xkx35Y1wUTeC/DSUlaOBPt.G', 'ASSINOA', 'Jold', 'M', '2024-02-24', 'SOTO', 'Tle', '2024-02-04 09:53:57', '2024-02-04 09:53:57'),
(3, '03', '$2y$12$2i8Tt.TYa9fm2Dw0BN4kzu7ek4kQsBHfM1fE.o6IltUihZ80mliVS', 'ASSOGBA', 'Axel', 'M', '2024-02-10', 'moide', 'Tle', '2024-02-04 10:07:05', '2024-02-04 10:07:05'),
(4, '04', '$2y$12$2/Di9FJC25NVJnn2/Wqr7uL6A5c4dCq3aET.AzJr2k0ppa6FYoSz2', 'ASSOGBA', 'Axele', 'M', '2024-02-10', 'moide', 'Tle', '2024-02-04 10:08:34', '2024-02-04 10:08:34'),
(5, '05', '$2y$12$p3H.8VQicMrU8K/Qt33nUuqismnS/R4XqneFDkbq2F0bFSXw2e6ZC', 'ASSOGBA', 'Axele', 'M', '2024-02-10', 'moide', 'Tle', '2024-02-04 10:10:03', '2024-02-04 10:10:03'),
(7, '07', '$2y$12$6jIJZ9o.ZfSir/IdocuXZ.Y0ig/6i6ak5n.bC.S5q1wJFcbZ/vTeq', 'QWAMEY', 'ENOCK', 'M', '2024-03-03', 'Adjagbo', 'Tle', '2024-02-04 10:18:08', '2024-02-04 10:18:08');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(104, '2014_10_12_000000_create_users_table', 1),
(105, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(106, '2019_08_19_000000_create_failed_jobs_table', 1),
(107, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(108, '2024_01_30_225008_create_etudiants_table', 1),
(109, '2024_01_30_225022_create_professeurs_table', 1),
(110, '2024_01_30_225035_create_admins_table', 1),
(111, '2024_01_30_225129_create_cours_table', 1),
(112, '2024_01_30_225141_create_notes_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note1` double(8,2) DEFAULT NULL,
  `note2` double(8,2) DEFAULT NULL,
  `note3` double(8,2) DEFAULT NULL,
  `moyenne` double(8,2) DEFAULT NULL,
  `id_etudiant` bigint(20) UNSIGNED NOT NULL,
  `id_cours` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id`, `note1`, `note2`, `note3`, `moyenne`, `id_etudiant`, `id_cours`, `created_at`, `updated_at`) VALUES
(1, 15.00, 16.00, 18.00, NULL, 1, 1, NULL, NULL),
(2, 20.00, 14.00, 12.00, NULL, 1, 2, NULL, NULL),
(3, 20.00, NULL, NULL, NULL, 2, 1, '2024-02-04 10:12:23', '2024-02-04 10:12:23');

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `professeurs`
--

CREATE TABLE `professeurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_prof` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `professeurs`
--

INSERT INTO `professeurs` (`id`, `id_prof`, `password`, `nom`, `prenom`, `sexe`, `date_naissance`, `lieu_naissance`, `created_at`, `updated_at`) VALUES
(10, '10', '$2y$12$lOccLEFN2nTn0/ydsLPaK.kr/9rhFjgkelZs4J0TTJfgYmKE/hvxm', 'BOKO', 'Junel', 'M', '2024-02-07', 'Cotonou', '2024-02-04 06:50:38', '2024-02-04 06:50:38'),
(11, '11', '$2y$12$.wrxmx0wPBZR6x7qEkeFYOnng0zKvz6q9q6GsP5ocFAYf2.uOI1lG', 'WALI', 'Bossim', 'M', '2024-02-10', 'Lossamu', '2024-02-04 07:09:12', '2024-02-04 07:09:12');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `id_user`, `password`, `role`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '10', '$2y$12$hXA2jPdZE7w5yI2AmKXeK.DU78yLDo4NxwTE0NZGF/iNFVYsgjzue', 'professeur', NULL, NULL, NULL, '2024-02-04 06:50:37', '2024-02-04 06:50:37'),
(2, '01', '$2y$12$7u04ekUt1M.57bRi2JpL5.JuCKvpjEEB0m0zi9WptX.muBlS7sYFG', 'etudiant', NULL, NULL, NULL, '2024-02-04 06:53:29', '2024-02-04 06:53:29'),
(3, '11', '$2y$12$kKR4Z5SYjGBqYj4T5I/7N.I6sbgwl0dPINA6gclaOPO4hpd1hBX5a', 'professeur', NULL, NULL, NULL, '2024-02-04 07:09:11', '2024-02-04 07:09:11'),
(4, '20', '$2y$12$kKR4Z5SYjGBqYj4T5I/7N.I6sbgwl0dPINA6gclaOPO4hpd1hBX5a', 'admin', NULL, NULL, NULL, NULL, NULL),
(5, '02', '$2y$12$VcKrHRKw3BFYPKIQpJfRnuKJORIqOgAPfMTjkfVJZ4fkaghHTaFhm', 'etudiant', NULL, NULL, NULL, '2024-02-04 09:53:56', '2024-02-04 09:53:56'),
(6, '03', '$2y$12$tRo2zwMn8wh35N6GWZp8Xe8EbdPSs8k5UrHXG5mp9PxNGKkYyNisC', 'etudiant', NULL, NULL, NULL, '2024-02-04 10:07:04', '2024-02-04 10:07:04'),
(7, '03', '$2y$12$pUdf8JsiYdMkjs46nYhsI.x3Gc6Iv/TKZuFXLu.KjIwkaoYsicUbS', 'etudiant', NULL, NULL, NULL, '2024-02-04 10:08:07', '2024-02-04 10:08:07'),
(8, '04', '$2y$12$QavfcxNyHZFxbhGnd7SIGO4iMd7QbbloDpDS7cOfZEmbIGDD/ddHm', 'etudiant', NULL, NULL, NULL, '2024-02-04 10:08:33', '2024-02-04 10:08:33'),
(9, '05', '$2y$12$DvNCk60YDBVP5TYSioOS5u1RUPWCrRpBvRScXDRoQL5.FW8KPwdI.', 'etudiant', NULL, NULL, NULL, '2024-02-04 10:10:02', '2024-02-04 10:10:02'),
(10, '07', '$2y$12$qU/N1pmi5BF0LbiL3xPKAekJyOYPaWuna.zjfAtT2y48ZRMUfbrQy', 'etudiant', NULL, NULL, NULL, '2024-02-04 10:18:06', '2024-02-04 10:18:06');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cours_id_etudiant_foreign` (`id_etudiant`),
  ADD KEY `cours_id_professeur_foreign` (`id_professeur`);

--
-- Index pour la table `cour_etudiants`
--
ALTER TABLE `cour_etudiants`
  ADD KEY `cour_etudiants_cour_id_foreign` (`cour_id`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_id_etudiant_foreign` (`id_etudiant`),
  ADD KEY `notes_id_cours_foreign` (`id_cours`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `professeurs`
--
ALTER TABLE `professeurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_id_etudiant_foreign` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiants` (`id`),
  ADD CONSTRAINT `cours_id_professeur_foreign` FOREIGN KEY (`id_professeur`) REFERENCES `professeurs` (`id`);

--
-- Contraintes pour la table `cour_etudiants`
--
ALTER TABLE `cour_etudiants`
  ADD CONSTRAINT `cour_etudiants_cour_id_foreign` FOREIGN KEY (`cour_id`) REFERENCES `cours` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_id_cours_foreign` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id`),
  ADD CONSTRAINT `notes_id_etudiant_foreign` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiants` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
