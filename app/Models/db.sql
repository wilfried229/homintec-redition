-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2021 at 04:26 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `reddition`
--

-- --------------------------------------------------------

--
-- Table structure for table `cash_flows`
--

CREATE TABLE `cash_flows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `percepteur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recette_gate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debut` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `superviseur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controleur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recette_declaree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recette_informatise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbre_passage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbre_gate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbre_penalite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `somme_penalite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `violation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbre_exempte` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recette_ticket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poids_penalite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penalite_annulee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surplus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manquant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comptages`
--

CREATE TABLE `comptages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `percepteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant_passage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbres_camion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heure_debut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heure_fin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fiche_techniques`
--

CREATE TABLE `fiche_techniques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nbre_de_panne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbre_coupure_electrique` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disfonctionement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hydrocarbure`
--

CREATE TABLE `hydrocarbure` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `percepteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cabine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sens` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ptrac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destination` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `es` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conducteur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provenance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plaque` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2020_05_11_093246_create_recettes_table', 1),
(18, '2020_05_11_093307_create_surcharges_table', 1),
(19, '2020_05_11_115926_create_redition_table', 1),
(20, '2020_05_20_092751_create_fiche_techniques_table', 1),
(21, '2020_06_08_113713_create_rediton_uemo_table', 1),
(22, '2020_06_08_114149_create_rediton2_table', 1),
(23, '2020_06_09_191717_create_surcharge_uemoi_table', 1),
(24, '2020_06_30_163202_create_comptages_table', 1),
(25, '2020_11_05_154847_create_hydrocarbure_table', 1),
(26, '2021_08_05_120314_create_cash_flows_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recettes`
--

CREATE TABLE `recettes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `montant_coupant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant_declarer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_vehicule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `redition`
--

CREATE TABLE `redition` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percepteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temps_presence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debut_de_vacation` date NOT NULL,
  `fin_de_vacation` date NOT NULL,
  `superviseur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `controleur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `administrateur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbre_vehicule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manquant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suplus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbre_violation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbre_exempte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `declaration_billetaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `declaration_ticket_manuel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penalite_rejetter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penalite_valider_local` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penalite_valider_ext` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `somme_declarer_caisse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultat_compte` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `somme_gate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passage_gate_24` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarque` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbre_passage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant_coupant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `somme_totale_informatise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `somme_informatise_sans_gate_24` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rediton2`
--

CREATE TABLE `rediton2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `percepteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cabine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sens` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ptrac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cmaes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `es` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `over` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caisse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plaque` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rediton_uemo`
--

CREATE TABLE `rediton_uemo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `immatricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conducteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provenance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ess1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ess2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ess3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ess4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ess5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ess6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ess7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ess8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ess9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gpe1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gpe2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gpe3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gpe4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surchGpe1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surchGpe2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surchGpe4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surchGpe3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PdsTotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surchtotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surcharges`
--

CREATE TABLE `surcharges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `immatriculation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poid_rouland` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surcharge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant_surcharge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_surcharge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_recette` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heure_recette` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `essieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poids_roulant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poid_autorise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excedent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant_apayer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant_payer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percepteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_vacation` date NOT NULL,
  `redition_id` int(11) NOT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surcharge_uemoi`
--

CREATE TABLE `surcharge_uemoi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `immatriculation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poid_rouland` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surcharge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant_surcharge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_surcharge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_recette` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `essieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poids_roulant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poid_autorise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excedent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant_apayer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant_payer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percepteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sens` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cash_flows`
--
ALTER TABLE `cash_flows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comptages`
--
ALTER TABLE `comptages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fiche_techniques`
--
ALTER TABLE `fiche_techniques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hydrocarbure`
--
ALTER TABLE `hydrocarbure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recettes`
--
ALTER TABLE `recettes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redition`
--
ALTER TABLE `redition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rediton2`
--
ALTER TABLE `rediton2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rediton_uemo`
--
ALTER TABLE `rediton_uemo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surcharges`
--
ALTER TABLE `surcharges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surcharge_uemoi`
--
ALTER TABLE `surcharge_uemoi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cash_flows`
--
ALTER TABLE `cash_flows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comptages`
--
ALTER TABLE `comptages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fiche_techniques`
--
ALTER TABLE `fiche_techniques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hydrocarbure`
--
ALTER TABLE `hydrocarbure`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `recettes`
--
ALTER TABLE `recettes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `redition`
--
ALTER TABLE `redition`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rediton2`
--
ALTER TABLE `rediton2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rediton_uemo`
--
ALTER TABLE `rediton_uemo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surcharges`
--
ALTER TABLE `surcharges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surcharge_uemoi`
--
ALTER TABLE `surcharge_uemoi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
