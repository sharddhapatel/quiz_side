-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 07:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizside`
--

-- --------------------------------------------------------

--
-- Table structure for table `addques`
--

CREATE TABLE `addques` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addques`
--

INSERT INTO `addques` (`id`, `question`, `a`, `b`, `c`, `ans`, `created_at`, `updated_at`) VALUES
(7, 'The Centre for Cellular and Molecular Biology is situated at', 'Patna', 'Hyderabad', 'Jaipur', 'B', '2022-07-30 06:21:27', NULL),
(8, 'Where is the Railway Staff College located?', 'Vadodara', 'Pune', 'Delhi', 'A', '2022-07-30 06:23:09', NULL),
(9, 'The famous Dilwara Temples are situated in', 'Rajasthan', 'Uttar Pradesh', 'Madhya Pradesh', 'A', '2022-07-30 06:52:37', NULL),
(10, 'Wadia Institute of Himalayan Geology is located at', 'Dehradun', 'Delhi', 'Shimla', 'A', '2022-07-30 06:53:11', NULL),
(11, 'Bijapur is known for its', 'severe drought condition', 'Gol Gumbaz', 'heavy rainfall', 'B', '2022-07-30 06:53:49', NULL),
(12, 'The headquarters of the National Power Training institute is located in', 'Pune', 'Bhopal', 'Faridabad', 'C', '2022-07-30 06:54:45', NULL),
(13, 'The Dr. Babasaheb Ambedkar Marathwada University is at which of the following places?', 'Aurangabad', 'Nanded', 'Nagpur', 'A', '2022-07-30 06:55:25', NULL),
(14, 'The Indian Institute of Science is located at', 'Bangalore', 'Madras', 'Kerala', 'A', '2022-07-30 06:56:02', NULL),
(15, '\'Bagh\', a village in Gwalior is famous for', 'Sculptures', 'Cave Painting', 'Architecture', 'B', '2022-07-30 06:56:33', NULL),
(16, 'Which city is known as \'Electronic City of India\'?', 'Bangalore', 'Mumbai', 'Guragon', 'A', '2022-07-30 06:57:09', NULL),
(17, 'For the Olympics and World Tournaments, the dimensions of basketball court are', '26 m x 14 m', '28 m x 15 m', '27 m x 16 m', 'B', '2022-08-01 10:15:48', NULL),
(18, 'Famous sculptures depicting art of love built some time in 950 AD - 1050 AD are', 'Khajuraho temples', 'Jama Masjid', 'Sun temple', 'A', '2022-08-01 10:16:33', NULL),
(19, 'Gravity setting chambers are used in industries to remove', 'suspended particulate matter', 'SOx', 'CO', 'A', '2022-08-01 10:17:05', NULL),
(20, 'Guwahati High Court is the judicature of', 'Nagaland', 'Arunachal Pradesh', 'A & B', 'C', '2022-08-01 10:18:01', NULL),
(21, 'Friction can be reduced by changing from', 'sliding to rolling', 'rolling to sliding', 'dynamic to static', 'A', '2022-08-01 10:18:41', NULL),
(22, 'Fire temple is the place of worship of which of the following religion?', 'Taoism', 'Judaism', 'Zoroastrianism', 'C', '2022-08-01 10:19:18', NULL),
(23, 'Film and TV institute of India is located at', 'Pune', 'Rajkot', 'Pimpri', 'A', '2022-08-01 10:19:55', NULL),
(24, 'Georgia, Uzbekistan and Turkmenistan became the members of UNO in', '1992', '1991', '1993', 'A', '2022-08-01 10:20:30', NULL),
(25, 'Guru Gobind Singh was', 'the 10th Guru of the Sikhs', 'founder of Khalsa, the inner council of the Sikhs in 1699', 'All the above', 'C', '2022-08-01 10:20:59', NULL),
(26, 'Germany signed the Armistice Treaty on ____ and World War I ended', 'January 19, 1918', 'May 30, 1918', 'November 11, 1918', 'C', '2022-08-01 10:21:46', NULL),
(27, 'The ozone layer restricts', 'Visible light', 'Ultraviolet radiation', 'X-rays and gamma rays', 'B', '2022-08-01 10:22:58', NULL),
(28, 'Filaria is caused by', 'Bacteria', 'Mosquito', 'Protozoa', 'B', '2022-08-01 10:23:37', NULL),
(29, 'Who was the first Indian Chief of Army Staff of the Indian Army ?', 'Gen. K.M. Cariappa', 'Vice-Admiral R.D. Katari', 'Gen. Maharaja Rajendra Singhji', 'A', '2022-08-01 10:24:17', NULL),
(30, 'Coral reefs in India can be found in', 'the coast of Orissa', 'Rameshwaram', 'Waltair', 'B', '2022-08-01 10:24:49', NULL),
(31, 'Durand Cup is associated with the game of', 'Cricket', 'Hockey', 'Football', 'C', '2022-08-01 10:25:34', NULL),
(32, 'Heavy Water Project (Talcher) and Fertilizer plant (Paradeep) are famous industries of', 'Orissa', 'Tamil nadu', 'Kerala', 'A', '2022-08-01 11:50:20', NULL),
(33, 'Headquarters of UNO are situated at', 'New York, USA', 'Geneva', 'Paris', 'A', '2022-08-01 11:57:48', NULL),
(34, 'First International Peace Congress was held in London in', '1843 AD', '1798 AD', '1564 AD', 'A', '2022-08-01 11:58:27', NULL),
(35, 'For seeing objects at the surface of water from a submarine under water, the instrument used is', 'kaleidoscope', 'periscope', 'spectroscope', 'B', '2022-08-01 11:59:31', NULL),
(36, 'Dr. Zakir Hussain was', 'the first Muslim president of India', 'first vice president of India', 'first president of Indian National Congress', 'A', '2022-08-01 12:14:36', NULL),
(37, 'G-15 is an economic grouping of', 'First World Nations', 'Second World Nations', 'Third World Nations', 'C', '2022-08-01 12:15:07', NULL),
(38, 'Fathometer is used to measure', 'Earthquakes', 'Rainfall', 'Ocean depth', 'C', '2022-08-01 12:15:41', NULL),
(39, 'For galvanizing iron which of the following metals is used?', 'Aluminium', 'Zinc', 'Copper', 'B', '2022-08-01 12:16:16', NULL),
(40, 'Economic goods are', 'all commodities that are limited in quantity as compared to their demand', 'Commodities that is available according to their demand', 'Commodities that is available more as compared to demand', 'A', '2022-08-01 12:16:49', NULL),
(41, 'For purifying drinking water alum is used', 'for coagulation of mud particles', 'to kill bacteria', 'to remove salts', 'A', '2022-08-01 12:19:36', NULL),
(42, 'Hockey was introduced in the Asian Games in', '1958 in Tokyo', '1962 in Jakarta', '1966 in Bangkok', 'A', '2022-08-01 12:22:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'abc@gmail.com', '12345', '2022-08-02 11:47:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rejestration`
--

CREATE TABLE `rejestration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rejestration`
--

INSERT INTO `rejestration` (`id`, `name`, `phoneno`, `created_at`, `updated_at`) VALUES
(77, 'pinank', '9909027713', '2022-08-05 10:31:49', NULL),
(78, 'pinank', '9909027713', '2022-08-05 10:36:30', NULL),
(79, 'pinank', '9909027713', '2022-08-05 10:37:53', NULL),
(80, 'pinank reena', '9909027713', '2022-08-05 12:38:48', NULL),
(81, 'reena', '9909027713', '2022-08-05 12:44:55', NULL),
(82, 'reena pinank', '9909027711', '2022-08-06 05:59:44', NULL),
(83, 'hina patel', '99090277145', '2022-08-06 06:03:05', NULL),
(84, 'arjun', '9909027713', '2022-08-06 06:36:46', NULL),
(85, 'pinank', '9909027713', '2022-08-06 07:13:28', NULL),
(86, 'reena', '9909027713', '2022-09-19 05:35:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `qid` varchar(255) NOT NULL,
  `rightans` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `uid`, `qid`, `rightans`, `created_at`, `updated_at`) VALUES
(325, 77, '39', 'a', '2022-08-05 10:32:33', NULL),
(326, 77, '35', 'c', '2022-08-05 10:32:39', NULL),
(327, 77, '19', 'a', '2022-08-05 10:32:44', NULL),
(328, 77, '13', 'a', '2022-08-05 10:32:49', NULL),
(329, 77, '20', 'c', '2022-08-05 10:32:55', NULL),
(330, 78, '8', 'a', '2022-08-05 10:36:43', NULL),
(331, 78, '15', 'b', '2022-08-05 10:36:49', NULL),
(332, 78, '14', 'a', '2022-08-05 10:36:55', NULL),
(333, 79, '34', 'a', '2022-08-05 10:38:00', NULL),
(334, 79, '15', 'b', '2022-08-05 10:38:05', NULL),
(335, 79, '16', 'a', '2022-08-05 10:38:12', NULL),
(336, 80, '16', 'a', '2022-08-05 12:38:54', NULL),
(337, 81, '35', 'a', '2022-08-05 12:45:01', NULL),
(338, 35, '35', 'a', '2022-08-06 05:58:23', NULL),
(339, 32, '32', 'b', '2022-08-06 05:58:27', NULL),
(340, 82, '36', 'b', '2022-08-06 06:00:13', NULL),
(341, 82, '13', 'a', '2022-08-06 06:00:21', NULL),
(342, 82, '41', 'c', '2022-08-06 06:00:31', NULL),
(343, 82, '37', 'b', '2022-08-06 06:00:38', NULL),
(344, 82, '39', 'c', '2022-08-06 06:00:56', NULL),
(345, 82, '42', 'a', '2022-08-06 06:01:02', NULL),
(346, 82, '20', 'a', '2022-08-06 06:01:11', NULL),
(347, 82, '33', 'a', '2022-08-06 06:01:17', NULL),
(348, 82, '19', 'a', '2022-08-06 06:01:24', NULL),
(349, 82, '7', 'b', '2022-08-06 06:01:32', NULL),
(350, 82, '30', 'b', '2022-08-06 06:01:41', NULL),
(351, 83, '42', 'a', '2022-08-06 06:03:12', NULL),
(352, 83, '35', 'b', '2022-08-06 06:03:19', NULL),
(353, 83, '8', 'c', '2022-08-06 06:03:27', NULL),
(354, 83, '38', 'a', '2022-08-06 06:03:40', NULL),
(355, 83, '38', 'a', '2022-08-06 06:03:48', NULL),
(356, 84, '31', 'c', '2022-08-06 07:12:13', NULL),
(357, 84, '16', 'a', '2022-08-06 07:12:20', NULL),
(358, 84, '8', 'b', '2022-08-06 07:12:27', NULL),
(359, 84, '32', 'b', '2022-08-06 07:12:36', NULL),
(360, 84, '9', 'a', '2022-08-06 07:12:44', NULL),
(361, 85, '32', 'a', '2022-08-06 07:23:15', NULL),
(362, 85, '29', 'a', '2022-08-06 07:23:41', NULL),
(363, 85, '29', 'a', '2022-08-06 07:23:54', NULL),
(364, 85, '29', 'a', '2022-08-06 07:24:15', NULL),
(365, 85, '42', 'a', '2022-08-06 07:24:41', NULL),
(366, 85, '42', 'a', '2022-08-06 07:24:43', NULL),
(367, 85, '42', 'a', '2022-08-06 07:24:43', NULL),
(368, 85, '42', 'a', '2022-08-06 07:24:43', NULL),
(369, 85, '42', 'a', '2022-08-06 07:24:44', NULL),
(370, 85, '42', 'a', '2022-08-06 07:24:44', NULL),
(371, 85, '42', 'a', '2022-08-06 07:24:44', NULL),
(372, 85, '42', 'a', '2022-08-06 07:24:44', NULL),
(373, 85, '42', 'a', '2022-08-06 07:24:45', NULL),
(374, 85, '42', 'a', '2022-08-06 07:24:45', NULL),
(375, 85, '42', 'a', '2022-08-06 07:24:45', NULL),
(376, 85, '42', 'a', '2022-08-06 07:24:45', NULL),
(377, 85, '42', 'a', '2022-08-06 07:24:46', NULL),
(378, 85, '42', 'a', '2022-08-06 07:24:46', NULL),
(379, 85, '42', 'a', '2022-08-06 07:24:46', NULL),
(380, 85, '42', 'a', '2022-08-06 07:24:46', NULL),
(381, 85, '42', 'a', '2022-08-06 07:24:47', NULL),
(382, 85, '42', 'a', '2022-08-06 07:24:48', NULL),
(383, 85, '42', 'a', '2022-08-06 07:24:57', NULL),
(384, 85, '22', 'a', '2022-08-06 07:25:07', NULL),
(385, 85, '22', 'a', '2022-08-06 07:25:10', NULL),
(386, 18, '18', 'a', '2022-09-19 05:34:40', NULL),
(387, 14, '14', 'a', '2022-09-19 05:34:49', NULL),
(388, 86, '9', 'a', '2022-09-19 05:35:17', NULL),
(389, 86, '35', 'a', '2022-09-19 05:35:57', NULL),
(390, 86, '35', 'a', '2022-09-19 05:35:59', NULL),
(391, 86, '35', 'a', '2022-09-19 05:35:59', NULL),
(392, 86, '35', 'a', '2022-09-19 05:35:59', NULL),
(393, 86, '35', 'a', '2022-09-19 05:35:59', NULL),
(394, 86, '35', 'a', '2022-09-19 05:36:00', NULL),
(395, 86, '35', 'a', '2022-09-19 05:36:00', NULL),
(396, 86, '35', 'a', '2022-09-19 05:36:00', NULL),
(397, 86, '35', 'a', '2022-09-19 05:36:00', NULL),
(398, 86, '35', 'a', '2022-09-19 05:36:01', NULL),
(399, 86, '35', 'a', '2022-09-19 05:36:01', NULL),
(400, 86, '35', 'a', '2022-09-19 05:36:01', NULL),
(401, 86, '35', 'a', '2022-09-19 05:36:01', NULL),
(402, 86, '35', 'a', '2022-09-19 05:36:01', NULL),
(403, 86, '13', 'a', '2022-09-19 05:36:37', NULL),
(404, 86, '10', 'b', '2022-09-19 05:36:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addques`
--
ALTER TABLE `addques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rejestration`
--
ALTER TABLE `rejestration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addques`
--
ALTER TABLE `addques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rejestration`
--
ALTER TABLE `rejestration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
