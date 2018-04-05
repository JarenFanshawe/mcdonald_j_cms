-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2018 at 05:49 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_videoapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_arating`
--

CREATE TABLE `tbl_arating` (
  `arating_id` tinyint(3) UNSIGNED NOT NULL,
  `arating_name` varchar(250) NOT NULL,
  `arating_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_arating`
--

INSERT INTO `tbl_arating` (`arating_id`, `arating_name`, `arating_desc`) VALUES
(1, 'G', 'G – General Audiences\r\nAll ages admitted. Nothing that would offend parents for viewing by children. '),
(2, 'PG', 'PG – Parental Guidance Suggested\r\nSome material may not be suitable for children. '),
(3, 'PG-13', 'PG-13 – Parents Strongly Cautioned\r\nSome material may be inappropriate for children under 13. Parents are urged to be cautious. '),
(4, 'R', 'R – Restricted\r\nUnder 17 requires accompanying parent or adult guardian. Contains some adult material. Parents are urged to learn more about the film before taking their young children with them. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_arating_mov`
--

CREATE TABLE `tbl_arating_mov` (
  `arating_mov_id` tinyint(3) UNSIGNED NOT NULL,
  `movies_id` mediumint(9) NOT NULL,
  `arating_id` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_arating_mov`
--

INSERT INTO `tbl_arating_mov` (`arating_mov_id`, `movies_id`, `arating_id`) VALUES
(1, 1, 4),
(2, 2, 3),
(3, 3, 2),
(4, 4, 4),
(5, 5, 3),
(6, 6, 4),
(7, 7, 2),
(8, 8, 2),
(9, 9, 3),
(10, 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_genre`
--

CREATE TABLE `tbl_genre` (
  `genre_id` tinyint(3) UNSIGNED NOT NULL,
  `genre_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_genre`
--

INSERT INTO `tbl_genre` (`genre_id`, `genre_name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Comedy'),
(4, 'Crime'),
(5, 'Drama'),
(6, 'Historical'),
(7, 'Horror'),
(8, 'Musical'),
(9, 'Science Fiction'),
(10, 'War'),
(11, 'Western'),
(12, 'Animation'),
(13, 'Family'),
(14, 'Fantasy'),
(15, 'Romance'),
(16, 'Sport'),
(17, 'Thriller'),
(18, 'Mystery');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_genre_mov`
--

CREATE TABLE `tbl_genre_mov` (
  `genre_mov_id` mediumint(8) UNSIGNED NOT NULL,
  `movies_id` tinyint(3) NOT NULL,
  `genre_id` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_genre_mov`
--

INSERT INTO `tbl_genre_mov` (`genre_mov_id`, `movies_id`, `genre_id`) VALUES
(1, 1, 4),
(2, 1, 5),
(3, 2, 5),
(4, 2, 15),
(5, 3, 1),
(6, 3, 2),
(7, 3, 14),
(8, 4, 7),
(9, 4, 17),
(10, 5, 4),
(11, 5, 5),
(12, 6, 4),
(13, 6, 5),
(14, 7, 4),
(15, 7, 5),
(16, 8, 1),
(17, 8, 4),
(18, 8, 17),
(19, 9, 11),
(20, 10, 5),
(21, 0, 5),
(22, 0, 5),
(23, 11, 5),
(24, 12, 4),
(25, 13, 13),
(26, 14, 9),
(27, 15, 10),
(28, 16, 4),
(29, 17, 9),
(30, 0, 5),
(31, 18, 2),
(32, 19, 18),
(33, 0, 13),
(34, 20, 13),
(35, 21, 18),
(36, 22, 10),
(37, 23, 5),
(38, 24, 8),
(39, 0, 3),
(40, 25, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

CREATE TABLE `tbl_movies` (
  `movies_id` tinyint(3) UNSIGNED NOT NULL,
  `movies_cover` varchar(75) NOT NULL,
  `movies_title` varchar(200) NOT NULL,
  `movies_year` varchar(5) NOT NULL,
  `movies_duration` varchar(25) NOT NULL,
  `movies_plot` text NOT NULL,
  `movies_release` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`movies_id`, `movies_cover`, `movies_title`, `movies_year`, `movies_duration`, `movies_plot`, `movies_release`) VALUES
(1, 'driveCover.jpg', 'Drive', '2011', '1h 40m', 'A mysterious Hollywood stuntman and mechanic moonlights as a getaway driver and finds himself in trouble when he helps out his neighbor. ', '16 September, 2011'),
(2, 'forrestGumpCover.jpg', 'Forrest Gump', '1994', '2h 22m', 'The presidencies of Kennedy and Johnson, Vietnam, Watergate, and other history unfold through the perspective of an Alabama man with an IQ of 75. ', '6 July, 1994'),
(3, 'starWarsIVCover.jpg', 'Star Wars: Episode IV - A New Hope', '1977', '2h 1m', 'Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire\'s world-destroying battle-station while also attempting to rescue Princess Leia from the evil Darth Vader. ', '25 May, 1977'),
(4, 'psychoCover.jpg', 'Psycho', '1960', '1h 49m', 'A Phoenix secretary embezzles $40,000 from her employer\'s client, goes on the run, and checks into a remote motel run by a young man under the domination of his mother. ', '8 September 1960'),
(5, 'shawshankCover.jpg', 'The Shawshank Redemption', '1994', '2h 22m', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.', '4 October 1994'),
(6, 'godfatherCover.jpg', 'The Godfather', '1972', '2h 55m', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son. It won an Oscar!', '24 March 1972'),
(7, 'godfatherIICover.jpg', 'The Godfather: Part II', '1974', '3h 22m', 'The early life and career of Vito Corleone in 1920s New York City is portrayed, while his son, Michael, expands and tightens his grip on the family crime syndicate.', '20 December 1974'),
(8, 'darkKnightCover.jpg', 'The Dark Knight', '2008', '2h 32m', 'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham, the Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice. Batman is cool', '18 July 2008'),
(9, 'goodBadUglyCover.jpg', 'The Good, the Bad, and the Ugly', '1966', '2h 41m', 'A bounty hunting scam joins two men in an uneasy alliance against a third in a race to find a fortune in gold buried in a remote cemetery.', '23 December 1966'),
(10, 'fightClubCover.jpg', 'Fight Club', '1999', '2h 19m', 'An insomniac office worker, looking for a way to change his life, crosses paths with a devil-may-care soapmaker, forming an underground fight club that evolves into something much, much more.', '15 October 1999'),
(11, 'cuckoosNestCover.jpg', 'One Flew Over the Cuckoos Nest', '1975', '2h 13m', 'A criminal pleads insanity after getting into trouble again and once in the mental institution rebels against the oppressive nurse and rallies up the scared patients.', '19 November 1975'),
(12, 'goodfellasCover.jpg', 'Goodfellas', '1990', '2h 26m', 'The story of Henry Hill and his life in the mob, covering his relationship with his wife Karen Hill and his mob partners Jimmy Conway and Tommy DeVito in the Italian-American crime syndicate. ', '21 September 1990'),
(13, 'spyKidsCover.jpg', 'Spy Kids', '2001', '1h 28m', 'The children of secret-agent parents must save them from danger. ', '30 March 2001'),
(14, 'matrixCover.jpg', 'The Matrix', '1999', '2h 16m', 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers. ', '31 March 1999'),
(15, 'privateRyanCover.jpg', 'Saving Private  Ryan', '1998', '2h 49m', 'Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action. ', '24 July 1998'),
(16, 'departedCover.jpg', 'The Departed', '2006', '2h 31m', 'An undercover cop and a mole in the police attempt to identify each other while infiltrating an Irish gang in South Boston. ', '6 October 2006'),
(17, 'backToTheFuture.jpg', 'Back to the Future', '1985', '1h 56m', 'Marty McFly, a 17-year-old high school student, is accidentally sent thirty years into the past in a time-traveling DeLorean invented by his close friend, the maverick scientist Doc Brown. ', '3 July 1985'),
(18, 'lostArkCover.jpg', 'Raiders of the Lost Ark', '1981', '1h 55m', 'Archaeologist and adventurer Indiana Jones is hired by the U.S. government to find the Ark of the Covenant before the Nazis. ', '12 June 1881'),
(19, 'rearWindow.jpg', 'Rear Window', '1954', '1h 52m', 'A wheelchair-bound photographer spies on his neighbors from his apartment window and becomes convinced one of them has committed murder. ', 'September 1954'),
(20, 'lionKing.jpg', 'The Lion King', '1994', '1h 28m', 'A Lion cub crown prince is tricked by a treacherous uncle into thinking he caused his fathers death and flees into exile in despair, only to learn in adulthood his identity and his responsibilities.', '24 June 1994'),
(21, 'prestige.jpg', 'The Prestige', '2006', '2h 10m', 'After a tragic accident two stage magicians engage in a battle to create the ultimate illusion whilst sacrificing everything they have to outwit the other. ', '20 October 2006'),
(22, 'apocalypse.jpg', 'Apocalypse Now', '1979', '2h 27m', 'During the Vietnam War, Captain Willard is sent on a dangerous mission into Cambodia to assassinate a renegade Colonel who has set himself up as a god among a local tribe. ', '15 August 1979'),
(23, 'taxiDriverCover.jpg', 'Taxi Driver', '1976', '1h 54m', 'A mentally unstable veteran works as a nighttime taxi driver in New York City, where the perceived decadence and sleaze fuels his urge for violent action, while attempting to liberate a twelve-year-old prostitute. ', '8 February 1976'),
(24, 'singingRainCover.jpg', 'Singin in the Rain', '1952', '1h 43m', 'A silent film production company and cast make a difficult transition to sound. ', '11 April 1952'),
(25, 'toyStoryCover.jpg', 'Toy Story', '1995', '1h 21m', 'A cowboy doll is profoundly threatened and jealous when a new spaceman figure supplants him as top toy in a boys room. ', '22 November 1995');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(256) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ip` varchar(50) NOT NULL DEFAULT 'no',
  `user_lvl` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`, `user_lvl`) VALUES
(7, 'Jaren', 'jmcdonald', 'password', 'jaren@gmail.com', '2018-04-02 16:29:20', '::1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_arating`
--
ALTER TABLE `tbl_arating`
  ADD PRIMARY KEY (`arating_id`);

--
-- Indexes for table `tbl_arating_mov`
--
ALTER TABLE `tbl_arating_mov`
  ADD PRIMARY KEY (`arating_mov_id`);

--
-- Indexes for table `tbl_genre`
--
ALTER TABLE `tbl_genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `tbl_genre_mov`
--
ALTER TABLE `tbl_genre_mov`
  ADD PRIMARY KEY (`genre_mov_id`);

--
-- Indexes for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  ADD PRIMARY KEY (`movies_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_arating`
--
ALTER TABLE `tbl_arating`
  MODIFY `arating_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_arating_mov`
--
ALTER TABLE `tbl_arating_mov`
  MODIFY `arating_mov_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_genre`
--
ALTER TABLE `tbl_genre`
  MODIFY `genre_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_genre_mov`
--
ALTER TABLE `tbl_genre_mov`
  MODIFY `genre_mov_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  MODIFY `movies_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
