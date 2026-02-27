-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2026 at 08:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_health`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1001, 'admin', 'admin@123'),
(1002, 'Rupesh', 'rupesh@123');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `disease_id` int(11) NOT NULL,
  `disease_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`disease_id`, `disease_name`, `description`) VALUES
(1, 'Common Cold', 'The common cold is a mild viral infection of the upper respiratory tract (nose and throat). It is usually caused by viruses like rhinovirus. Common symptoms include runny or blocked nose, sneezing, sore throat, cough, mild fever, and headache. It spreads through air droplets or direct contact. The common cold usually improves within 7–10 days without special treatment. Rest, fluids, and simple medicines help relieve symptoms.'),
(2, 'Flu (Influenza)', 'A contagious viral infection that affects the respiratory system, causing fever, cough, sore throat, body aches, and fatigue.'),
(3, 'COVID-19', 'A viral respiratory disease caused by coronavirus (SARS-CoV-2) that can lead to fever, cough, breathing difficulty, and loss of taste or smell.'),
(4, 'Dengue', 'A mosquito-borne viral infection that causes high fever, severe headache, joint and muscle pain, and skin rash.'),
(5, 'Malaria', 'A mosquito-transmitted disease caused by parasites, leading to fever, chills, sweating, and weakness.'),
(6, 'Typhoid', 'A bacterial infection spread through contaminated food and water, causing prolonged fever, abdominal pain, and weakness.'),
(7, 'Pneumonia', ' An infection that inflames the air sacs in the lungs, causing cough, fever, chest pain, and difficulty breathing.'),
(8, 'Asthma', 'A chronic respiratory condition where airways become inflamed and narrowed, causing wheezing, coughing, and shortness of breath.'),
(9, 'Bronchitis', 'Inflammation of the bronchial tubes that causes persistent cough, mucus production, and chest discomfort.'),
(10, 'Migraine', 'A neurological condition characterized by severe throbbing headaches, often accompanied by nausea and sensitivity to light and sound.'),
(11, 'Food Poisoning', 'An illness caused by consuming contaminated food or water, leading to vomiting, diarrhea, and stomach cramps.'),
(12, 'Gastritis', 'Inflammation of the stomach lining that causes stomach pain, nausea, and indigestion.'),
(13, 'Appendicitis', 'Inflammation of the appendix that causes severe abdominal pain, usually requiring surgical removal.'),
(14, 'Diabetes', 'A chronic disease in which the body cannot properly regulate blood sugar levels due to lack of insulin or insulin resistance.'),
(15, 'Hypertension', 'A condition of persistently high blood pressure that increases the risk of heart disease and stroke.'),
(16, 'Heart Disease', ' A group of conditions affecting the heart, including blocked arteries and heart failure, that impair normal heart function.'),
(17, 'Anemia ', 'A condition where the body lacks enough healthy red blood cells, causing fatigue, weakness, and pale skin.'),
(18, 'Arthritis ', ' Inflammation of the joints causing pain, swelling, and stiffness.'),
(19, 'Back Pain Disorder', ' A condition involving pain in the back due to muscle strain, injury, or spinal problems.'),
(20, ' Sinusitis', 'Inflammation of the sinuses that causes headache, facial pain or pressure, and nasal congestion.'),
(21, 'Allergy ', 'An immune system reaction to allergens like dust or pollen, leading to sneezing, runny nose, and itchy eyes.'),
(22, 'Tonsillitis ', 'Inflammation of the tonsils, usually due to infection, causing sore throat, fever, and difficulty swallowing.'),
(23, ' Ear Infection ', 'Infection of the middle or outer ear that results in ear pain, fever, and temporary hearing problems.'),
(24, 'Urinary Tract Infection (UTI) ', ' bacterial infection of the urinary system causing burning during urination, frequent urge to urinate, and lower abdominal pain.'),
(25, 'Kidney Stone ', 'Hard mineral deposits formed in the kidneys that cause severe back or side pain, nausea, and sometimes blood in urine.'),
(26, 'Kidney Stone', 'Hard mineral deposits formed in the kidneys that cause severe back or side pain, nausea, and sometimes blood in urine.'),
(27, 'Jaundice', 'A condition where the skin and eyes turn yellow due to liver problems, often accompanied by dark urine and fatigue.'),
(28, 'Depression', 'A mental health disorder characterized by persistent sadness, loss of interest in activities, and sleep disturbances.'),
(29, 'Anxiety Disorder', ' A condition involving excessive worry or fear, often with rapid heartbeat, sweating, and restlessness.'),
(30, 'Insomnia', 'A sleep disorder where a person has difficulty falling or staying asleep, leading to fatigue and irritability'),
(31, 'Heat Stroke', 'A serious condition caused by overheating, resulting in high body temperature, dizziness, and headache.'),
(32, 'Dehydration', 'A condition that occurs when the body loses more fluids than it takes in, causing dry mouth, fatigue, and reduced urination.'),
(33, 'Acidity', 'A digestive problem caused by excess stomach acid leading to heartburn and discomfort.');

