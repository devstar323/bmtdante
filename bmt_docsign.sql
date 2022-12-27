/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : bmt

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 26/12/2022 16:07:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for aspects
-- ----------------------------
DROP TABLE IF EXISTS `aspects`;
CREATE TABLE `aspects`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` bigint(20) UNSIGNED NOT NULL,
  `video_id` bigint(20) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `books_slug_unique`(`slug`) USING BTREE,
  INDEX `books_image_id_index`(`image_id`) USING BTREE,
  CONSTRAINT `aspects_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 54 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of aspects
-- ----------------------------
INSERT INTO `aspects` VALUES (1, 'Watch the EleV National Launch Event - Taking Flight Together', 'Taking Flight Together', 'On October 26, 2022, the Mastercard Foundation held the EleV National Launch, taking flight together with Indigenous youth and profiling their work, voices, visions, and successes. The launch event was a lively and uplifting gathering of Elders, young people, Foundation partners, and staff.  The voices of young people were heard in personal testimonies and through music, song, and dance.\n', 11, NULL, NULL, '2022-11-08 20:48:31', NULL);
INSERT INTO `aspects` VALUES (2, 'EleV Program Sets Bold Goal with Partners to Support 100,000 Indigenous Youth Through Education and on to Meaningful Livelihoods', 'Meaningful Livelihoods', 'TKARONTO (TORONTO) — OCTOBER 18, 2022 — The Mastercard Foundation today announced its goal of reaching 100,000 Indigenous youth through its EleV Program.  Established in 2017, EleV aligns education opportunities with the aspirations of Indigenous youth and the priorities of their communities. It supports young people through post-secondary education and on to meaningful work. To date, the program has already enabled 10,700 Indigenous youth to pursue their educational and career goals.', 7, NULL, NULL, '2022-11-08 20:48:31', NULL);
INSERT INTO `aspects` VALUES (3, 'Experience this Year\'s Baobab Summit 2022', 'Baobab Summit', 'This year, the Mastercard Foundation Scholars Program marks its decennial at the Baobab Summit: Scholars@10 Edition, in celebration of a Decade of Transformative Impact and Learning. As our first in-person convening in more than two years, we are excited to reconnect.', 1, NULL, NULL, '2022-11-08 20:48:31', NULL);
INSERT INTO `aspects` VALUES (4, 'Press Release: Mastercard Foundation Scholars Program Celebrates A Decade of Developing Young Leaders', 'Mastercard Foundation Scholars Program', 'September 15, 2022 – Kigali, Rwanda—The Mastercard Foundation celebrates the decennial anniversary of the Mastercard Foundation Scholars Program. Launched in 2012, the Program began as a $500 million initiative to develop the next generation of leaders who would drive social and economic transformation. The Program identifies talented young people from economically disadvantaged and hard-to-reach communities, primarily in Africa, and supports their secondary and higher education as well as leadership development.', 27, NULL, NULL, '2022-11-08 20:48:31', NULL);
INSERT INTO `aspects` VALUES (5, 'Saving Lives and Livelihoods: Read the New Developments of Our Covid-19 Vaccination Initiative with the Africa CDC', 'Covid-19 Vaccination Initiative', 'In June 2021, the Mastercard Foundation partnered with the Africa CDC to launch the $1.5 billion Saving Lives and\r\nLivelihoods (SLL) initiative. Together, we are purchasing COVID-19 vaccines for more than 65 million people, deploying\r\nvaccines to millions across the continent, enabling vaccine manufacturing in Africa by developing the workforce, and\r\nstrengthening the Africa CDC\'s capacity. ', 21, NULL, NULL, '2022-11-08 20:48:31', NULL);
INSERT INTO `aspects` VALUES (6, 'HSRC Longitudinal Study Year One and Year Two Findings – The Imprint of Education', 'The Imprint of Education', 'Understanding the life journeys of Scholar Alumni as they seek, create, and take up opportunities for dignified and fulfilling work, is central to understanding the impact of the Mastercard Foundation Scholars Program.  \n', 11, NULL, NULL, '2022-11-08 20:48:31', NULL);

