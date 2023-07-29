-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 06:42 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estrellaexmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `genre`) VALUES
(1, 'scifi'),
(2, 'action'),
(3, 'scifi'),
(4, 'scifi'),
(5, 'Action'),
(6, 'drama'),
(7, 'action'),
(8, 'drama'),
(9, 'drama'),
(10, 'thriller'),
(11, 'scifi'),
(12, 'action'),
(13, 'action'),
(14, 'scifi'),
(15, 'drama'),
(16, 'drama'),
(17, 'drama'),
(18, 'action'),
(19, 'drama'),
(20, 'action'),
(21, 'patriotic'),
(22, 'love'),
(23, 'action'),
(24, 'action'),
(25, 'action'),
(26, 'drama'),
(27, 'Action'),
(28, 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `hid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `dt` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `imgg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`hid`, `mid`, `mname`, `dt`, `username`, `imgg`) VALUES
(35, 5, 'The Dark Knight', '05/05/23 06:20:37pm', 'nehaar', 'images/bat-man.jpg'),
(36, 8, ' Ee Nagaraniki Emaindi', '05/05/23 06:21:48pm', 'nehaar', 'images/enem.jpeg'),
(37, 22, 'Titanic', '05/05/23 06:34:30pm', 'nehaar', 'images/titanic.jpg'),
(38, 26, 'sita ramam', '05/05/23 06:47:42pm', 'nehaar', 'images/sitaramam.jpg'),
(39, 1, 'Avatar', '05/05/23 07:25:50pm', 'nehaar', 'images/avatar.jpeg'),
(40, 25, 'Pushpa: The Rise', '05/05/23 07:27:49pm', '', 'images/pu.jpeg'),
(41, 27, 'Avatar: The Way Of Water', '05/05/23 07:28:01pm', 'nehaar', 'images/Avatar2.jpeg'),
(42, 1, 'Avatar', '05/05/23 07:35:53pm', 'nehaar', 'images/avatar.jpeg'),
(43, 25, 'Pushpa: The Rise', '06/06/23 06:35:11pm', '', 'images/pu.jpeg'),
(44, 1, 'Avatar', '06/06/23 06:35:50pm', 'nehaar', 'images/avatar.jpeg'),
(45, 25, 'Pushpa: The Rise', '07/06/23 10:37:24am', '', 'images/pu.jpeg'),
(46, 25, 'Pushpa: The Rise', '07/06/23 10:37:36am', 'nehaar', 'images/pu.jpeg'),
(47, 25, 'Pushpa: The Rise', '07/06/23 10:38:46am', '', 'images/pu.jpeg'),
(48, 25, 'Pushpa: The Rise', '07/06/23 10:39:06am', 'nehaar', 'images/pu.jpeg'),
(49, 2, 'Avengers Endgame', '07/06/23 10:39:30am', 'nehaar', 'images/aveng.jpeg'),
(50, 25, 'Pushpa: The Rise', '07/06/23 11:19:43am', 'nehaar', 'images/pu.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `language` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `language`) VALUES
(1, 'english'),
(2, 'english'),
(3, 'english'),
(4, 'english'),
(5, 'english'),
(6, 'telugu'),
(7, 'telugu'),
(8, 'telugu'),
(9, 'telugu'),
(10, 'telugu'),
(11, 'tamil'),
(12, 'tamil'),
(13, 'tamil'),
(14, 'tamil'),
(15, 'tamil'),
(16, 'hindi'),
(17, 'hindi'),
(18, 'hindi'),
(19, 'hindi'),
(20, 'telugu'),
(21, 'telugu'),
(22, 'english'),
(23, 'kannada'),
(24, 'telugu'),
(25, 'telugu'),
(26, 'telugu'),
(27, 'english'),
(28, 'english');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `name`, `email`, `password`) VALUES
(1, 'nehaar', 'nehaar@gmail.com', 'nehaar'),
(2, 'Mary', 'mary@gmail.com', 'mary'),
(3, 'akash', 'akash@gmail.com', 'akash'),
(4, 'viswesh', 'viswesh@gmail.com', 'viswesh');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `runtime` int(11) NOT NULL,
  `storyline` text NOT NULL,
  `cast` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `creator` varchar(255) NOT NULL,
  `imagename` varchar(255) NOT NULL,
  `imageloc` varchar(255) NOT NULL,
  `videoname` varchar(255) NOT NULL,
  `videoloc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `runtime`, `storyline`, `cast`, `year`, `creator`, `imagename`, `imageloc`, `videoname`, `videoloc`) VALUES
(1, 'Avatar', 162, 'Jake, who is paraplegic, replaces his twin on the Na vi inhabited Pandora for a corporate mission. After the natives accept him as one of their own, he must decide where his loyalties lie.', 'Sam Worthington ,Zoe Saldana ,Stephen Lang ,Michelle Rodriguez, Sigourney Weaver', 2009, 'nehaar', 'avatar.jpeg', 'images/avatar.jpeg', 'avatar.mp4', 'video/avatar.mp4'),
(2, 'Avengers Endgame', 182, 'After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.', 'Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth ,Scarlett Johansson', 2019, 'nehaar', 'aveng.jpeg', 'images/aveng.jpeg', 'endgame.mp4', 'video/endgame.mp4'),
(3, 'Lucy', 90, 'Lucy gains extraordinary physical and mental capabilities after the effects of a performance-enhancing drug set in. Soon, she evolves into a warrior bent on destroying those who held her captive.', 'Scarlett Johansson, Morgan Freeman', 2014, 'nehaar', 'lucy.jpg', 'images/lucy.jpg', 'lucy.mp4', 'video/lucy.mp4'),
(4, 'Interstellar', 169, 'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.', 'Matthew McConaughey ,Anne Hathaway ,Jessica Chastain ,Bill Irwin', 2014, 'nehaar', 'interstellar.jpg', 'images/interstellar.jpg', 'interstellar.mp4', 'video/interstellar.mp4'),
(5, 'The Dark Knight', 152, 'After Gordon, Dent and Batman begin an assault on Gotham organized crime, the mobs hire the Joker, a psychopathic criminal mastermind who offers to kill Batman and bring the city to its knees.', 'Christian Bale ,Michael Caine, Heath Ledger, Gary Oldman', 2008, 'nehaar', 'bat-man.jpg', 'images/bat-man.jpg', 'dk.mp4', 'video/dk.mp4'),
(6, 'Jersey', 160, 'Arjun, a talented but failed cricketer, decides to return to cricket in his late thirties driven by the desire to represent the Indian cricket team and fulfil his sons wish for a jersey as a gift.', 'Nani,Shraddha Srinath', 2019, 'nehaar', 'jersey.jpeg', 'images/jersey.jpeg', 'jersey.mp4', 'video/jersey.mp4'),
(7, 'RRR', 182, 'A fearless revolutionary and an officer in the British force, who once shared a deep bond, decide to join forces and chart out an inspirational path of freedom against the despotic rulers.', 'N. T. Rama Rao Jr. ,Ram Charan ,Ajay Devgn ,Alia Bhatt', 2022, 'nehaar', 'rrr.jpeg', 'images/rrr.jpeg', 'RRR.mp4', 'video/RRR.mp4'),
(8, ' Ee Nagaraniki Emaindi', 140, 'Childhood friends Vivek, Karthik, Kaushik, and Uppi hope for careers in film-making during university but eventually give up and settle into other jobs. To earn money for a wedding, they enter Goa Short film festival and rekindle their dream.', 'Vishwak Sen , Sushanth Reddy, Abhinav Gomatam ,Venkatesh Kakamanu', 2018, 'nehaar', 'enem.jpeg', 'images/enem.jpeg', 'enem.mp4', 'video/enem.mp4'),
(9, 'Orange', 160, 'A man who does not believe in love after going through a heartbreak is in a relationship with a young woman. But when she asks him to be with her all his life, he hesitates to accept her proposal.', 'Ram Charan , Genelia D Souza', 2010, 'nehaar', 'orange.jpeg', 'images/orange.jpeg', 'Orange.mp4', 'video/Orange.mp4'),
(10, 'Agent Sai Srinivasa Athreya', 143, 'A private detective, who runs his own agency, solves menial cases with the help of his assistant. However, things take a serious turn when a father wants him to investigate his daughter murder.', 'Naveen Polishetty , Shruti Sharma', 2019, 'nehaar', 'agent.jpeg', 'images/agent.jpeg', 'agent.mp4', 'video/agent.mp4'),
(11, 'Enthiran', 177, 'After a decade of research, scientist Vaseegaran creates a sophisticated android humanoid robot with the help of his assistants, Siva and Ravi, in order to commission it into the Indian Army. He introduces the robot, named Chitti , at a robotics conference in Chennai.', '	 Rajinikanth, Aishwarya Rai Bachchan, Danny Denzongpa', 2010, 'nehaar', 'enthiran.png', 'images/enthiran.png', 'enthiran.mp4', 'video/enthiran.mp4'),
(12, 'Vikram', 174, 'A special agent investigates a murder committed by a masked group of serial killers. However, a tangled maze of clues soon leads him to the drug kingpin of Chennai.', 'Kamal Haasan ,Fahadh Faasil, Vijay Sethupathi ,Suriya', 2022, 'nehaar', 'vikram.jpeg', 'images/vikram.jpeg', 'vikram.mp4', 'video/vikram.mp4'),
(13, 'Master', 179, 'An alcoholic professor is enrolled to teach at a juvenile facility, unbeknownst to him. He soon clashes with a ruthless gangster, who uses the children as scapegoats for his crimes.', 'Vijay ,Vijay Sethupathi', 2021, 'nehaar', 'master.jpeg', 'images/master.jpeg', 'master.mp4', 'video/master.mp4'),
(14, '24', 164, 'A scientist invents a time-travelling watch, which his evil twin brother wants to get hold of. Years later, the scientists son battles his uncle, who is still desperately in search of the watch.', 'Suriya ,Samantha Ruth Prabhu ,Nithya Menen', 2016, 'nehaar', '24.jpeg', 'images/24.jpeg', '24.mp4', 'video/24.mp4'),
(15, '96', 158, 'K Ramachandran, a photographer, gets nostalgic after he visits his school in his hometown. During a reunion with his classmates, he meets Janaki, his childhood sweetheart.', 'Vijay Sethupathi , Trisha', 2018, 'nehaar', '96.jpeg', 'images/96.jpeg', '96.mp4', 'video/96.mp4'),
(16, 'Dilwale Dulhania Le Jayenge', 189, 'Raj and Simran meet during a trip across Europe and the two fall in love. However, when Raj learns that Simran is already promised to another, he follows her to India to win her and her father over.', 'Shah Rukh Khan , Kajol', 1995, 'nehaar', '2218185.jpg', 'images/2218185.jpg', 'Dilwale Dulhania Le Jayenge - Trailer.mp4', 'video/Dilwale Dulhania Le Jayenge - Trailer.mp4'),
(17, ' Chhichhore', 143, 'A tragic incident forces Anirudh, a middle-aged man, to take a trip down memory lane and reminisce his college days along with his friends, who were labelled as losers.', 'Sushant Singh Rajput , Shraddha Kapoor , Varun Sharma , Naveen Polishetty', 2019, 'nehaar', 'Chhichhore.jpg', 'images/Chhichhore.jpg', 'Chhichhore _ Official Trailer _ Nitesh Tiwari _ Sushant _ Shraddha _ Sajid Nadiadwala _ 6th Sept.mp4', 'video/Chhichhore _ Official Trailer _ Nitesh Tiwari _ Sushant _ Shraddha _ Sajid Nadiadwala _ 6th Sept.mp4'),
(18, 'War', 154, 'Kabir, a secret agent, goes rogue after a mission to catch a terrorist goes awry. However, his boss sends Khalid, another agent and his student, to track him down.', 'Hrithik Roshan , Tiger Shroff , Vaani Kapoor', 2019, 'nehaar', 'war.jpeg', 'images/war.jpeg', 'War Teaser _ Hrithik Roshan _ Tiger Shroff _ Vaani Kapoor _ 4K UHD Teaser.mp4', 'video/War Teaser _ Hrithik Roshan _ Tiger Shroff _ Vaani Kapoor _ 4K UHD Teaser.mp4'),
(19, 'M.S. Dhoni: The Untold Story', 190, 'M S Dhoni, a boy from Ranchi, aspires to play cricket for India. Though he initially tries to please his father by working for the Indian Railways, he ultimately decides to chase his dreams.', 'Sushant Singh Rajput  , Disha Patani , Kiara Advani', 2016, 'nehaar', 'msd.jpeg', 'images/msd.jpeg', 'M.S.Dhoni - The Untold Story _ Poora Focus Game Pe Lagayenge _ Dialogue Promo 1.mp4', 'video/M.S.Dhoni - The Untold Story _ Poora Focus Game Pe Lagayenge _ Dialogue Promo 1.mp4'),
(20, 'Saaho', 170, 'An undercover agent and his partner go after a thief who has stolen 2,000 crore rupees. Soon, they realise that the case is linked to the death of a crime lord and an emerging gang war.', 'Prabhas , Shraddha Kapoor , Chunky Pandey , Jackie Shroff', 2019, 'nehaar', 'saaho.jpeg', 'images/saaho.jpeg', 'Shades Of Saaho Re Edited Version #Prabhas #ShraddhaKapoor.mp4', 'video/saaho.mp4'),
(21, 'I Am That Change', 3, 'This Short film leaves you thinking about the country and our contribution to it everyday. Every positive change in ourselves is also a service to the nation.', 'Allu Arjun', 2014, 'nehaar', 'imthat.png', 'images/imthat.png', 'I Am That Change Short Film  -  Allu Arjun, Sukumar.mp4', 'video/I Am That Change Short Film  -  Allu Arjun, Sukumar.mp4'),
(22, 'Titanic', 195, 'Seventeen-year-old Rose hails from an aristocratic family and is set to be married. When she boards the Titanic, she meets Jack Dawson, an artist, and falls in love with him.', 'Leonardo DiCaprio , Kate Winslet', 1997, 'nehaar', 'titanic.jpg', 'images/titanic.jpg', 'Titanic__Jack_comes_to_first_class.(720p).mp4', 'video/titanic.mp4'),
(23, 'K.G.F: Chapter 2', 168, 'Rocky takes control of the Kolar Gold Fields and his newfound power makes the government as well as his enemies jittery. However, he still has to confront Ramika, Adheera and Inayat', 'Yash , Sanjay Dutt , Raveena Tandon , Srinidhi Shetty', 22, 'nehaar', 'kgf2.jpg', 'images/kgf2.jpg', 'KGF Chapter2 TEASER _Yash_Sanjay Dutt_Raveena Tandon_Srinidhi Shetty_Prashanth Neel_Vijay Kiragandur.mp4', 'video/KGF Chapter2 TEASER _Yash_Sanjay Dutt_Raveena Tandon_Srinidhi Shetty_Prashanth Neel_Vijay Kiragandur.mp4'),
(24, ' Pushpa: The Rise', 179, 'A labourer named Pushpa makes enemies as he rises in the world of red sandalwood smuggling. However, violence erupts when the police attempt to bring down his illegal business.', 'Allu Arjun , Fahadh Faasil , Rashmika Mandanna', 21, 'nehaar', 'pushpaaa.jpg', 'images/pushpaaa.jpg', 'pushpa.mp4', 'video/pushpa.mp4'),
(25, 'Pushpa: The Rise', 179, 'A labourer named Pushpa makes enemies as he rises in the world of red sandalwood smuggling. However, violence erupts when the police attempt to bring down his illegal business.', 'Allu Arjun , Fahadh Faasil  ,Rashmika Mandanna', 21, 'nehaar', 'pu.jpeg', 'images/pu.jpeg', 'pushpat.mp4', 'video/pushpat.mp4'),
(26, 'sita ramam', 124, 'sita ramam', 'DQ', 2022, 'viswesh', 'sitaramam.jpg', 'images/sitaramam.jpg', 'Sita Ramam Trailer - Telugu _ Dulquer Salmaan _ Mrunal _ Rashmika _ Sumanth _ Hanu Raghavapudi.mp4', 'video/Sita Ramam Trailer - Telugu _ Dulquer Salmaan _ Mrunal _ Rashmika _ Sumanth _ Hanu Raghavapudi.mp4'),
(27, 'Avatar: The Way Of Water', 192, 'Jake Sully and Neytiri have formed a family and are doing everything to stay together. However, they must leave their home and explore the regions of Pandora. When an ancient threat resurfaces, Jake must fight a difficult war against the humans.', 'Sam Worthington, Zoe Saldaña ,Sigourney Weaver ,Stephen Lang, Kate Winslet', 2022, 'Mary', 'Avatar2.jpeg', 'images/Avatar2.jpeg', 'Avatar_ The Way of Water _ New Trailer.mp4', 'video/Avatar_ The Way of Water _ New Trailer.mp4'),
(28, 'Avatar: The Way Of Water', 192, 'Jake Sully and Neytiri have formed a family and are doing everything to stay together. However, they must leave their home and explore the regions of Pandora. When an ancient threat resurfaces, Jake must fight a difficult war against the humans.', 'Sam Worthington, Zoe Saldaña ,Sigourney Weaver ,Stephen Lang, Kate Winslet', 2022, 'Mary', 'Avatar2.jpeg', 'images/Avatar2.jpeg', 'Avatar_ The Way of Water _ New Trailer.mp4', 'video/Avatar_ The Way of Water _ New Trailer.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