-- --------------------------------------------------------

--
-- Table structure for table `disease_symptom`
--

CREATE TABLE `disease_symptom` (
  `id` int(11) NOT NULL,
  `disease_id` int(11) DEFAULT NULL,
  `symptom_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disease_symptom`
--

INSERT INTO `disease_symptom` (`id`, `disease_id`, `symptom_id`) VALUES
(1, 1, 101),
(2, 1, 102),
(3, 1, 103),
(4, 2, 105),
(5, 2, 106),
(6, 3, 104),
(7, 3, 107),
(8, 3, 108),
(9, 4, 109),
(10, 4, 110),
(11, 4, 111),
(12, 5, 104),
(13, 5, 106),
(14, 5, 112),
(15, 6, 109),
(16, 6, 113),
(17, 6, 114),
(18, 7, 109),
(19, 7, 115),
(20, 7, 116),
(21, 8, 105),
(22, 8, 116),
(23, 8, 117),
(24, 9, 104),
(25, 9, 105),
(26, 9, 111),
(27, 10, 114),
(28, 10, 118),
(29, 10, 119),
(30, 11, 120),
(31, 11, 121),
(32, 11, 122),
(33, 12, 118),
(34, 12, 120),
(35, 12, 122),
(36, 12, 118),
(37, 12, 120),
(38, 12, 122),
(39, 33, 118),
(40, 33, 123),
(41, 33, 124),
(42, 13, 104),
(43, 13, 118),
(44, 13, 122),
(45, 14, 111),
(46, 14, 125),
(47, 14, 126),
(48, 15, 114),
(49, 15, 115),
(50, 15, 127),
(51, 16, 111),
(52, 16, 115),
(53, 16, 116),
(54, 17, 111),
(55, 17, 127),
(56, 17, 128),
(57, 18, 110),
(58, 18, 129),
(59, 18, 130),
(60, 19, 111),
(61, 19, 131),
(62, 19, 132),
(63, 20, 114),
(64, 20, 133),
(65, 20, 134),
(66, 20, 114),
(67, 20, 133),
(68, 20, 134),
(69, 21, 103),
(70, 21, 135),
(71, 21, 157),
(72, 22, 104),
(73, 22, 136),
(74, 22, 137),
(75, 23, 104),
(76, 23, 138),
(77, 23, 139),
(78, 24, 125),
(79, 24, 140),
(80, 24, 141),
(81, 25, 118),
(82, 25, 142),
(83, 25, 143),
(84, 27, 111),
(85, 27, 144),
(86, 27, 145),
(87, 28, 146),
(88, 28, 147),
(89, 28, 148),
(90, 29, 149),
(91, 29, 150),
(92, 29, 151),
(93, 30, 111),
(94, 30, 152),
(95, 30, 153),
(96, 31, 114),
(97, 31, 127),
(98, 31, 154),
(99, 32, 111),
(100, 32, 155),
(101, 32, 156);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `contact` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `name`, `specialization`, `contact`) VALUES
(1, 'Dr. Amit Sharma ', 'General Physician', '9876543210'),
(2, 'Dr. Neha Verma', ' General Medicine', '9823456712'),
(3, 'Dr. Rajesh Singh', 'Internal Medicine', '9898765432'),
(4, 'Dr. Priya Mehta', 'Pulmonologist', '9812345678'),
(5, 'Dr. Arvind Kumar', 'Chest Specialist', '9876123456'),
(6, 'Dr. Suresh Patel', 'Cardiologist', '9898012345'),
(7, 'Dr. Kavita Iyer', 'Heart Specialist', '9823012345'),
(8, 'Dr. Rohit Bansal', 'Neurologist', '9811198765'),
(9, 'Dr. Pooja Nair', 'Gastroenterologist', '9845012345'),
(10, 'Dr. Manish Gupta', 'Digestive Specialist', '9833012345'),
(11, 'Dr. Vikram Joshi', 'Orthopedic', '9890123456'),
(12, 'Dr. Anjali Rao', 'Orthopedic Surgeon', '9822098765'),
(13, 'Dr. Sneha Kulkarni', 'Diabetologist', '9876501234'),
(14, 'Dr. Rakesh Menon', 'Endocrinologist', '9810098765'),
(15, 'Dr. Harish Choudhary', 'Nephrologist', '9876123098'),
(16, 'Dr. Meenakshi Reddy', 'Dermatologist', '9898761203'),
(17, 'Dr. Ankit Tiwari', 'Psychiatrist', '9823456789'),
(18, 'Dr. Shalini Desai', 'Clinical Psychologist', '9815678902'),
(19, 'Dr. Deepak Malhotra', 'ENT Specialist', '9845678901'),
(20, 'Dr. Ritu Kapoor', 'ENT Surgeon', '9876509876'),
(21, 'Dr. Karan Malviya', 'Emergency Medicine', '9898901234');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `symptom_id` int(11) NOT NULL,
  `symptom_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`symptom_id`, `symptom_name`) VALUES
(101, 'Cold'),
(102, 'Runny Nose'),
(103, 'Sneezing'),
(104, 'Fever'),
(105, 'Cough'),
(106, 'Body Pain'),
(107, 'Dry Cough'),
(108, 'Loss of Smell'),
(109, 'High Fever'),
(110, 'Joint Pain'),
(111, 'Fatigue'),
(112, 'Chills'),
(113, 'Weakness'),
(114, 'Headache'),
(115, 'Chest Pain'),
(116, 'Shortness of Breath'),
(117, 'Chest Tightness'),
(118, 'Nausea'),
(119, 'Sensitivity to Light'),
(120, 'Vomiting'),
(121, 'Diarrhea'),
(122, 'Abdominal Pain'),
(123, 'Heartburn'),
(124, 'Chest Discomfort'),
(125, 'Frequent Urination'),
(126, 'Increased Thirst'),
(127, 'Dizziness'),
(128, 'Pale Skin'),
(129, 'Swelling'),
(130, 'Stiffness'),
(131, 'Back Pain'),
(132, 'Muscle Stiffness'),
(133, 'Facial Pain'),
(134, 'Nasal Congestion'),
(135, 'Itchy Eyes'),
(136, 'Sore Throat'),
(137, 'Difficulty Swallowing'),
(138, 'Ear Pain'),
(139, 'Hearing Difficulty'),
(140, 'Burning Urination'),
(141, 'Lower Abdominal Pain'),
(142, 'Severe Back Pain'),
(143, 'Blood in Urine'),
(144, 'Yellow Skin'),
(145, 'Dark Urine'),
(146, 'Sadness'),
(147, 'Loss of Interest'),
(148, 'Sleep Problems'),
(149, 'Nervousness'),
(150, 'Rapid Heartbeat'),
(151, 'Sweating'),
(152, 'Difficulty Sleeping'),
(153, 'Irritability'),
(154, 'High Body Temperature'),
(155, 'Dry Mouth'),
(156, 'Reduced Urination'),
(157, 'Runny Nose');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `mobile_no` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `gender`, `mobile_no`) VALUES
(1001, 'Rupesh kumar', 'rupesh24cse04.gecv@gmail.com', 'RupeshRaj', 'Male', 9023588209),
(1002, 'Nitesh Kumar', 'nitesh24ce37.gecv@gmail.com', 'nitesh123', 'Male', 6200810967),
(1003, 'alok', 'alok24105135042@gmail.com', '12345678', 'Male', 7667947255),
(1004, 'gc', 'gc24105135039@gmail.com', '12345678', 'Male', 9534007784),
(1005, 'Raju Raj', 'raju123@gmail.com', 'Raju123@', 'Male', 9093588208);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `disease_symptom`
--
ALTER TABLE `disease_symptom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disease_id` (`disease_id`),
  ADD KEY `symptom_id` (`symptom_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`symptom_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `disease_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `disease_symptom`
--
ALTER TABLE `disease_symptom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `symptom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disease_symptom`
--
ALTER TABLE `disease_symptom`
  ADD CONSTRAINT `disease_symptom_ibfk_1` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`disease_id`),
  ADD CONSTRAINT `disease_symptom_ibfk_2` FOREIGN KEY (`symptom_id`) REFERENCES `symptoms` (`symptom_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
