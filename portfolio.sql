-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 11:31 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(19, '2020_05_20_170438_add_thumb_to_projects', 2),
(27, '2014_10_12_000000_create_users_table', 3),
(28, '2014_10_12_100000_create_password_resets_table', 3),
(29, '2019_08_19_000000_create_failed_jobs_table', 3),
(30, '2020_05_13_185154_create_projects_table', 3),
(31, '2020_05_23_171606_add_full_to_projects_table', 3),
(32, '2020_05_26_153213_add_slug_to_projects_table', 4),
(33, '2020_06_03_140319_add_github_to_projects_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `challenge` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `solution` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stack` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`stack`)),
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `created_at`, `updated_at`, `title`, `sub_title`, `intro`, `challenge`, `solution`, `role`, `url`, `stack`, `thumb`, `featured`, `full`, `slug`, `github`) VALUES
(1, '2020-05-25 21:36:50', '2020-06-03 20:25:43', 'WIN Calgary', 'Group Client Project', 'WIN Calgary is a not for profit church in Calgary. This client project was one of our final projects during our last semester at SAIT.', '<p>When my team and I took on the project, WIN Calgary already had a website. However, it was somewhat cluttered, unresponsive and not communicating a clear message. WIN Calgary’s team was well-aware of this and tasked us to fix all of it.&nbsp;</p><p>They also have an ongoing building campaign to fund a new building for their community. They needed help advertising this campaign and making it easy for people to contribute.&nbsp;</p><p>Finally, they regularly livestream their services, so the website needed to have a page where they could easily embed a livestream.</p>', '<p>Our solution was to take new pictures of the church and staff, as well as a video of the lead pastor talking about the building campaign, create graphics, re-organize and re-write some of the content. Furthermore, we made sure the website was simple, easy to navigate, and accessible on mobile devices.&nbsp;</p><p>We decided to create WordPress theme from scratch for this project, as it would allow the client to modify and/or add content if needed and give my team and I the ability to precisely customize the website to match the client’s needs.</p>', '<p>I was the website developer for this project. Everything from frontend to backend was developed by me.</p>', 'https://win-calgary.com/', '[\"html\",\"css\",\"js\",\"wordpress\",\"php\"]', 'win-thumb_1590442610.jpg', 'yes', 'win-home.jpg', 'win-calgary', 'https://github.com/LarocheJ/WIN-Calgary'),
(2, '2020-05-26 22:06:01', '2020-06-04 18:34:11', 'First Time Muay Thai', 'Group Academic Project', '', '<p>To create an e-learning platform where users of varying backgrounds could go to learn the basics of the combat sport of Muay Thai.</p>', '<p>Our solution was to keep everything as streamlined and as simple as humanly possible. We created a very simple home page featuring some history about the sport and a mock contact form.</p><p>Our navigation consisted of a logo and a login button. The login button prompted the user to provide their login details, or to signup if they didn’t already have an account.</p><p>Once logged in, they had access to their dashboard. This is where they could see their progression and access the various chapters. In order to unlock a chapter, they had to go through the previous one, and complete a simple quiz. Once a user had completed all the modules, they were rewarded with a certificate with their name on it, which they could then print.</p><p>It was quite challenging to get the progression system working the way we wanted it to. However, with a lot of hard work and persistence, we managed to get it working exactly the way we wanted to using PHP.</p>', '<p>For this project, I was mainly in charge of the backend website development, the progression system logic and most of the frontend design.</p>', 'http://ftmt.jimmylaroche.com/', '[\"html\",\"css\",\"js\",\"mysql\",\"php\"]', 'ftmt-thumb_1590530761.jpg', 'yes', 'ftmt-home_1590530761.jpg', 'first-time-muay-thai', 'https://github.com/LarocheJ/ftmt'),
(3, '2020-05-26 22:10:49', '2020-05-26 22:10:49', 'Grammy’s Bakery', 'Individual Academic Project', '', '<p>A company’s brand guidelines are sacred, and it is important to stick to them, no matter how much a designer might disagree with them. This academic project is exactly what it was meant to simulate. I had to create an e-commerce website using very bright colours such as purple and orange, as well as a logo that is less than pretty, and make it work.</p><p>The website didn’t need to be a full-fledged e-commerce website, however, basic functionality such as adding to cart, filtering, sorting and checking out had to be present.</p><p>Finally, all the product photography had to be done by myself.</p>', '<p>I decided to be bold and embrace the vibrant colour scheme that was available to me. I used existing bakery e-commerce websites for inspiration and ended up with a unique looking website that I was happy with, considering it was my first large scale website development project.</p>', '', 'http://grammys.jimmylaroche.com/', '[\"html\",\"css\",\"mysql\",\"php\"]', 'grammys-thumb_1590531049.jpg', 'yes', 'grammys-home_1590531049.jpg', 'grammys-bakery', ''),
(5, '2020-06-04 18:22:57', '2020-06-04 19:16:58', 'Yournextbest', 'Client Project', 'Yournextbest is a follow-up program where students, parents and teachers can go after a motivational talk to get inspired, challenged and impacted through a series of powerful videos.', '<p>Students, parent and teachers come from all kinds of different backgrounds. Not only did I have to ensure the platform was easily accessible via mobile, tablet and desktop, but also ensure that the visitors didn’t get lost or confused using the website.</p><p>The client also required an area where they could view their users and track the data.</p>', '<p>The solution was to create a responsive website where visitors could securely sign up and login, enabling them to access their profile page, where they could access a series of impactful videos.</p><p>There are 2 items in the navigation: login and signup. This ensured that visitors didn’t get lost with overwhelming content and allowed them to access the videos as quickly and as easily as possible.</p><p>Regarding the client, I created an admin dashboard page where they could view all their user’s information and dynamically add data to the website.</p>', '', 'https://yournextbest.com/', '[\"html\",\"css\",\"js\",\"mysql\",\"php\"]', 'yournextbest-thumb_1591294977.jpg', 'yes', 'yournextbest-home_1591294977.jpg', 'yournextbest', 'https://github.com/LarocheJ/Yournextbest'),
(6, '2020-06-04 18:26:04', '2020-06-04 18:26:04', 'NMPD Space Adventure', 'Group Academic Project', '', '<p>The challenge my group and I had to overcome was to come up with a unique concept that would clearly educate future SAIT students on what the NMPD program was all about.</p>', '<p>Through clever use of videos and visuals, we were able to create a space themed website that was different and inviting. Each course was a planet that future students could visit and get information on.</p><p>It was a fun challenge to come up with a unique concept that would cover the entire program and keep it as simple as possible. We kept the design minimalistic and stuck to SAIT brand guidelines.</p>', '<p>My main role for this project was to be the frontend developer. Aside from the animated stars on the homepage, all the frontend design aspects on the website were coded by me. I also helped with a little bit of backend development.</p>', 'http://spaceadventure.jimmylaroche.com/', '[\"html\",\"css\",\"js\",\"mysql\",\"php\"]', 'spaceadventure-thumb_1591295164.jpg', 'yes', 'space-adventure-home_1591295164.jpg', 'nmpd-space-adventure', 'https://github.com/LarocheJ/Space-Adventure'),
(7, '2020-06-04 18:27:38', '2020-06-04 18:27:38', 'Shangri-La', 'Individual Academic Project', '', '<p>To create a WordPress theme from scratch about a fictional resort called “Shangri-la.”</p><p>I had to take the content from an existing website that our instructors made, and completely re-design it using modern design trends. The website had to include a live weather report from the OpenWeather API, as well as several pins on a map showing popular attractions on the island using the Google Maps API.</p>', '<p>After researching existing resorts for inspiration, I was able to create a more modern look using an inviting hero image, a simple navigation and a responsive design.</p><p>Using the&nbsp;<a href=\"https://codex.wordpress.org/\">WordPress Codex</a>, I was able to achieve all the necessary functionality, such as the search, sorting, dynamically retrieving posts and displaying the date it was written, creating a custom front page, embedding a Google Font using the “wp_enqueue_script” function, and much more.</p>', '', 'http://shangri-la.jimmylaroche.com/', '[\"html\",\"css\",\"js\",\"wordpress\",\"php\"]', 'shangrila-thumb_1591295258.jpg', 'yes', 'shangrila-home_1591295258.jpg', 'shangri-la', 'https://github.com/LarocheJ/Shangri-la'),
(8, '2020-06-04 18:31:04', '2020-06-04 18:31:04', 'Yelpcamp', 'Passion Project', '', '<p>I have been going through a Udemy course for the past 8 months and the final project was to create a fully functional dynamic website. I decided to create a campground website. Users had to be able to sign up, login, add campgrounds, add comments, remove and/or edit campgrounds if they added it and leave reviews. All this data had to be stored on a MongoDB database, run on Node.js server and created using the Express framework.</p>', '<p>Using what I had learned from the course up to that point, I was able to rise to the challenge and create a dynamic campground website. I really enjoyed this project as it allowed me to learn tons on creating fully fledged dynamic websites using many new technologies. I learned that there are many packages that already exist that can simplify a lot of functionality, such as the&nbsp;<a href=\"https://www.npmjs.com/package/passport\">passport package</a> for authentication.</p>', '', 'https://jimmycampapp.herokuapp.com/', '[\"html\",\"css\",\"nodejs\",\"mongodb\",\"express\"]', 'yelpcamp-thumb_1591295464.jpg', 'no', 'yelpcamp-full_1591295464.jpg', 'yelpcamp', 'https://github.com/LarocheJ/Yelpcamp');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jimmy', 'jimmy@jimmylaroche.com', NULL, '$2y$10$Z.g6wFltpGQ6TLeGa9y2dO5BJXvTdUWku7dlY6Zho.T98WvZn6Gtu', NULL, '2020-05-25 21:35:35', '2020-05-25 21:35:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
