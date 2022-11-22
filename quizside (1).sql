-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 11:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
(42, 'Hockey was introduced in the Asian Games in', '1958 in Tokyo', '1962 in Jakarta', '1966 in Bangkok', 'A', '2022-08-01 12:22:11', NULL),
(43, 'Whats is name ?', 'ghanshyam', 'mehul', 'guru', 'C', '2022-11-08 10:08:31', NULL);

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
(105, 'heena', '8596359652', '2022-11-07 05:46:30', NULL),
(106, 'qwe', '8574256314', '2022-11-07 05:52:48', NULL),
(107, 'fgf', '8574256314', '2022-11-07 05:54:20', NULL),
(108, 'koli', '+91 8460600034', '2022-11-07 05:58:07', NULL),
(109, 'kil', '7854963569', '2022-11-07 06:03:07', NULL),
(110, 'bfr', '7854963569', '2022-11-07 06:06:04', NULL),
(111, 'sd', '8596356236', '2022-11-07 06:07:12', NULL),
(112, 'uiopl', '8596356236', '2022-11-07 06:27:43', NULL),
(113, 'bgtyhh', '8574256314', '2022-11-07 06:29:09', NULL),
(114, 'hjyaank', '+91 8460600034', '2022-11-07 06:30:41', NULL),
(115, 'mjuy', '7854963569', '2022-11-07 06:31:44', NULL),
(116, 'minal', '8496589623', '2022-11-07 06:33:14', NULL),
(117, 'circleddd', '8596356236', '2022-11-07 06:37:41', NULL),
(118, 'aug', '8574256314', '2022-11-07 06:41:29', NULL),
(119, 'sharddha', '+91 8460600034', '2022-11-07 11:27:38', NULL),
(120, 'aa', '8574256314', '2022-11-07 11:29:21', NULL),
(121, 'roundwerg', '8596359652', '2022-11-07 11:33:42', NULL),
(122, 'circlevh', '8574256314', '2022-11-07 11:35:01', NULL),
(123, 'sharddha', '+91 8460600034', '2022-11-08 10:09:33', NULL);

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
(457, 106, '41', 'a', '2022-11-07 05:53:10', NULL),
(458, 106, '24', 'b', '2022-11-07 05:53:15', NULL),
(459, 106, '19', 'a', '2022-11-07 05:53:27', NULL),
(460, 106, '39', 'a', '2022-11-07 05:53:39', NULL),
(461, 107, '41', 'b', '2022-11-07 05:54:26', NULL),
(462, 107, '40', 'a', '2022-11-07 05:54:33', NULL),
(463, 107, '11', 'a', '2022-11-07 05:54:40', NULL),
(464, 107, '16', 'a', '2022-11-07 05:54:48', NULL),
(465, 108, '39', 'a', '2022-11-07 06:02:05', NULL),
(466, 109, '23', 'b', '2022-11-07 06:03:14', NULL),
(467, 110, '32', 'b', '2022-11-07 06:06:10', NULL),
(468, 110, '38', 'b', '2022-11-07 06:06:17', NULL),
(469, 110, '42', 'b', '2022-11-07 06:06:24', NULL),
(470, 110, '11', 'c', '2022-11-07 06:06:32', NULL),
(471, 111, '10', 'a', '2022-11-07 06:07:33', NULL),
(472, 111, '8', 'a', '2022-11-07 06:07:39', NULL),
(473, 112, '9', 'a', '2022-11-07 06:27:49', NULL),
(474, 112, '27', 'c', '2022-11-07 06:27:55', NULL),
(475, 113, '29', 'b', '2022-11-07 06:29:15', NULL),
(476, 113, '24', 'a', '2022-11-07 06:29:21', NULL),
(477, 114, '41', 'a', '2022-11-07 06:30:46', NULL),
(478, 115, '20', 'b', '2022-11-07 06:31:50', NULL),
(479, 115, '22', 'b', '2022-11-07 06:31:56', NULL),
(480, 115, '11', 'a', '2022-11-07 06:32:02', NULL),
(481, 115, '17', 'b', '2022-11-07 06:32:09', NULL),
(482, 116, '9', 'a', '2022-11-07 06:33:20', NULL),
(483, 116, '20', 'b', '2022-11-07 06:33:26', NULL),
(484, 116, '25', 'a', '2022-11-07 06:33:31', NULL),
(485, 117, '11', 'a', '2022-11-07 06:37:47', NULL),
(486, 118, '19', 'a', '2022-11-07 06:41:34', NULL),
(487, 118, '41', 'a', '2022-11-07 06:41:40', NULL),
(488, 119, '33', 'a', '2022-11-07 11:27:44', NULL),
(489, 120, '18', 'a', '2022-11-07 11:29:27', NULL),
(490, 120, '14', 'a', '2022-11-07 11:29:34', NULL),
(491, 120, '7', 'b', '2022-11-07 11:29:40', NULL),
(492, 121, '39', 'a', '2022-11-07 11:33:48', NULL),
(493, 121, '29', 'c', '2022-11-07 11:33:55', NULL),
(494, 121, '34', 'a', '2022-11-07 11:34:01', NULL),
(495, 122, '8', 'a', '2022-11-07 11:35:08', NULL),
(496, 122, '36', 'c', '2022-11-07 11:35:14', NULL),
(497, 122, '42', 'a', '2022-11-07 11:35:21', NULL),
(498, 122, '9', 'c', '2022-11-07 11:35:28', NULL),
(499, 122, '33', 'a', '2022-11-07 11:35:34', NULL),
(500, 123, '32', 'a', '2022-11-08 10:09:40', NULL),
(501, 123, '32', 'b', '2022-11-08 10:09:44', NULL),
(502, 123, '31', 'c', '2022-11-08 10:09:46', NULL),
(503, 123, '40', 'c', '2022-11-08 10:09:49', NULL),
(504, 123, '7', 'b', '2022-11-08 10:09:52', NULL),
(505, 123, '24', 'b', '2022-11-08 10:09:57', NULL),
(506, 123, '41', 'b', '2022-11-08 10:10:00', NULL),
(507, 123, '10', 'b', '2022-11-08 10:10:03', NULL),
(508, 123, '40', 'c', '2022-11-08 10:10:06', NULL),
(509, 123, '17', 'b', '2022-11-08 10:10:12', NULL),
(510, 123, '32', 'a', '2022-11-08 10:10:15', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rejestration`
--
ALTER TABLE `rejestration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=511;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