-- ----------------------------
-- Table structure for certifications
-- ----------------------------
DROP TABLE IF EXISTS `certifications`;
CREATE TABLE `certifications`  (
  `id` bigint(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `certi_info1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `certi_info2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `certi_info3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 54 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for docusigns
-- ----------------------------
DROP TABLE IF EXISTS `docusigns`;
CREATE TABLE `docusigns`  (
  `id` bigint(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(255) UNSIGNED NULL DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `doc_date` date NULL DEFAULT NULL,
  `doc_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `doc_first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `doc_last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `doc_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `doc_zip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `doc_other_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `consumer_copy_free` int(1) UNSIGNED NULL DEFAULT 0 COMMENT '1: Yes 0: No',
  `SSN` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Social Security Number',
  `doc_birth` date NULL DEFAULT NULL,
  `DLN` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Driver\'s License Number',
  `doc_state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `doc_city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `doc_tele` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Telephone Number',
  `doc_cell` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Cellphone Number',
  `doc_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Email Address',
  `applied_pos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `hear_info` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `legal_auth_state` int(1) UNSIGNED NULL DEFAULT 0 COMMENT '1: Y 0: N',
  `require_sponsorship` int(1) UNSIGNED NULL DEFAULT 0 COMMENT '1: Y 0: N',
  `avail_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type_work` int(1) UNSIGNED NULL DEFAULT 0 COMMENT '0: Full 1: Part 2: Temporary',
  `married_sep` int(1) UNSIGNED NULL DEFAULT 0 COMMENT 'Single or Married filing separately (1: yes / 0: no)',
  `married_join` int(1) UNSIGNED NULL DEFAULT 0 COMMENT 'Married filing jointly (1: yes / 0: no)',
  `married_head` int(1) UNSIGNED NULL DEFAULT 0 COMMENT 'Head of household (1: yes / 0: no)',
  `driver_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'Image url',
  `doc_pdf` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'pdf url',
  `certi_id` bigint(255) UNSIGNED NULL DEFAULT NULL,
  `edu_id` bigint(255) UNSIGNED NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  INDEX `certi_id`(`certi_id`) USING BTREE,
  INDEX `edu_id`(`edu_id`) USING BTREE,
  CONSTRAINT `docusigns_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `docusigns_ibfk_2` FOREIGN KEY (`certi_id`) REFERENCES `certifications` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `docusigns_ibfk_3` FOREIGN KEY (`edu_id`) REFERENCES `educations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 46 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for donations
-- ----------------------------
DROP TABLE IF EXISTS `donations`;
CREATE TABLE `donations`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `aspect_id` bigint(20) UNSIGNED NOT NULL,
  `body` float(20, 0) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `reviews_user_id_index`(`user_id`) USING BTREE,
  INDEX `reviews_book_id_index`(`aspect_id`) USING BTREE,
  CONSTRAINT `donations_ibfk_1` FOREIGN KEY (`aspect_id`) REFERENCES `aspects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `donations_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 97 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for educations
-- ----------------------------
DROP TABLE IF EXISTS `educations`;
CREATE TABLE `educations`  (
  `id` bigint(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `high_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `high_CSC` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'city, state, country',
  `high_year` int(255) UNSIGNED NULL DEFAULT NULL COMMENT 'Years Completed',
  `high_degree` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `high_study` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `high_spec` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `col_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `col_CSC` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `col_year` int(255) UNSIGNED NULL DEFAULT NULL,
  `col_degree` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `col_study` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `col_spec` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `grad_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `grad_CSC` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `grad_year` int(255) UNSIGNED NULL DEFAULT NULL,
  `grad_degree` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `grad_study` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `grad_spec` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `edu_add_info` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 53 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for exp_employments
-- ----------------------------
DROP TABLE IF EXISTS `exp_employments`;
CREATE TABLE `exp_employments`  (
  `id` bigint(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `com_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `com_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `em_from` date NULL DEFAULT NULL,
  `em_to` date NULL DEFAULT NULL,
  `job_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `supervisor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `reason_leave` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `work_perform` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `contact_employer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `add_info` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for files
-- ----------------------------
DROP TABLE IF EXISTS `files`;
CREATE TABLE `files`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `file_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `degree` int(11) NOT NULL,
  `file_type` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `filepath` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `file` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES (1, 'book_14.jpg', NULL, NULL);
INSERT INTO `images` VALUES (2, 'book_24.jpg', NULL, NULL);
INSERT INTO `images` VALUES (3, 'book_7.jpg', NULL, NULL);
INSERT INTO `images` VALUES (4, 'book_17.jpg', NULL, NULL);
INSERT INTO `images` VALUES (5, 'book_10.jpg', NULL, NULL);
INSERT INTO `images` VALUES (6, 'book_8.jpg', NULL, NULL);
INSERT INTO `images` VALUES (7, 'book_6.jpg', NULL, NULL);
INSERT INTO `images` VALUES (8, 'book_21.jpg', NULL, NULL);
INSERT INTO `images` VALUES (9, 'book_14.jpg', NULL, NULL);
INSERT INTO `images` VALUES (10, 'book_15.jpg', NULL, NULL);
INSERT INTO `images` VALUES (11, 'book_4.jpg', NULL, NULL);
INSERT INTO `images` VALUES (12, 'book_22.jpg', NULL, NULL);
INSERT INTO `images` VALUES (13, 'book_11.jpg', NULL, NULL);
INSERT INTO `images` VALUES (14, 'book_20.jpg', NULL, NULL);
INSERT INTO `images` VALUES (15, 'book_2.jpg', NULL, NULL);
INSERT INTO `images` VALUES (16, 'book_12.jpg', NULL, NULL);
INSERT INTO `images` VALUES (17, 'book_17.jpg', NULL, NULL);
INSERT INTO `images` VALUES (18, 'book_16.jpg', NULL, NULL);
INSERT INTO `images` VALUES (19, 'book_24.jpg', NULL, NULL);
INSERT INTO `images` VALUES (20, 'book_25.jpg', NULL, NULL);
INSERT INTO `images` VALUES (21, 'book_20.jpg', NULL, NULL);
INSERT INTO `images` VALUES (22, 'book_8.jpg', NULL, NULL);
INSERT INTO `images` VALUES (23, 'book_2.jpg', NULL, NULL);
INSERT INTO `images` VALUES (24, 'book_25.jpg', NULL, NULL);
INSERT INTO `images` VALUES (25, 'book_9.jpg', NULL, NULL);
INSERT INTO `images` VALUES (26, 'book_1.jpg', NULL, NULL);
INSERT INTO `images` VALUES (27, 'book_3.jpg', NULL, NULL);
INSERT INTO `images` VALUES (28, 'book_14.jpg', NULL, NULL);
INSERT INTO `images` VALUES (29, 'book_5.jpg', NULL, NULL);
INSERT INTO `images` VALUES (30, 'book_14.jpg', NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_11_28_175230_create_roles_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_11_30_104253_create_authors_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_11_30_110302_create_books_table', 1);
INSERT INTO `migrations` VALUES (6, '2019_11_30_115103_create_categories_table', 1);
INSERT INTO `migrations` VALUES (7, '2019_11_30_120057_create_images_table', 1);
INSERT INTO `migrations` VALUES (8, '2019_12_10_002111_create_orders_table', 1);
INSERT INTO `migrations` VALUES (9, '2019_12_10_002233_create_order_details_table', 1);
INSERT INTO `migrations` VALUES (10, '2019_12_10_011530_create_shipping_addresses_table', 1);
INSERT INTO `migrations` VALUES (11, '2019_12_11_022054_create_reviews_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Admin', NULL, NULL);
INSERT INTO `roles` VALUES (2, 'Editor', NULL, NULL);
INSERT INTO `roles` VALUES (3, 'User', NULL, NULL);

-- ----------------------------
-- Table structure for shipping_addresses
-- ----------------------------
DROP TABLE IF EXISTS `shipping_addresses`;
CREATE TABLE `shipping_addresses`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `shipping_addresses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 47 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 3,
  `image_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE,
  INDEX `users_role_id_index`(`role_id`) USING BTREE,
  INDEX `users_image_id_index`(`image_id`) USING BTREE,
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `users_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, 'Mr. Admin', 'admin@bmt.com', NULL, '$2y$10$zc3MsmB8g2OAxEb53ZzNcuD9ocrEwpZIWJdaRvxPJDlGCxK3oQEky', 1, NULL, 1, NULL, NULL, NULL);
INSERT INTO `users` VALUES (3, 'Mr. User', 'user@bmt.com', NULL, '$2y$10$zc3MsmB8g2OAxEb53ZzNcuD9ocrEwpZIWJdaRvxPJDlGCxK3oQEky', 3, NULL, 1, NULL, NULL, NULL);
INSERT INTO `users` VALUES (4, 'Mr. Editor', 'editor@bmt.com', NULL, '$2y$10$zc3MsmB8g2OAxEb53ZzNcuD9ocrEwpZIWJdaRvxPJDlGCxK3oQEky', 2, NULL, 1, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for videos
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for weeks
-- ----------------------------
DROP TABLE IF EXISTS `weeks`;
CREATE TABLE `weeks`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `monday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tuesday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `wednesday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `thursday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `friday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `saturday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sunday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
